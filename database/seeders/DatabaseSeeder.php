<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SuperAdminSeeder::class);
        $this->call(CurrencySeeder::class);
        $this->call(FooterTextSeeder::class);
        $this->call(TextColorSeeder::class);
    }
}
