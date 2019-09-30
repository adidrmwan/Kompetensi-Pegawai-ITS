<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Partisipasi as Model;

class PartisipasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
        return view('admin.setting.sertifikat.partisipasi.index', [
            'title' => 'Partisipasi',
            'allData' => Model::all(),
        ]);
    }

    public function create()
    {
        return view('admin.setting.sertifikat.partisipasi.create', [
            'title' => 'Partisipasi',
        ]);
    }
    
    public function store(Model $model)
    {
        $this->validate(request(), [
            'deskripsi' => ['required', 'max:255'], 
        ]);

        $model->create([
            'deskripsi' => request()->deskripsi
          
        ]);
        // dd(request()->deskripsi);
        return redirect()->route('partisipasi.index')->with('success','Partisipasi berhasil ditambah!');
    }

    public function destroy($id)
    {
        $model = Model::find($id);
        $model->delete();

        return redirect()->route('partisipasi.index')->with('success','Partisipasi berhasil dihapus!');
    }
}
