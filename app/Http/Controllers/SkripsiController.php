<?php

namespace App\Http\Controllers;

use App\Models\Progress;
use App\Models\Seminar;
use App\Models\User;
use Illuminate\Validation\Rule;


class SkripsiController extends Controller
{
    //

    public function create()
    {
        // $seminar = Seminar::where('mahasiswa_id', auth()->id())->latest()->first();
        // $futher = Progress::where('seminar', $seminar->id)->latest()->first();


        // $dosen = User::where('id', $seminar->dosen_id)->first();

        return view('skripsi.create', [
            // 'dosen' => $dosen,
            // 'futher' => $futher
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
                ]
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
        if ($futher?->status) {
            if ($futher->bab1) {
                $progress->bab1 = $futher->bab1;
            } else {
                $progress->bab1 = request('bab1');
            }

            if ($futher->bab2) {
                $progress->bab2 = $futher->bab2;
            } else {
                $progress->bab2 = request('bab2');
            }

            if ($futher->bab3) {
                $progress->bab3 = $futher->bab3;
            } else {
                $progress->bab3 = request('bab3');
            }

            if ($futher->bab4) {
                $progress->bab4 = $futher->bab4;
            } else {
                $progress->bab4 = request('bab4');
            }

            if ($futher->bab5) {
                $progress->bab5 = $futher->bab5;
            } else {
                $progress->bab5 = request('bab5');
            }
        } else {
            $progress->bab1 = request('bab1');
            $progress->bab2 = request('bab2');
            $progress->bab3 = request('bab3');
            $progress->bab3 = request('bab4');
            $progress->bab3 = request('bab5');
        }
        $progress->progress_report = "Skripsi";
        $progress->save();

        return redirect()->route('progress.index')->with('success', 'Skripsi created successfully');
    }
}
