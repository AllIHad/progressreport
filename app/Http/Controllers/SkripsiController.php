<?php

namespace App\Http\Controllers;

use App\Models\Bab1;
use App\Models\Bab2;
use App\Models\Bab3;
use App\Models\Skripsi;
use Illuminate\Http\Request;

class SkripsiController extends Controller
{
    //
    public function index(){

        // $skripsis = Skripsi::latest()->get();      

        return view('skripsi.index', ['data' => '']);
    }
    
    public function create(){
        return view('skripsi.create');
    }

    public function show($id){

        $skripsi = Skripsi::findOrFail($id);

        $bab1 = Bab1::findOrFail($skripsi->bab1_id);
        $bab2 = Bab2::findOrFail($skripsi->bab2_id);
        $bab3 = Bab3::findOrFail($skripsi->bab3_id);

        return view('skripsi.show',[
            'bab1' => $bab1,
            'bab2' => $bab2,
            'bab3' => $bab3
        ]);
    }

    public function store(){
        
        $bab1 = new Bab1();

        $bab1->latar_belakang = request('latar_belakang');
        $bab1->masalah = request('tujuan');
        $bab1->tujuan = request('tujuan');
        $bab1->save();

        $bab2 = new Bab2();

        $bab2->tinjauan_pustaka = request('tinjauan_pustaka');
        $bab2->save();
        
        $bab3 = new Bab3();
        $bab3->metode = request('metode');
        $bab3->save();

        $skripsi = new Skripsi();

        $skripsi->bab1_id = $bab1->id;
        $skripsi->bab2_id = $bab2->id;
        $skripsi->bab3_id = $bab3->id;

        $skripsi->save();
        
        return redirect('/skripsi');
    }
}
