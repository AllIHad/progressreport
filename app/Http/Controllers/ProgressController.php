<?php

namespace App\Http\Controllers;

use App\Models\Kosentrasi;
use Illuminate\Support\Facades\Auth;

use App\Models\Proposals;
use App\Models\User;
use App\Models\Prodi;
use App\Models\Pendaftaran_skripsi;

class ProgressController extends Controller
{
    //
    public function index()
    {
        $proposal = Proposals::where('mahasiswa_nim', Auth::user()->username)->get();

        return view('progress.index', [
            'proposals' => $proposal
        ]);
    }

    public function riwayat()
    {
        // $seminar = Seminar::where('mahasiswa_id', auth()->id())->latest()->first();
        // $progress = Progress::where('seminar', $seminar?->id)->whereIn('status', ['Selesai', 'Tolak', 'Revisi'])->latest()->get();
        // $count = Progress::where('seminar', $seminar?->id)->where('status', 'Usulan')->count();


        return view('progress.riwayat', [
            // 'progress' => $progress,
            // 'count' => $count
        ]);
    }

    public function show($id)
    {
        $proposal = Proposals::findOrFail($id);
        $mahasiswa = User::where('username', $proposal->mahasiswa_nim)->first();
        $pendaftaran_skripsi = Pendaftaran_skripsi::where('nim', $proposal->mahasiswa_nim)->first(); 
        $prodi = Prodi::where('id', $mahasiswa->prodi_id)->first();
        $konsentrasi = Kosentrasi::where('id', $mahasiswa->konsentrasi_id)->first();

        return view('progress.show', [
            'proposal' => $proposal,
            'prodi' => $prodi,
            'konsentrasi' => $konsentrasi,
            'pendaftaran_skripsi' => $pendaftaran_skripsi
        ]);
    }

}
