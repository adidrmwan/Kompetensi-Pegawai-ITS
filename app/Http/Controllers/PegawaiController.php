<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Sertifikat;
use App\Models\HasilUjian;
use App\Models\HeaderUjian;
use App\Models\Jabatan;
use App\Rumpun;
use App\User;

use DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:pegawai');
    }

    public function index(Jabatan $jabatan, Rumpun $rumpun)
    {
        // 
        // $current_score = $this->current_score();
        $user = User::join('jabatans', 'jabatans.id', '=', 'users.jabatan_sekarang')
                    ->join('rumpuns', 'rumpuns.id', '=', 'jabatans.rumpun_id')
                    ->where('users.id', auth()->user()->id)
                    ->select('users.*', 'jabatans.*','rumpuns.*')
                    ->first();

                    
        $header_ujian = HeaderUjian::where('user_id', auth()->user()->id)
                                   ->where('status', 'finished')->get();
                    
        // kkm
        $kkmImpian =  auth()->user()->jabatanImpian->nilai;
        $kkmSekarang =  auth()->user()->jabatanSekarang->nilai;
        // dd($kkmSekarang);


        $kkm_kompetensi_umum = ( 20 * $kkmImpian ) / 100;
        $kkm_kompetensi_teknis_sertif = ( 50 * $kkmImpian ) / 100;
        $kkm_soft_kompetensi = ( 20 * $kkmImpian ) / 100;
        $kkm_masa_kerja = ( 10 * $kkmImpian ) / 100;

        $kkm = $kkm_kompetensi_umum + $kkm_kompetensi_teknis_sertif + $kkm_soft_kompetensi + $kkm_masa_kerja; 
        $header_ujian = HeaderUjian::where('user_id', auth()->user()->id)
                                   ->where('status', 'finished')->get();

        $total_nilai_akhir_a = 0;
        $total_nilai_akhir_b = 0;
        $total_nilai_akhir_c = 0;
        $total_sertifikat    = 0;

        foreach ($header_ujian as $key => $value) {
            //kompetensi teknis
            if ($value->ujian->tipe_ujian->kode_tipe == 'A') {
                $total_nilai_akhir_a = $total_nilai_akhir_a + $value->nilai_akhir;
            }
            //kompetensi umum
            if ($value->ujian->tipe_ujian->kode_tipe == 'B') {
                $total_nilai_akhir_b = $total_nilai_akhir_b + $value->nilai_akhir;
            }
            //soft kompetensi
            if ($value->ujian->tipe_ujian->kode_tipe == 'C') {
                $total_nilai_akhir_c = $total_nilai_akhir_c + $value->nilai_akhir;
            }
        }

        $kompetensi_umum = $total_nilai_akhir_b;
        $kompetensi_teknis = $total_nilai_akhir_a;
        $soft_kompetensi = $total_nilai_akhir_c;

        $sertifikat = Sertifikat::where('status', 'approved')
                                ->where('user_id', auth()->user()->id)
                                ->join('jenis_sertifikat', 'jenis_sertifikat.id', '=', 'sertifikat.jenis_sertifikat_id')
                                ->sum('jenis_sertifikat.poin');

        
        $sertifikat = $total_sertifikat + $sertifikat;

        $kompetensi_teknis_sertif = $sertifikat + $kompetensi_teknis;
        // dd($kompetensi_teknis_sertif);
        $masa_jabatan = auth()->user()->masa_kerja * 20;

        $current_score = $kompetensi_umum + $kompetensi_teknis + $sertifikat + $soft_kompetensi + $masa_jabatan;

        return view('pegawai.index', compact('current_score', 'kkm', 'user', 'kkmSekarang','kkmImpian','kompetensi_umum','kompetensi_teknis','soft_kompetensi','sertifikat','kkm_kompetensi_umum','kkm_kompetensi_teknis_sertif', 'kompetensi_teknis_sertif','kkm_soft_kompetensi','kkm_masa_kerja','masa_jabatan'));
    }

    // public function current_score()
    // {
    //     $header_ujian = HeaderUjian::where('user_id', auth()->user()->id)
    //                                ->where('status', 'finished')->get();

    //     $total_nilai_akhir_a = 0;
    //     $total_nilai_akhir_b = 0;
    //     $total_nilai_akhir_c = 0;

    //     foreach ($header_ujian as $key => $value) {
    //         //kompetensi teknis
    //         if ($value->ujian->tipe_ujian->kode_tipe == 'A') {
    //             $total_nilai_akhir_a = $total_nilai_akhir_a + $value->nilai_akhir;
    //         }
    //         //kompetensi umum
    //         if ($value->ujian->tipe_ujian->kode_tipe == 'B') {
    //             $total_nilai_akhir_b = $total_nilai_akhir_b + $value->nilai_akhir;
    //         }
    //         //soft kompetensi
    //         if ($value->ujian->tipe_ujian->kode_tipe == 'C') {
    //             $total_nilai_akhir_c = $total_nilai_akhir_c + $value->nilai_akhir;
    //         }
    //     }

    //     $kompetensi_umum = $total_nilai_akhir_b;

    //     $kompetensi_teknis = $total_nilai_akhir_a;

    //     $sertifikat = Sertifikat::where('status', 'approved')
    //                             ->where('user_id', auth()->user()->id)
    //                             ->join('jenis_sertifikat', 'jenis_sertifikat.id', '=', 'sertifikat.jenis_sertifikat_id')
    //                             ->sum('jenis_sertifikat.poin');

    //     $soft_kompetensi = $total_nilai_akhir_c;

    //     $masa_jabatan = auth()->user()->masa_kerja * 20;

    //     $current_score = $kompetensi_umum + $kompetensi_teknis + $sertifikat + $soft_kompetensi + $masa_jabatan;
    //     // dd($current_score);

    //     return $current_score;


    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
