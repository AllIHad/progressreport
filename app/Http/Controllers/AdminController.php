<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran_skripsi;
use App\Models\Pr_Proposal;
use App\Models\Pr_Skripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $pendaftaran_skripsis = Pendaftaran_skripsi::with('users','konsentrasi','prodis')->get();

        $jumlahproposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->count();
        $jumlahskripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->count();
        $riwayatproposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->count();
        $riwayatskripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->count();

        return view('dosen.admin',[
            'pendaftaran_skripsis' => $pendaftaran_skripsis,
            'jumlah_riwayat' => $riwayatproposal + $riwayatskripsi,
            'jumlah' => $jumlahproposal + $jumlahskripsi
        ])->with('success', 'Skripsi Updated successfully');
    }
}
