<?php

namespace Database\Seeders;

use App\Models\FooterText;
use Illuminate\Database\Seeder;

class FooterTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FooterText::create([
            'text' => 'SELAMAT DATANG DI BRI',
            'number_show' => 1
        ]);
    }
}
