<?php

namespace App\Http\Controllers;

use App\Models\Kosentrasi;
use App\Models\Pendaftaran_skripsi;
use App\Models\Pr_Proposal;
use App\Models\Pr_Skripsi;
use App\Models\Prodi;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    //
    public function index()
    {
        $porposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->get();
        $skripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->get();

        $jumlahproposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->count();
        $jumlahskripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->count();
        $riwayatproposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->count();
        $riwayatskripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->count();

        return view('dosen.index', [
            'proposals' => $porposal,
            'skripsis' => $skripsi,
            'jumlah_riwayat' => $riwayatproposal + $riwayatskripsi,
            'jumlah' => $jumlahproposal + $jumlahskripsi
        ]);
    }

    public function addproposal(Request $request, $id)
    {
        $proposal = Pr_Proposal::findOrFail($id);

        $proposal->komentar = $request->komentar;
        $proposal->keterangan = $request->keterangan;
        $proposal->update();

        return redirect()->route('dosen.index')->with('success', 'Proposal created successfully');
    }

    public function addskripsi(Request $request, $id)
    {
        $skripsi = Pr_Skripsi::findOrFail($id);

        $skripsi->komentar = $request->komentar;
        $skripsi->keterangan = $request->keterangan;
        $skripsi->update();

        return redirect()->route('dosen.index')->with('success', 'skripsi created successfully');
    }

    public function addinformation()
    {
        return view('modal.index');
    }

    public function addinformationskripsi()
    {
        return view('modal.skripsimodal');
    }

    public function riwayat()
    {

        $proposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->get();
        $skripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->get();

        $jumlahproposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->count();
        $jumlahskripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->count();
        $riwayatproposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->count();
        $riwayatskripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->count();

        return view('dosen.riwayat', [
            'proposals' => $proposal,
            'skripsis' => $skripsi,
            'jumlah_riwayat' => $riwayatproposal + $riwayatskripsi,
            'jumlah' => $jumlahproposal + $jumlahskripsi
        ]);
    }

    public function bimbingan()
    {
        $pendaftaran_skripsis = Pendaftaran_skripsi::with('users','konsentrasi','prodis')->where('pembimbing_nip', Auth::user()->username)->get();

        // ddd([$pendaftaran_skripsis]);

        $jumlahproposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->count();
        $jumlahskripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->count();
        $riwayatproposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->count();
        $riwayatskripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->count();

        $jumlah_riwayat = $riwayatproposal + $riwayatskripsi;
        $jumlah = $jumlahproposal + $jumlahskripsi;

        return view('dosen.bimbingan', compact(
            "pendaftaran_skripsis",
            "jumlah_riwayat",
            "jumlah"
        ));
    }

    public function statistik($id)
    {
        $progressMahasiswa = User::where('username', $id)->first();

        $bimbinganProposal = Pr_Proposal::where('mahasiswa_nim', $id)->select('bimbingan as pembimbing')->pluck('pembimbing');
        $proposalSubBab = Pr_Proposal::where('mahasiswa_nim', $id)->select('bab1', 'bab2', 'bab3')->get();

        $ProposalSubBab1 = [];
        $ProposalSubBab2 = [];
        $ProposalSubBab3 = [];
        $ProposalBab1 = 0;
        $ProposalBab2 = 0;
        $ProposalBab3 = 0;

        foreach ($proposalSubBab as $subBab) {

            if ($subBab->bab1) {
                $count1 = count($subBab->bab1);
                if ($count1 == 1) {
                    $ProposalSubBab1[$ProposalBab1] = 3;
                } elseif ($count1 == 2) {
                    $ProposalSubBab1[$ProposalBab1] = 6;
                } elseif ($count1 == 3) {
                    $ProposalSubBab1[$ProposalBab1] = 9;
                } elseif ($count1 == 4) {
                    $ProposalSubBab1[$ProposalBab1] = 12;
                } elseif ($count1 == 5) {
                    $ProposalSubBab1[$ProposalBab1] = 15;
                } else {
                    $ProposalSubBab1[$ProposalBab1] = 18;
                }
            } else {
                $ProposalSubBab1[$ProposalBab1] = null;
            }

            if ($subBab->bab2) {
                $count2 = count($subBab->bab2);
                if ($count2 == 1) {
                    $ProposalSubBab2[$ProposalBab2] = 11;
                } else {
                    $ProposalSubBab2[$ProposalBab2] = 32;
                }
            } else {
                $ProposalSubBab2[$ProposalBab2] = null;
            }

            if ($subBab->bab3) {
                $count3 = count($subBab->bab3);
                if ($count3 == 1) {
                    $ProposalSubBab3[$ProposalBab3] = 25;
                } else {
                    $ProposalSubBab3[$ProposalBab3] = 50;
                }
            } else {
                $ProposalSubBab3[$ProposalBab3] = null;
            }

            $ProposalBab1++;
            $ProposalBab2++;
            $ProposalBab3++;
        }
    
        // dd($proposalSubBab, $ProposalSubBab1, $ProposalSubBab2, $ProposalSubBab3);    

        $bimbinganSkripsi = Pr_Skripsi::where('mahasiswa_nim', $id)->select('bimbingan as pembimbingSkripsi')->pluck('pembimbingSkripsi');
        $skripsiSubBab = Pr_Skripsi::where('mahasiswa_nim', $id)->select('bab1', 'bab2', 'bab3', 'bab4', 'bab5')->get();

        $skripsiSubBab1 = [];
        $skripsiSubBab2 = [];
        $skripsiSubBab3 = [];
        $skripsiSubBab4 = [];
        $skripsiSubBab5 = [];
        $skripsiBab1 = 0;
        $skripsiBab2 = 0;
        $skripsiBab3 = 0;
        $skripsiBab4 = 0;
        $skripsiBab5 = 0;

        foreach ($skripsiSubBab as $subBab) {

            if ($subBab->bab1) {
                $count1 = count($subBab->bab1);
                if ($count1 == 1) {
                    $skripsiSubBab1[$skripsiBab1] = 1;
                } elseif ($count1 == 2) {
                    $skripsiSubBab1[$skripsiBab1] = 2;
                } elseif ($count1 == 3) {
                    $skripsiSubBab1[$skripsiBab1] = 3;
                } elseif ($count1 == 4) {
                    $skripsiSubBab1[$skripsiBab1] = 4;
                } elseif ($count1 == 5) {
                    $skripsiSubBab1[$skripsiBab1] = 5;
                } else {
                    $skripsiSubBab1[$skripsiBab1] = 6;
                }
            } else {
                $skripsiSubBab1[$skripsiBab1] = null;
            }

            if ($subBab->bab2) {
                $count2 = count($subBab->bab2);
                if ($count2 == 1) {
                    $skripsiSubBab2[$skripsiBab2] = 12.5;
                } else {
                    $skripsiSubBab2[$skripsiBab2] = 25;
                }
            } else {
                $skripsiSubBab2[$skripsiBab2] = null;
            }

            if ($subBab->bab3) {
                $count3 = count($subBab->bab3);
                if ($count3 == 1) {
                    $skripsiSubBab3[$skripsiBab3] = 6;
                } else {
                    $skripsiSubBab3[$skripsiBab3] = 12;
                }
            } else {
                $skripsiSubBab3[$skripsiBab3] = null;
            }

            if ($subBab->bab4) {
                $count4 = count($subBab->bab4);
                if ($count4 == 1) {
                    $skripsiSubBab4[$skripsiBab4] = 27.5;
                } else {
                    $skripsiSubBab4[$skripsiBab4] = 55;
                }
            } else {
                $skripsiSubBab4[$skripsiBab4] = null;
            }

            if ($subBab->bab5) {
                $count5 = count($subBab->bab5);
                if ($count5 == 1) {
                    $skripsiSubBab5[$skripsiBab5] = 1;
                } else {
                    $skripsiSubBab5[$skripsiBab5] = 2;
                }
            } else {
                $skripsiSubBab5[$skripsiBab5] = null;
            }

            $skripsiBab1++;
            $skripsiBab2++;
            $skripsiBab3++;
            $skripsiBab4++;
            $skripsiBab5++;
        }

        // dd($skripsiSubBab, $skripsiSubBab1, $skripsiSubBab2, $skripsiSubBab3, $skripsiSubBab4, $skripsiSubBab5);

        $proposal = Pr_Proposal::where('mahasiswa_nim', $id)->where('keterangan', '!=', null)->latest()->get();
        $skripsi = Pr_Skripsi::where('mahasiswa_nim', $id)->where('keterangan', '!=', null)->latest()->get();

        $riwayatproposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->count();
        $riwayatskripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', '!=', null)->count();

        $jumlahproposal = Pr_Proposal::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->count();
        $jumlahskripsi = Pr_Skripsi::where('pembimbing_nip', Auth::user()->username)->where('keterangan', null)->count();

        // ddd($progressMahasiswa);

        return view('dosen.statistikMahasiswa',[
            'proposalSubBab1' => $ProposalSubBab1,
            'proposalSubBab2' => $ProposalSubBab2,
            'proposalSubBab3' => $ProposalSubBab3,
            'bimbinganProposal' => $bimbinganProposal,
            'skripsiSubBab1' => $skripsiSubBab1,
            'skripsiSubBab2' => $skripsiSubBab2,
            'skripsiSubBab3' => $skripsiSubBab3,
            'skripsiSubBab4' => $skripsiSubBab4,
            'skripsiSubBab5' => $skripsiSubBab5,
            'bimbinganSkripsi' => $bimbinganSkripsi,
            'namaMahasiswa' => $progressMahasiswa,
            'proposals' => $proposal,
            'skripsis' => $skripsi,
            'jumlah_skripsi' => $riwayatproposal + $riwayatskripsi,
            'jumlah' => $jumlahproposal + $jumlahskripsi
        ]);
    }

    public function show($id)
    {

        $proposal = Pr_Proposal::findOrFail($id);
        $mahasiswa = User::where('username', $proposal->mahasiswa_nim)->first();
        $pendaftaran_skripsi = Pendaftaran_skripsi::where('nim', $proposal->mahasiswa_nim)->first();
        $prodi = Prodi::where('id', $mahasiswa->prodi_id)->first();
        $konsentrasi = Kosentrasi::where('id', $mahasiswa->konsentrasi_id)->first();

        return view('dosen.show', [
            'proposal' => $proposal,
            'prodi' => $prodi,
            'konsentrasi' => $konsentrasi,
            'pendaftaran_skripsi' => $pendaftaran_skripsi
        ]);
    }

    public function showskripsi($id)
    {
        $skripsi = Pr_Skripsi::findOrFail($id);
        $mahasiswa = User::where('username', $skripsi->mahasiswa_nim)->first();
        $pendaftaran_skripsi = Pendaftaran_skripsi::where('nim', $skripsi->mahasiswa_nim)->first();
        $prodi = Prodi::where('id', $mahasiswa->prodi_id)->first();
        $konsentrasi = Kosentrasi::where('id', $mahasiswa->konsentrasi_id)->first();

        return view('dosen.skripsishow', [
            'skripsi' => $skripsi,
            'prodi' => $prodi,
            'konsentrasi' => $konsentrasi,
            'pendaftaran_skripsi' => $pendaftaran_skripsi
        ]);
    }

    public function tolak($id)
    {

        $proposal = Pr_Proposal::findOrFail($id);

        $proposal->komentar = '-';
        $proposal->keterangan = 'Tidak Diterima';
        $proposal->update();

        return redirect()->route('dosen.index')->with('success', 'Proposal created successfully');
    }

    public function tolakskripsi($id)
    {

        $skripsi = Pr_Skripsi::findOrFail($id);

        $skripsi->komentar = '-';
        $skripsi->keterangan = 'Tidak Diterima';
        $skripsi->update();

        return redirect()->route('dosen.index')->with('success', 'Skripsi Updated successfully');
    }


    public function admin()
    {
        // $progress = Progress::whereIn('status', ['Usulan', 'Tolak', 'Selesai', 'Revisi'])->latest()->get();

        return view('dosen.admin', [
            // 'progress' => $progress
        ]);
    }
}
