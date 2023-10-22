<?php

namespace App\Http\Controllers;

use App\Models\Bab1;
use App\Models\Bab2;
use App\Models\Bab3;
use App\Models\Proposal;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    //
    public function index()
    {

        $proposals = Proposal::latest()->get();      

        return view('proposal.index',[
            'proposals' => $proposals,
        ]);
    }

    public function create()
    {

        return view('proposal.create');
    }

    public function show($id)
    {
        $proposal = Proposal::findOrFail($id);

        $bab1 = Bab1::findOrFail($proposal->bab1_id);

        $bab2 = Bab2::findOrFail($proposal->bab2_id);

        $bab3 = Bab3::findOrFail($proposal->bab3_id);

        return view('proposal.show', [
            'bab1' => $bab1,
            'bab2' => $bab2,
            'bab3' => $bab3,
        ]);
    }

    public function store(){

        $bab1 = new Bab1();

        $bab1->latar = request('latar');
        $bab1->save();

        $bab2 = new Bab2();

        $bab2->pustaka = request('pustaka');
        $bab2->save();

        $bab3 = new Bab3();

        $bab3->metode = request('metode');
        $bab3->save();

        $proposal = new Proposal(); 

        $proposal->judul = request('judul');
        $proposal->dosen_id = request('dosen_id');
        $proposal->user_id = request('dosen_id');
        $proposal->bab1_id = $bab1->id;
        $proposal->bab2_id = $bab2->id;
        $proposal->bab3_id = $bab3->id;
        $proposal->save();
        
        return redirect('/proposal');
    }   
}
