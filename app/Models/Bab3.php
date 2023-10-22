<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bab3 extends Model
{
    use HasFactory;
    protected $casts = [
        'metode' => 'array',
        'comment' => 'array',
    ];
}
