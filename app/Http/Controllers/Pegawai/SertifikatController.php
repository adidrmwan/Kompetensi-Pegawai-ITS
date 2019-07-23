<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Sertifikat;
use App\Models\JenisSertifikat;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('pegawai.sertifikat.index', [
            'title' => 'Sertifikat',
            'sertifikats' => auth()->user()->sertifikats
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pegawai.sertifikat.create', [
            'jenisSertifikat' => JenisSertifikat::all()
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
            'tanggal_mulai' => ['required', 'date'],
            'tanggal_selesai' => ['required', 'date'],
            'tanggal_sertifikat' => ['required', 'date'],
            'no_sertifikat' => ['required', 'max:255'],
            'penyelenggara' => ['required', 'max:255'],
            'tempat_diselenggarakan' => ['required', 'max:255'],
            'jenis_sertifikat_id' => ['required'],
        ]);

        $sertifikat->create([
            'user_id' => auth()->id(),
            'jenis_sertifikat_id' => request()->jenis_sertifikat_id,
            'judul' => request()->judul,
            'deskripsi' => request()->deskripsi, 
            'tanggal_mulai' => request()->tanggal_mulai,
            'tanggal_selesai' => request()->tanggal_selesai,
            'penyelenggara' => request()->penyelenggara, 
            'tempat_diselenggarakan' => request()->tempat_diselenggarakan, 
            'no_sertifikat' => request()->no_sertifikat,
            'tanggal_sertifikat' => request()->tanggal_sertifikat,
            'uploaded_file' => request()->uploaded_file,
        ]);

        return redirect()->route('pegawai.sertifikat.index')->with('success','Sertifikat berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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

        return redirect()->route('pegawai.sertifikat.index')->with('success','Sertifikat berhasil dihapus!');
    }
}
