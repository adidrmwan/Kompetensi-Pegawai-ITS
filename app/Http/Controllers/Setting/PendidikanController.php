<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Pendidikan as Model;

class PendidikanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
        return view('admin.setting.sertifikat.pendidikan.index', [
            'title' => 'Pendidikan',
            'allData' => Model::all(),
        ]);
    }

    public function create()
    {
        return view('admin.setting.sertifikat.pendidikan.create', [
            'title' => 'Pendidikan',
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
        return redirect()->route('pendidikan.index')->with('success','Pendidikan berhasil ditambah!');
    }

    public function destroy($id)
    {
        $model = Model::find($id);
        $model->delete();

        return redirect()->route('pendidikan.index')->with('success','Pendidikan berhasil dihapus!');
    }
}
