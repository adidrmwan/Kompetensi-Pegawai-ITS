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

    public function approve(Sertifikat $sertifikat)
    {
        $sertifikat->update([
            'status' => 'approved'
        ]);

        return redirect()->route('pemimpin.sertifikasi')->with('success','Sertifikat berhasil diverifikasi!');
    }

    public function reject(Sertifikat $sertifikat)
    {
        $sertifikat->update([
            'status' => 'rejected'
        ]);

        return redirect()->route('pemimpin.sertifikasi')->with('danger','Sertifikat berhasil ditolak!');
    }
}
