<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Lingkup;

class LingkupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
        return view('admin.setting.sertifikat.lingkup.index', [
        	'title' => 'Lingkup',
        	'allData' => Lingkup::all(),
        ]);
    }

    public function create()
    {
        return view('admin.setting.sertifikat.lingkup.create', [
        	'title' => 'Lingkup',
        ]);
    }
    
    public function store(Lingkup $lingkup)
    {
        $this->validate(request(), [
            'deskripsi' => ['required', 'max:255'], 
        ]);

        $lingkup->create([
            'deskripsi' => request()->deskripsi
          
        ]);
        // dd(request()->deskripsi);
        return redirect()->route('lingkup.index')->with('success','lingkup berhasil dibuat!');
    }
}
