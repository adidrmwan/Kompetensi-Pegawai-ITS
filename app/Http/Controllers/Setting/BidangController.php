<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Bidang;

class BidangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    public function index()
    {
        return view('admin.setting.sertifikat.bidang.index', [
        	'title' => 'Bidang',
        	'allData' => Bidang::all(),
        ]);
    }

    public function create()
    {
        return view('admin.setting.sertifikat.bidang.create', [
        	'title' => 'bidang',
        ]);
    }
    
    public function store(Bidang $bidang)
    {
        $this->validate(request(), [
            'deskripsi' => ['required', 'max:255'], 
        ]);

        $bidang->create([
            'deskripsi' => request()->deskripsi
          
        ]);
        // dd(request()->deskripsi);
        return redirect()->route('bidang.index')->with('success','bidang berhasil dibuat!');
    }
}
