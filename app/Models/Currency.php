<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    public const FLAG_PATH = 'flags/';

    public $table = 'currency';

    protected $fillable = [
        'flag',
        'name',
        'buy',
        'sell',
        'displayed',
        'default',
    ];
}
