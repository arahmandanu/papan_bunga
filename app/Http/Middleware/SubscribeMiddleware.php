<?php

namespace App\Http\Middleware;

use App\Models\Properties;
use Closure;
use Illuminate\Http\Request;
use starekrow\Lockbox\CryptoKey;

class SubscribeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $file = public_path('cipher.txt');
        $decryptor = public_path('key.txt');
        if (!file_exists($file) || !file_exists($decryptor)) {
            return response()->view('errors.subscribe');
        }

        try {
            $key = CryptoKey::Import(file_get_contents("key.txt"));
            $ciphertext = file_get_contents("cipher.txt");
            $name = $key->Unlock($ciphertext);
            $check = $this->checkSubscription($name);
            if (!$check) return response()->view('errors.subscribe');
        } catch (\Throwable $th) {
            return response()->view('errors.subscribe');
        }

        return $next($request);
    }

    private function checkSubscription($name)
    {
        $properties = Properties::first();
        if (empty($properties)) {
            Properties::create([
                'company_name' => $name
            ]);
        } else {
            if ($properties->company_name != $name) return false;
        }

        return true;
    }
}
