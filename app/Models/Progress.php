<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'progress_report',
        'status',
        'user_id',
        'dosen_id',
        'bab1_id',
        'bab2_id',
        'bab3_id',
        'bab4_id',
        'bab5_id',
    ];

    protected $casts = [
        'comment' => 'array',
    ];
    
}
