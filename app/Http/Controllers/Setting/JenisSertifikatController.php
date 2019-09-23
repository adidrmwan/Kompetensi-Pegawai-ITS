<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Bidang;
use App\Models\JenisSertifikat as Model;
use App\Models\Lingkup;
use App\Models\Partisipasi;
use App\Models\Level;

class JenisSertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
        
        return view('admin.setting.sertifikat.jenis-sertifikat.index', [
        	'title' => 'Jenis Sertifikat',
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
        return view('admin.setting.sertifikat.jenis-sertifikat.create', [
        	'title' => 'Jenis Sertifikat',
        	'bidangs' => Bidang::all(),
        	'lingkups' => Lingkup::all(),
            'partisipasis' => Partisipasi::all(),
            'levels' => Level::all(),
            'pendidikans' => Pendidikan::all(),
            'jurusans' => Jurusan::all(),
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
            'lingkup_id' => ['required'],
            'bidang_id' => ['required'],
            'poin' => ['required', 'integer'],
        ]);

        $model->create([
            'lingkup_id' => request()->lingkup_id,
            'bidang_id' => request()->bidang_id,
            'partisipasi_id' => request()->partisipasi_id,
            'level_id' => request()->level_id,
            'pendidikan_id' => request()->pendidikan_id,
            'jurusan_id' => request()->jurusan_id,
            'deskripsi' => request()->deskripsi, 
            'poin' => request()->poin,
            'entry_user' => auth()->id(),
        ]);

        return redirect()->route('jenis-sertifikat.index')->with('success','Jenis sertifikat berhasil ditambah!');
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
    public function edit(Model $model, $id)
    {
        return view('admin.setting.sertifikat.jenis-sertifikat.edit', [
            'title' => 'Jenis Sertifikat',
            'bidangs' => Bidang::all(),
            'lingkups' => Lingkup::all(),
            'partisipasis' => Partisipasi::all(),
            'levels' => Level::all(),
            'pendidikans' => Pendidikan::all(),
            'jurusans' => Jurusan::all(),
            'value' => $model->find($id)
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
            'lingkup_id' => ['required'],
            'bidang_id' => ['required'],
            'poin' => ['required', 'integer'],
        ]);
        $model = $model->find($id);
        $model->update([
            'lingkup_id' => request()->lingkup_id,
            'bidang_id' => request()->bidang_id,
            'partisipasi_id' => request()->partisipasi_id,
            'deskripsi' => request()->deskripsi, 
            'level_id' => request()->level_id,
            'pendidikan_id' => request()->pendidikan_id,
            'jurusan_id' => request()->jurusan_id, 
            'poin' => request()->poin,
            'entry_user' => auth()->id(),
        ]);

        return redirect()->route('jenis-sertifikat.index')->with('success','Jenis sertifikat berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Model::find($id);
        $model->delete();

        return redirect()->route('jenis-sertifikat.index')->with('success','Jenis sertifikat berhasil dihapus!');
    }
}
