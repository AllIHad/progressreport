<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Proposals;
use App\Models\Pendaftaran_skripsi;
use App\Models\User;
use Carbon\Carbon;

class ProposalController extends Controller
{
    //

    public function create()
    {
        $proposal = Proposals::where('mahasiswa_nim', Auth::user()->username)->latest()->first();

        $bimbingan_ke = 0;

        if($proposal?->bimbingan){
           $bimbingan_ke = $proposal->bimbingan + 1;
        }else{
            $bimbingan_ke = 1;
        }


        return view('proposal.create', [
            'proposal' => $proposal,
            'bimbingan_ke' => $bimbingan_ke
        ]);
    }


    public function store(Request $request)
    {
        $judul = Pendaftaran_skripsi::where('nim', Auth::user()->username)->first();
        $dosen = User::where('username', $judul->pembimbing_nip)->first();
        // dd($request->all());
        $request->validate([
            'diskusi' => 'required',
            'naskah' => 'required|mimes:pdf|max:5000',
            'bab1' => 'required',
        ]);

        $proposal = new Proposals();
    
        $proposal->naskah = str_replace('public/', '', $request->file('naskah')->store('public/file'));
        $proposal->bimbingan = $request->bimbingan_ke;
        $proposal->mahasiswa_nama = Auth::user()->name;
        $proposal->mahasiswa_nim = Auth::user()->username;
        $proposal->pembimbing_nama = $dosen->name;
        $proposal->pembimbing_nip = $dosen->username;
        $proposal->diskusi = $request->diskusi;
        $proposal->bab1 = $request->bab1;
        if ($request->bab2) {
            $proposal->bab2 = $request->bab2;
        }
        if ($request->bab3) {
            $proposal->bab3 = $request->bab3;
        }
        $bab1_percent = 0;
        $bab2_percent = 0;
        $bab3_percent = 0;

        $array_bab1 = count($request->bab1);

        if($array_bab1 == 6) {
            $bab1_percent = 100;
        }elseif($array_bab1 == 5){
            $bab1_percent = 83;
        }elseif($array_bab1 == 4){
            $bab1_percent = 66;
        }elseif($array_bab1 == 3){
            $bab1_percent = 50;
        }elseif($array_bab1 == 2){
            $bab1_percent = 33;
        }else{
            $bab1_percent = 17;
        }
        $array_bab2 = count($request->bab2);

        if($array_bab2 == 2){
            $bab2_percent = 100;
        }else{
            $bab2_percent = 50;
        }

        $array_bab3 = count($request->bab3);

        if($array_bab3 == 2){
            $bab3_percent = 100;
        }else{
            $bab3_percent = 50;
        }


    
        $proposal->progress_report = ($bab1_percent + $bab2_percent + $bab3_percent) / 3 ; 

        $proposal->tanggal = Carbon::now();
        $proposal->save();

        return redirect()->route('progress.index')->with('success', 'Proposal created successfully');
    }

    public function update(Request $request)
    {
        $request->validate([
            'diskusi' => 'required',
            'naskah' => 'required|mimes:pdf|max:5000',
            'bab1' => 'required',
        ]);

        $proposal = Proposals::where('mahasiswa_nim', Auth::user()->username)->first();

        $proposal->bimbingan = $request->bimbingan_ke;
        $proposal->diskusi = $request->diskusi;
        $proposal->naskah = str_replace('public/', '', $request->file('naskah')->store('public/file'));

        $proposal->bab1 = $request->bab1;
        if ($request->bab2) {
            $proposal->bab2 = $request->bab2;
        }
        if ($request->bab3) {
            $proposal->bab3 = $request->bab3;
        }
        $bab1_percent = 0;
        $bab2_percent = 0;
        $bab3_percent = 0;

        $array_bab1 = count($request->bab1);

        if($array_bab1 == 6) {
            $bab1_percent = 100;
        }elseif($array_bab1 == 5){
            $bab1_percent = 83;
        }elseif($array_bab1 == 4){
            $bab1_percent = 66;
        }elseif($array_bab1 == 3){
            $bab1_percent = 50;
        }elseif($array_bab1 == 2){
            $bab1_percent = 33;
        }else{
            $bab1_percent = 17;
        }
        $array_bab2 = count($request->bab2);

        if($array_bab2 == 2){
            $bab2_percent = 100;
        }else{
            $bab2_percent = 50;
        }

        $array_bab3 = count($request->bab3);

        if($array_bab3 == 2){
            $bab3_percent = 100;
        }else{
            $bab3_percent = 50;
        }

        $proposal->progress_report = ($bab1_percent + $bab2_percent + $bab3_percent) / 3 ; 
        $proposal->tanggal = Carbon::now();
        $proposal->keterangan = null;
        $proposal->komentar = null;

        $proposal->update();

        return redirect()->route('progress.index')->with('success', 'Proposal created successfully');
    }
}
