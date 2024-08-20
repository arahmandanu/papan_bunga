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
                'buy' => '15.410,00',
                'sell' => '15.740,00',
                'displayed' => true,
                'display_number' => 1,
                'default' => true,
            ],
            [
                'name' => 'CAD',
                'flag' => 'flags/CAD.png',
                'buy' => '11.302,67',
                'sell' => '11.502,67',
                'displayed' => true,
                'display_number' => 2,
                'default' => true,
            ],
            [
                'name' => 'AUD',
                'flag' => 'flags/AUD.png',
                'buy' => '10.319,07',
                'sell' => '10.519,07',
                'displayed' => true,
                'display_number' => 3,
                'default' => true,
            ],
            [
                'name' => 'SGD',
                'flag' => 'flags/SGD.png',
                'buy' => '11.708,75',
                'sell' => '12.108,75',
                'display_number' => 4,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'HKD',
                'flag' => 'flags/HKD.png',
                'buy' => '1.926,38',
                'sell' => '2.076,38',
                'display_number' => 5,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'GBP',
                'flag' => 'flags/GBP.png',
                'buy' => '20.087,27',
                'sell' => '20.327,27',
                'display_number' => 6,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'CHF',
                'flag' => 'flags/CHF.png',
                'buy' => '17.964,28',
                'sell' => '18.164,28',
                'display_number' => 7,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'EUR',
                'flag' => 'flags/EUR.png',
                'buy' => '17.113,95',
                'sell' => '17.313,95',
                'display_number' => 8,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'SAR',
                'flag' => 'flags/SAR.png',
                'buy' => '4.054,45',
                'sell' => '4.404,45',
                'display_number' => 9,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'CNY',
                'flag' => 'flags/CNY.png',
                'buy' => '2.101,79',
                'sell' => '2.271,79',
                'display_number' => 10,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'MYR',
                'flag' => 'flags/MYR.png',
                'buy' => '3.485,10',
                'sell' => '3.610,10',
                'display_number' => 11,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'THB',
                'flag' => 'flags/THB.png',
                'buy' => '413,17',
                'sell' => '493,17',
                'display_number' => 12,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'JPY',
                'flag' => 'flags/JPY.png',
                'buy' => '102,14',
                'sell' => '111,11',
                'display_number' => 13,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'KRW',
                'flag' => 'flags/KRW.png',
                'buy' => '6,70',
                'sell' => '16,70',
                'display_number' => 14,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'PGK',
                'flag' => 'flags/PGK.png',
                'buy' => '3.744,31',
                'sell' => '3.884,31',
                'display_number' => 15,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'NZD',
                'flag' => 'flags/NZD.png',
                'buy' => '9.373,53',
                'sell' => '9.573,53',
                'display_number' => 16,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'BND',
                'flag' => 'flags/BND.png',
                'buy' => '11.808,75',
                'sell' => '12.008,75',
                'display_number' => 17,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'AED',
                'flag' => 'flags/AED.png',
                'buy' => '4.159,08',
                'sell' => '4.344,08',
                'display_number' => 18,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'INR',
                'flag' => 'flags/INR.png',
                'buy' => '165,98',
                'sell' => '205,98',
                'display_number' => 19,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'PHP',
                'flag' => 'flags/PHP.png',
                'buy' => '225,06',
                'sell' => '325,06',
                'display_number' => 20,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'VND',
                'flag' => 'flags/VND.png',
                'buy' => '0,37',
                'sell' => '0,92',
                'display_number' => 21,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'TWD',
                'flag' => 'flags/TWD.png',
                'buy' => '337,26',
                'sell' => '524,26',
                'display_number' => 22,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'NOK',
                'flag' => 'flags/NOK.png',
                'buy' => '1.480,30',
                'sell' => '1.489,63',
                'display_number' => 23,
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'DKK',
                'flag' => 'flags/DKK.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'display_number' => 24,
                'displayed' => false,
                'default' => true,
            ],
            [
                'name' => 'SEK',
                'flag' => 'flags/SEK.png',
                'buy' => '1.511,42',
                'sell' => '1.520,70',
                'display_number' => 25,
                'displayed' => true,
                'default' => true,
            ],
        ]);
    }
}
