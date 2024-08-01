<?php

namespace App\Services;

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
            $response = Http::timeout(3)->connectTimeout(3)->accept('application/json')->get($url);

            if ($response->successful()) {
                $data = json_decode($response->body());
                dd($data);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        return true;
    }
}
