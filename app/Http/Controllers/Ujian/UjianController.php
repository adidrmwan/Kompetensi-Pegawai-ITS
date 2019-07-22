<?php

namespace App\Http\Controllers\Ujian;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\BidangUjian;
use App\Models\SoalUjian;
use App\Models\Ujian as Model;
use App\Models\Ujian;
class UjianController extends Controller
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
        return view('admin.ujian.index', [
            'title' => 'Ujian Pegawai',
            'allData' => Model::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ujian.create', [
            'title' => 'Ujian Pegawai',
            'bidangs' => BidangUjian::all(),
        ]);
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
            'durasi_jam' => ['required', 'integer'], 
            'durasi_menit' => ['required', 'integer']
        ]);

        $model->create([
            'bidang_ujian_id' => request()->bidang_ujian_id,
            'durasi_jam' => request()->durasi_jam,
            'durasi_menit' => request()->durasi_menit,
            'total_durasi' => request()->durasi_jam + request()->durasi_menit,
            'jumlah_soal' => 0,
            'entry_user' => auth()->id(),
        ]);
        // dd(request()->deskripsi);
        return redirect()->route('admin-ujian.index')->with('success','Ujian berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model $model, $id)
    {
        $model =$model->find($id);

        return view('admin.ujian.soal.index', [
            'title' => 'Soal Ujian Pegawai',
            'allData' => $model->soal_ujians,
            'ujian_id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.ujian.edit', [
            'title' => 'Ujian Pegawai',
            'bidangs' => BidangUjian::all(),
            'value' => Model::find($id)
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
            'durasi_jam' => ['required', 'integer'], 
            'durasi_menit' => ['required', 'integer']
        ]);

        $model = $model->find($id);

        $model->update([
            'bidang_ujian_id' => request()->bidang_ujian_id,
            'durasi_jam' => request()->durasi_jam,
            'durasi_menit' => request()->durasi_menit,
            'total_durasi' => request()->durasi_jam + request()->durasi_menit,
            'jumlah_soal' => 0,
            'entry_user' => auth()->id(),
        ]);

        return redirect()->route('admin-ujian.index')->with('success','Ujian berhasil diubah!');
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

    public function active(Ujian $ujian)
    {
        $ujian->update([
            'status' => 'active'
        ]);

        return redirect()->route('admin-ujian.index')->with('success','Ujian berhasil diaktifkan!');
    }

    public function pending(Ujian $ujian)
    {
        $ujian->update([
            'status' => 'pending'
        ]);

        return redirect()->route('admin-ujian.index')->with('info','Ujian di-pending sementara!');
    }

    public function closed(Ujian $ujian)
    {
        $ujian->update([
            'status' => 'closed'
        ]);

        return redirect()->route('admin-ujian.index')->with('warning','Ujian telah ditutup!');
    }
}
