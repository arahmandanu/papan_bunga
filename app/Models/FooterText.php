<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterText extends Model
{
    use HasFactory;
    public $table = 'footer_texts';

    protected $fillable = [
        'text',
        'number_show'
    ];
}
