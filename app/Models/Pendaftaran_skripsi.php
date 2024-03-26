<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran_skripsi extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'nim',
        'pembimbing_nip'
    ];
}
