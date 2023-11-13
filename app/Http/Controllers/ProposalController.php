<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;

use App\Models\Progress;
use App\Models\Seminar;
use App\Models\User;

class ProposalController extends Controller
{
    //

    public function create()
    {
        $seminar = Seminar::where('mahasiswa_id', auth()->id())->latest()->first();

        $dosen = User::where('id', $seminar->dosen_id)->first();

        return view('proposal.create', [
            'dosen' => $dosen,
        ]);
    }



    public function store()
    {
        $validated = request()->validate(
            [
                'dosen_id' => [
                    'string',
                    Rule::in([
                        'Dr. Dahliyusmanto S.Kom., M.Sc.',
                        'Dr. Irsan Taufik Ali, S.T., M.T.',
                        'Dr. Feri Candra, S.T., M.T.',
                        'Noveri Lysbetti Marpaung, S.T., M.Sc.',
                        'Rahmat Rizal Andhi, S.T., M.T.',
                        'T. Yudi Hadiwandra, S.Kom., M.Kom.',
                        'Linna Oktaviana Sari, S.T., M.T.',
                        'Salhazan Nasution, S.Kom., MIT.',
                        'Edi Susilo, S.Pd., M.Kom., M.Eng.',
                        'Dian Ramadhani, S.T., M.T.',
                    ])
                ],

                'bab1' => 'required',
                'bab2' => 'required_with:bab3',
            ]
        );

        $seminar = Seminar::where('mahasiswa_id', auth()->id())->latest()->first();
        $futher = Progress::where('seminar', $seminar->id)->latest()->first();
        $bimbingan_ke = $futher?->bimbingan + 1;

        $progress = new Progress();

        $progress->bimbingan = $bimbingan_ke;
        $progress->nama = auth()->user()->name;
        $progress->dosen = request('dosen_id');
        $progress->seminar = $seminar->id;
        $progress->bab1 = request('bab1');
        $progress->bab2 = request('bab2');
        $progress->bab3 = request('bab3');
        $progress->progress_report = "Sempro";
        $progress->save();

        return redirect()->route('progress.index')->with('success', 'Proposal created successfully');
    }
}
