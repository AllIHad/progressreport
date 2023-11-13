<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\Seminar;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index()
    {

        $seminar = Seminar::where('dosen_id', auth()->id())->latest()->first();
        $progress = Progress::where('seminar', $seminar?->id)->where('status', 'Usulan')->latest()->get();

        return view('dosen.index', [
            'progress' => $progress
        ]);
    }

    public function riwayat()
    {

        $seminar = Seminar::where('dosen_id', auth()->id())->latest()->first();
        $progress = Progress::where('seminar', $seminar?->id)->whereIn('status', ['Selesai','Tolak','Revisi'])->latest()->get();

        return view('dosen.riwayat', [
            'progress' => $progress 
        ]);
    }

    public function comment($id)
    {

        $progress = Progress::findOrFail($id);

        $progress->comments = request('comments');
        $progress->update(); 

        return redirect()->back()->with('message', 'Comments added');
    }


    public function show($id)
    {

        $progress = Progress::findOrFail($id);

        return view('dosen.show', [
            'progress' => $progress,
        ]);
    }


    public function revisi($id)
    {
        $progress = Progress::findOrFail($id);


        $progress->status = 'Revisi';
        $progress->update();

        return redirect()->route('dosen.index')->with('success', 'Progress Revisi');
    }

    public function tolak($id)
    {
        $progress = Progress::findOrFail($id);

        $progress->status = 'Tolak';
        $progress->update();

        return redirect()->route('dosen.index')->with('success', 'Progress di Tolak');
    }

    public function selesai($id)
    {
        $progress = Progress::findOrFail($id);

        $progress->status = 'Selesai';
        $progress->update();

        return redirect()->route('dosen.index')->with('success', 'Progress Selesai');
    }
}
