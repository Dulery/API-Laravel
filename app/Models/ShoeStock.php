<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoeStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'shoe_name',
        'size',
        'quantity',
    ];
}