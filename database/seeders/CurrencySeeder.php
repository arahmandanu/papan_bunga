<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::insert([
            [
                'name' => 'USD',
                'flag' => 'flags/USD.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'SGD',
                'flag' => 'flags/SGD.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'EUR',
                'flag' => 'flags/EUR.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'AUD',
                'flag' => 'flags/AUD.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'GBP',
                'flag' => 'flags/GBP.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'JPY',
                'flag' => 'flags/JPY.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'PHP',
                'flag' => 'flags/PHP.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'NZD',
                'flag' => 'flags/NZD.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'NOK',
                'flag' => 'flags/NOK.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'MYR',
                'flag' => 'flags/MYR.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'KRW',
                'flag' => 'flags/KRW.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'TWD',
                'flag' => 'flags/TWD.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'THB',
                'flag' => 'flags/THB.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'DKK',
                'flag' => 'flags/DKK.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'INR',
                'flag' => 'flags/INR.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'CNY',
                'flag' => 'flags/CNY.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => true,
                'default' => true,
            ],
        ]);
    }
}
