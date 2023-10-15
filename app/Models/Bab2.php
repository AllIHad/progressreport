<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab2 extends Model
{
    use HasFactory;
    protected $casts = [
        'tinjauan_pustaka' => 'array',
    ];
    
}
