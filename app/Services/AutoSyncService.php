<?php

namespace App\Services;

use App\Models\Currency;
use Illuminate\Support\Facades\Http;

class AutoSyncService
{
    public function __construct()
    {
    }

    public function call()
    {
        $onlineApp = env('CENTRAL_APP', false);
        $domain = env('ONLINE_APP_URL', '');
        if ($onlineApp || empty($domain)) return true;

        $path = '/api/get_currency';
        $url = $domain . $path;
        try {
            $response = Http::timeout(3)->connectTimeout(3)->get($url);

            if ($response->successful()) {
                $data = json_decode($response->body(), true);
                if (!empty($data['data'])) {
                    foreach ($data['data'] as $key => $value) {
                        $localData = Currency::where('name', $value['name'])->first();
                        if ($localData) {
                            $localData->update([
                                'buy' => $value['buy'],
                                'sell' => $value['sell']
                            ]);
                        }
                    }
                }
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        return true;
    }
}
