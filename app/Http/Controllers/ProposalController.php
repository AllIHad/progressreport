<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;

use App\Models\Bab1;
use App\Models\Bab2;
use App\Models\Bab3;
use App\Models\Progress;

class ProposalController extends Controller
{
    //

    public function create()
    {

        return view('proposal.create');
    }



    public function store(){ 
        $validated = request()->validate(
            [
                'dosen_id' => [
                    'string',
                    Rule::in(['1','2','3'])
                ],
            ]
        );
    

        $progress = new Progress(); 

        $progress->bab1 = request('latar');
        $progress->bab2 = request('pustaka');
        $progress->bab3 = request('metode');
        $progress->dosen_id = request('dosen_id');
        $progress->user_id = auth()->id();
        $progress->progress_report = request('progress_report');
        $progress->save();
        
        return redirect()->route('progress.index')->with('success','Skripsi created successfully');
    }   
}
