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
                'buy' => '16.145,00',
                'sell' => '16.235,00',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'SGD',
                'flag' => 'flags/SGD.png',
                'buy' => '11.987,67',
                'sell' => '12.086,21',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'EUR',
                'flag' => 'flags/EUR.png',
                'buy' => '17.556,30',
                'sell' => '17.703,15',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'AUD',
                'flag' => 'flags/AUD.png',
                'buy' => '10.784,86',
                'sell' => '10.888,94',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'GBP',
                'flag' => 'flags/GBP.png',
                'buy' => '20.827,05',
                'sell' => '21.014,71',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'JPY',
                'flag' => 'flags/JPY.png',
                'buy' => '102,44',
                'sell' => '103,36',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'PHP',
                'flag' => 'flags/PHP.png',
                'buy' => '274,95',
                'sell' => '279,43',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'NZD',
                'flag' => 'flags/NZD.png',
                'buy' => '9.699,15',
                'sell' => '9.795,96',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'NOK',
                'flag' => 'flags/NOK.png',
                'buy' => '1.480,30',
                'sell' => '1.489,63',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'MYR',
                'flag' => 'flags/MYR.png',
                'buy' => '3.434,11',
                'sell' => '3.473,73',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'KRW',
                'flag' => 'flags/KRW.png',
                'buy' => '11,62',
                'sell' => '11,69',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'TWD',
                'flag' => 'flags/TWD.png',
                'buy' => '491,96',
                'sell' => '495,21',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'THB',
                'flag' => 'flags/THB.png',
                'buy' => '441,72',
                'sell' => '449,47',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'DKK',
                'flag' => 'flags/DKK.png',
                'buy' => '124.456,78',
                'sell' => '124.456,78',
                'displayed' => false,
                'default' => true,
            ],
            [
                'name' => 'INR',
                'flag' => 'flags/INR.png',
                'buy' => '192,32',
                'sell' => '194,43',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'CNY',
                'flag' => 'flags/CNY.png',
                'buy' => '2.209,22',
                'sell' => '2.235,24',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'SAR',
                'flag' => 'flags/SAR.png',
                'buy' => '4.291,89',
                'sell' => '4.345,72',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'SEK',
                'flag' => 'flags/SEK.png',
                'buy' => '1.511,42',
                'sell' => '1.520,70',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'VND',
                'flag' => 'flags/VND.png',
                'buy' => '0,64',
                'sell' => '0,64',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'CHF',
                'flag' => 'flags/CHF.png',
                'buy' => '18.143,57',
                'sell' => '18.316,21',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'CAD',
                'flag' => 'flags/CAD.png',
                'buy' => '11.741,51',
                'sell' => '11.845,68',
                'displayed' => true,
                'default' => true,
            ],
            [
                'name' => 'AED',
                'flag' => 'flags/AED.png',
                'buy' => '4.383,08',
                'sell' => '4.432,62',
                'displayed' => true,
                'default' => true,
            ],
        ]);
    }
}
