<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'mahasiswa_id',
        'dosen_id',
        'dosen_id2',
    ];
}
