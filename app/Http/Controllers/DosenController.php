<?php

namespace App\Http\Controllers;

use App\Models\Kosentrasi;
use App\Models\Pendaftaran_skripsi;
use App\Models\Prodi;
use App\Models\Progress;
use App\Models\Proposals;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    //
    public function index()
    {
        $porposal = Proposals::where('pembimbing_nip', Auth::user()->username)->get();

        return view('dosen.index', [
            'proposals' => $porposal
        ]);
    }

    public function addproposal(Request $request, $id)
    {
        $proposal = Proposals::findOrFail($id);

        $proposal->komentar = $request->komentar;
        $proposal->keterangan = $request->keterangan;
        $proposal->update();

        return redirect()->route('dosen.index')->with('success', 'Proposal created successfully');
    }

    public function addinformation()
    {
        return view('modal.index');
    }

    public function riwayat()
    {

        // $seminar = Seminar::where('dosen_id', auth()->id())->latest()->first();
        // $progress = Progress::where('seminar', $seminar?->id)->whereIn('status', ['Selesai', 'Tolak', 'Revisi'])->latest()->get();
        // $count = Progress::where('seminar', $seminar?->id)->where('status', 'Usulan')->count();

        return view('dosen.riwayat', [
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

        return view('dosen.show', [
            'proposal' => $proposal,
            'prodi' => $prodi,
            'konsentrasi' => $konsentrasi,
            'pendaftaran_skripsi' => $pendaftaran_skripsi
        ]);
    }

    public function tolak($id)
    {

        $proposal = Proposals::findOrFail($id);

        $proposal->komentar = '-';
        $proposal->keterangan = 'Tidak Diterima';
        $proposal->update();

        return redirect()->route('dosen.index')->with('success', 'Proposal created successfully');
    }


    public function admin()
    {
        // $progress = Progress::whereIn('status', ['Usulan', 'Tolak', 'Selesai', 'Revisi'])->latest()->get();

        return view('dosen.admin', [
            // 'progress' => $progress
        ]);
    }
}
