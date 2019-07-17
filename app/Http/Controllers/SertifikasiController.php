<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Sertifikat;
use App\Models\TipePelatihan;

class SertifikasiController extends Controller
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

    public function index()
    {
        return view ('pegawai.sertifikasi.index', [
            'allSertifikat' => Sertifikat::all()]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pegawai.sertifikasi.create', [
            'tipePelatihan' => TipePelatihan::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Sertifikat $sertifikat)
    {
        $this->validate(request(), [
            'judul' => ['required', 'max:255'],
            'deskripsi' => ['required', 'max:255'], 
            'tanggal_pelatihan' => ['required', 'date'],
            'tipe_pelatihan_id' => ['required']
        ]);

        $sertifikat->create([
            'judul' => request()->judul,
            'deskripsi' => request()->deskripsi, 
            'tanggal_pelatihan' => request()->tanggal_pelatihan,
            'entry_user' => auth()->id(),
            'tipe_pelatihan_id' => request()->tipe_pelatihan_id
        ]);

        return redirect()->route('sertifikasi.index')->with('success','Sertifikat berhasil dibuat!');
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
        $sertifikat = Sertifikat::find($id);
        $sertifikat->delete();

        return redirect()->route('sertifikasi.index')->with('success','Sertifikat berhasil dihapus!');
    }



}
