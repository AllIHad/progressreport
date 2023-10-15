<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProposalController extends Controller
{
    //
    public function index()
    {

        return view('proposal.index',[
            'data' => null,
        ]);
    }

    public function create()
    {

        return view('proposal.create');
    }

    public function show($id)
    {


        return view('proposal.show', [
            'id' => $id
        ]);
    }

    public function store(){

        return request('bab1');

        // return redirect('/proposal');
    }   
}
