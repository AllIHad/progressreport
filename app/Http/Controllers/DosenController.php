<?php

namespace App\Http\Controllers;

use App\Models\Proposal;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index (){

        $proposals = Proposal::latest()->get();
        
        return view('dosen.index', [
            'proposals' => $proposals,
        ]);
    }

    public function show(){
        
        return view('dosen.show');
    }
}
