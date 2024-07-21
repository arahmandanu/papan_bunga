<?php

namespace Database\Seeders;

use App\Models\TextColor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TextColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (TextColor::TEXTCOLORS as $key => $color) {
            TextColor::create([
                'name' => $color['name'],
                'default' => $color['default']
            ]);
        }
    }
}
