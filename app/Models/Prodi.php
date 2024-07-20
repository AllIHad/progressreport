<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;


    public function pendaftaran_skripsi()
    {
        return $this->belongsTo(Pendaftaran_skripsi::class);
    }
}
