<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Level as Model;

class LevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
        return view('admin.setting.sertifikat.level.index', [
            'title' => 'Level',
            'allData' => Model::all(),
        ]);
    }

    public function create()
    {
        return view('admin.setting.sertifikat.level.create', [
            'title' => 'Level',
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
        return redirect()->route('level.index')->with('success','Level berhasil ditambah!');
    }

    public function destroy($id)
    {
        $model = Model::find($id);
        $model->delete();

        return redirect()->route('level.index')->with('success','Level berhasil dihapus!');
    }
}
