<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\SoalUjian as Model;
use App\Models\Ujian;
use Illuminate\Support\Facades\Input;

class SoalController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Model $model)
    {   
        $this->validate(request(), [
            'deskripsi' => ['required'], 
            'pilihan_a' => ['required'], 
            'pilihan_b' => ['required'], 
            'pilihan_c' => ['required'], 
            'pilihan_d' => ['required'], 
        ]);

        $ujian = Ujian::find(request()->ujian_id);

        //A => Salah Benar; B= Range 1-5
        if ($ujian->tipe_ujian->kode_tipe == 'A') {
            $this->validate(request(), [
                'kunci_jawaban' => ['required'], 
            ]);

        } elseif ($ujian->tipe_ujian->kode_tipe == 'B') {
            $this->validate(request(), [
                'kunci_jawaban' => ['required'],
                'pilihan_e' => ['required'], 

            ]);
        } elseif ($ujian->tipe_ujian->kode_tipe == 'C') {
            $this->validate(request(), [
                'pilihan_e' => ['required'], 
            ]);
        } 
        

        $model->create([
            'ujian_id' => request()->ujian_id,
            'kode_soal' => $ujian->tipe_ujian->kode_tipe,
            'deskripsi' => request()->deskripsi,
            'pilihan_a' => request()->pilihan_a,
            'pilihan_b' => request()->pilihan_b,
            'pilihan_c' => request()->pilihan_c,
            'pilihan_d' => request()->pilihan_d,
            'pilihan_e' => request()->pilihan_e,
            'kunci_jawaban' => request()->kunci_jawaban,
            'entry_user' => auth()->id(),
        ]);

        $ujian = Ujian::find(request()->ujian_id);
        $ujian->update([
            'jumlah_soal' => Model::where('ujian_id', request()->ujian_id)->count(),
        ]);

        return redirect()->route('admin-ujian.show', ['admin_ujian' => request()->ujian_id])->with('success','Soal ujian berhasil ditambah!');
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
    public function edit(Model $model, $id)
    {
        $model =$model->find($id);

        return view('admin.ujian.soal.edit', [
            'title' => 'Ujian Pegawai',
            'value' => Model::find($id),
            'ujian_id' => $model->ujian_id,
            'tipe_ujian' => $model->ujian->tipe_ujian->kode_tipe,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Model $model, $id)
    {
        $this->validate(request(), [
            'deskripsi' => ['required'], 
            'pilihan_a' => ['required'], 
            'pilihan_b' => ['required'], 
            'pilihan_c' => ['required'], 
            'pilihan_d' => ['required'], 
        ]);

        $ujian = Ujian::find(request()->ujian_id);

        //A => Salah Benar (4 Soal); B= Salah Benar (5 Soal); C =>Range 1-5
        if ($ujian->tipe_ujian->kode_tipe == 'A') {
            $this->validate(request(), [
                'kunci_jawaban' => ['required'], 
            ]);

        } elseif ($ujian->tipe_ujian->kode_tipe == 'B') {
            $this->validate(request(), [
                'kunci_jawaban' => ['required'],
                'pilihan_e' => ['required'], 

            ]);
        } elseif ($ujian->tipe_ujian->kode_tipe == 'C') {
            $this->validate(request(), [
                'pilihan_e' => ['required'], 
            ]);
        } 
        

        $ujian->update([
            'deskripsi' => request()->deskripsi,
            'pilihan_a' => request()->pilihan_a,
            'pilihan_b' => request()->pilihan_b,
            'pilihan_c' => request()->pilihan_c,
            'pilihan_d' => request()->pilihan_d,
            'pilihan_e' => request()->pilihan_e,
            'kunci_jawaban' => request()->kunci_jawaban,
            'entry_user' => auth()->id(),
        ]);

        return redirect()->route('admin-ujian.show', ['admin_ujian' => $model->ujian_id])->with('success','Soal ujian berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model $model, $id)
    {
        $model = $model->find($id);

        $model->delete();

        $ujian = Ujian::find(request()->ujian_id);
        
        $ujian->update([
            'jumlah_soal' => $ujian->soal_ujians->count(),
        ]);

        return redirect()->route('admin-ujian.show', ['admin_ujian' => $ujian->id])->with('success','Soal ujian berhasil diubah!');
    }

}
