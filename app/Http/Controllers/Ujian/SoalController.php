<?php

namespace App\Http\Controllers\Ujian;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\SoalUjian as Model;
use App\Models\Ujian;

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
            'deskripsi' => ['required', 'max:255'], 
            'pilihan_a' => ['required', 'max:255'], 
            'pilihan_b' => ['required', 'max:255'], 
            'pilihan_c' => ['required', 'max:255'], 
            'pilihan_d' => ['required', 'max:255'], 
            'kunci_jawaban' => ['required'], 
        ]);

        $model->create([
            'ujian_id' => request()->ujian_id,
            'no_soal' => 1,
            'deskripsi' => request()->deskripsi,
            'pilihan_a' => request()->pilihan_a,
            'pilihan_b' => request()->pilihan_b,
            'pilihan_c' => request()->pilihan_c,
            'pilihan_d' => request()->pilihan_d,
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
        return view('admin.ujian.soal.edit', [
            'title' => 'Ujian Pegawai',
            'value' => Model::find($id),
            'ujian_id' => $id
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
            'deskripsi' => ['required', 'max:255'], 
            'pilihan_a' => ['required', 'max:255'], 
            'pilihan_b' => ['required', 'max:255'], 
            'pilihan_c' => ['required', 'max:255'], 
            'pilihan_d' => ['required', 'max:255'], 
            'kunci_jawaban' => ['required'], 
        ]);

        $model = $model->find($id);

        $model->update([
            'no_soal' => 1,
            'deskripsi' => request()->deskripsi,
            'pilihan_a' => request()->pilihan_a,
            'pilihan_b' => request()->pilihan_b,
            'pilihan_c' => request()->pilihan_c,
            'pilihan_d' => request()->pilihan_d,
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
