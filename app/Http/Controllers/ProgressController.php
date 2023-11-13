<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\Seminar;

class ProgressController extends Controller
{
    //
    public function index()
    {

        $seminar = Seminar::where('mahasiswa_id', auth()->id())->latest()->first();

        $progress = Progress::where('seminar', $seminar?->id)->where('status', 'Usulan')->latest()->get();

        // return $dosen_pembimbing;

        return view('progress.index', [
            'progress' => $progress,
        ]);
    }

    public function riwayat()
    {
        $seminar = Seminar::where('mahasiswa_id', auth()->id())->latest()->first();
        $progress = Progress::where('seminar', $seminar?->id)->whereIn('status', ['Selesai','Tolak','Revisi'])->latest()->get();
       

        return view('progress.riwayat', [
            'progress' => $progress,
        ]);
    }

    public function show($id)
    {
        $progres = Progress::findOrFail($id);

        return view('progress.show', [
            'progres' => $progres,

        ]);
    }
}
