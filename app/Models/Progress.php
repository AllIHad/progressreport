<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

    protected $fillable = [
        'progress_report',
        'status',
        'nama',
        'dosen',
        'seminar',
        'bimbingan',
        'bab1_id',
        'bab2_id',
        'bab3_id',
        'bab4_id',
        'bab5_id',
        'coomments'
    ];

    protected $casts = [
        'comments' => 'array',
    ];
    
}
