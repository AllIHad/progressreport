<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Pendaftaran_skripsi;
use App\Models\Pr_Proposal;
use App\Models\User;
use Carbon\Carbon;

class ProposalController extends Controller
{
    //

    public function create()
    {
        $proposal = Pr_Proposal::where('mahasiswa_nim', Auth::user()->username)->latest()->first();
        $bimbingan_ke = 0;

        if ($proposal?->bimbingan) {
            $bimbingan_ke = $proposal->bimbingan + 1;
        } else {
            $bimbingan_ke = 1;
        }


        return view('proposal.create', [
            'proposal' => $proposal,
            'bimbingan_ke' => $bimbingan_ke
        ]);
    }


    public function store(Request $request)
    {
        $pendaftaranSkripsi = Pendaftaran_skripsi::where('nim', Auth::user()->username)->latest()->first();
        $dosen = User::where('username', $pendaftaranSkripsi->pembimbing_nip)->first();
        // ddd($request->all());
        $request->validate([
            'diskusi' => 'required',
            'naskah' => 'mimes:pdf|max:5000',
            'bab1' => 'required',
        ]);

        $proposal = new Pr_Proposal();

        if ($request->naskah) {
            $proposal->naskah = str_replace('public/', '', $request->file('naskah')->store('file'));
        }else{
            $proposal->naskah = 'file/1';
        }
        $proposal->bimbingan = $request->bimbingan_ke;
        $proposal->pendaftaran_skripsi = $pendaftaranSkripsi->id;
        $proposal->mahasiswa_nama = Auth::user()->name;
        $proposal->mahasiswa_nim = Auth::user()->username;
        $proposal->pembimbing_nama = $dosen->name;
        $proposal->pembimbing_nip = $dosen->username;
        $proposal->diskusi = $request->diskusi;
        $proposal->link = $request->link;
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

        if ($array_bab1 == 6) {
            $bab1_percent = 18;
        } elseif ($array_bab1 == 5) {
            $bab1_percent = 15;
        } elseif ($array_bab1 == 4) {
            $bab1_percent = 12;
        } elseif ($array_bab1 == 3) {
            $bab1_percent = 9;
        } elseif ($array_bab1 == 2) {
            $bab1_percent = 6;
        } else {
            $bab1_percent = 3;
        }

        if ($request->bab2) {
            $array_bab2 = count($request->bab2);

            if ($array_bab2 == 2) {
                $bab2_percent = 32;
            } else {
                $bab2_percent = 16;
            }
        }

        if ($request->bab3) {
            $array_bab3 = count($request->bab3);

            if ($array_bab3 == 2) {
                $bab3_percent = 50;
            } else {
                $bab3_percent = 25;
            }
        }

        $proposal->progress_report = $bab1_percent + $bab2_percent + $bab3_percent;

        $proposal->tanggal = Carbon::now();
        $proposal->save();

        return redirect()->route('progress.index')->with('success', 'Progress Report Proposal created successfully');
    }

    public function update(Request $request)
    {

        $request->validate([
            'diskusi' => 'required',
            'naskah' => 'mimes:pdf|max:5000',
            'link' => 'required',
            'bab1' => 'required',
        ]);

        $pendaftaranSkripsi = Pendaftaran_skripsi::where('nim', Auth::user()->username)->latest()->first(); 
        $proposal = Pr_Proposal::where('mahasiswa_nim', Auth::user()->username)->latest()->first();
        $path = public_path('storage/' . $proposal->naskah);
        if (file_exists($path)) {
            unlink($path);
        }
        // ddd($proposal);
        $newProposal = new Pr_Proposal();
        $newProposal->pendaftaran_skripsi = $pendaftaranSkripsi->id;
        $newProposal->mahasiswa_nama = Auth::user()->name;
        $newProposal->mahasiswa_nim = Auth::user()->username;
        $newProposal->pembimbing_nama = $proposal->pembimbing_nama;
        $newProposal->pembimbing_nip = $proposal->pembimbing_nip;
        $newProposal->bimbingan = $request->bimbingan_ke;
        $newProposal->diskusi = $request->diskusi;
        $newProposal->link = $request->link;
        if($request->naskah){
        $newProposal->naskah = str_replace('public/', '', $request->file('naskah')->store('file'));
        }else{
            $newProposal->naskah = 'file/1';
        }

        $newProposal->bab1 = $request->bab1;
        if ($request->bab2) {
            $newProposal->bab2 = $request->bab2;
        }
        if ($request->bab3) {
            $newProposal->bab3 = $request->bab3;
        }
        $bab1_percent = 0;
        $bab2_percent = 0;
        $bab3_percent = 0;

        $array_bab1 = count($request->bab1);

        if ($array_bab1 == 6) {
            $bab1_percent = 18;
        } elseif ($array_bab1 == 5) {
            $bab1_percent = 15;
        } elseif ($array_bab1 == 4) {
            $bab1_percent = 12;
        } elseif ($array_bab1 == 3) {
            $bab1_percent = 9;
        } elseif ($array_bab1 == 2) {
            $bab1_percent = 6;
        } else {
            $bab1_percent = 3;
        }

        if ($request->bab2) {
            $array_bab2 = count($request->bab2);

            if ($array_bab2 == 2) {
                $bab2_percent = 32;
            } else {
                $bab2_percent = 16;
            }
        }

        if ($request->bab3) {
            $array_bab3 = count($request->bab3);

            if ($array_bab3 == 2) {
                $bab3_percent = 50;
            } else {
                $bab3_percent = 25;
            }
        }

        $newProposal->progress_report = $bab1_percent + $bab2_percent + $bab3_percent ;
        $newProposal->tanggal = Carbon::now();


        $newProposal->save();

        return redirect()->route('progress.index')->with('success', 'Proposal created successfully');
    }
}
