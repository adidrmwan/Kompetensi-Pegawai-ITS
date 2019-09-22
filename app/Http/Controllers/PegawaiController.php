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
        $nilai_sertifikat = Sertifikat::where('status', 'approved')
                                ->where('user_id', auth()->user()->id)
                                ->join('jenis_sertifikat', 'jenis_sertifikat.id', '=', 'sertifikat.jenis_sertifikat_id')
                                ->sum('jenis_sertifikat.poin');

        $nilai_ujian = HeaderUjian::where('status', 'finished')
                                ->where('user_id', auth()->user()->id)
                                ->sum('nilai_akhir');
                                
        $current_score = $nilai_sertifikat + $nilai_ujian;
        // $test_score_2 = auth()->user();

        // $users = User::join('jabatans', 'jabatans.id', '=', 'users.id')
        //             ->join('rumpuns', 'rumpuns.id', '=', 'jabatans.rumpun_id')
        //             ->where('users.id', auth()->user()->id)
        //             ->first();

        $user = User::join('jabatans', 'jabatans.id', '=', 'users.jabatan_sekarang')
                    ->join('rumpuns', 'rumpuns.id', '=', 'jabatans.rumpun_id')
                    ->where('users.id', auth()->user()->id)
                    ->select('users.*', 'jabatans.*','rumpuns.*')
                    ->first();
        // dd($users);
        return view('pegawai.index', compact('current_score', 'user'));
    }
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
