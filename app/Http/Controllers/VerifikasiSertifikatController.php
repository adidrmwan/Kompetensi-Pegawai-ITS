<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Sertifikat;

class VerifikasiSertifikatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:pemimpin');
    }

    public function index()
    {
        return view ('pemimpin.users.index', [
            'sertifikats' => Sertifikat::all()]
        );
    }

    public function show(Sertifikat $sertifikat)
    {
        return view ('pemimpin.users.show', [
            'sertifikat' => $sertifikat
        ]);
    }

    public function approve(Sertifikat $sertifikat)
    {   
// dd($sertifikat);
        $sertifikat->update([
            'status' => 'approved'
        ]);
        
        
        return redirect()->route('pemimpin.sertifikat')->with('success','Sertifikat berhasil diverifikasi!');
    }

    public function reject(Sertifikat $sertifikat)
    {
        $sertifikat->update([
            'status' => 'rejected'
        ]);

        return redirect()->route('pemimpin.sertifikat')->with('danger','Sertifikat berhasil ditolak!');
    }
}
