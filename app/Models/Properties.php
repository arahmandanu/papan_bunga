<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;

    public $table = 'properties';

    protected $fillable = [
        'company_name',
    ];
}