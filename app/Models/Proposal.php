<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $casts = [
        'bab1' => 'array',
        'bab2'=>'array',
        'bab3' => 'array',
    ];
}
