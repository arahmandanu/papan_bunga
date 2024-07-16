<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    public $table = 'currency';

    protected $fillable = [
        'flag',
        'name',
        'buy',
        'sell',
        'displayed',
        'default'
    ];
}
