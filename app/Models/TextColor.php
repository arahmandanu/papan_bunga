<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextColor extends Model
{
    public const TEXTCOLORS = [
        [
            'name' => 'data_time_color',
            'default' => '#d65318'
        ],
        [
            'name' => 'footer_color',
            'default' => '#e4dc6a'
        ],
        [
            'name' => 'kurs_color',
            'default' => '#e4dc6a'
        ]
    ];
    use HasFactory;

    protected $fillable = [
        'name',
        'value',
        'default'
    ];
}
