<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index (){
        
        return view('dosen.index', [
            'progress' => 'progress'
        ]);
    }

    public function show(){
        
        return view('dosen.show');
    }
}
