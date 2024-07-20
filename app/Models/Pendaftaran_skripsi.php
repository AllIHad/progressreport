<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pendaftaran_skripsi extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'nim',
        'pembimbing_nip',
        'konsentrasi_id',
        'prodi_id',
        'status'
    ];

    public function users(){
        return $this->hasMany(User::class, 'username', 'nim');
    }

    public function pembimbing(){
        return $this->hasMany(User::class, 'username', 'pembimbing_nip');
    }

    public function konsentrasi(){
        return $this->hasMany(Kosentrasi::class, 'id', 'konsentrasi_id');
    }

    public function prodis(){
        return $this->hasMany(Prodi::class, 'id', 'prodi_id');
    }

}
