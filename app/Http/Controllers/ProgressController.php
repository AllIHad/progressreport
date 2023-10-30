<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\User;
use Illuminate\Http\Request;

class ProgressController extends Controller
{
    //
    public function index(){

        $progress = Progress::where('user_id', auth()->id())->latest()->get();

        $plucked = $progress->pluck('dosen_id');
        
        $dosen_pembimbing = User::where('id', [$plucked])->get();

        // return $dosen_pembimbing;

        return view('progress.index',[
            'progress' => $progress,
            'dosen_pembimbing' => $dosen_pembimbing
        ]);
    }

    public function show($id)
    {

        return view('progress.show', [
            'id' => $id,
            
        ]);
    }
}
