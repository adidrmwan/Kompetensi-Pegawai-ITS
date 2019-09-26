<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Ujian;
use App\Models\HasilUjian;
use App\Models\SoalUjian;
use App\Models\HeaderUjian;
use App\Models\JawabanUjian;
use Carbon\Carbon;
use Auth;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ujian $ujian)
    {
        $user = Auth::user();

        $ujian_umum = $ujian->where('status', 'active')->get();
        
        $ujian_sesuai_jabatan = $ujian->where('status', 'active')
                                      ->where('jabatan_id', $user->jabatan_sekarang)->get();
                           
        return view ('pegawai.ujian.index', [
            'ujian_sesuai_jabatan' => $ujian_sesuai_jabatan,
            'ujian_umum' => $ujian_umum,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Ujian $ujian)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HasilUjian $hasilUjian, Ujian $ujian)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ujian $ujian)
    {
        $header = HeaderUjian::where('ujian_id', $ujian->id)
                             ->where('user_id', auth()->user()->id)
                             ->first();
                             
        if ($header == Null) {
            $datetimeNow = Carbon::now();
            $deadlineUjian = Carbon::now()->addMinutes($ujian->total_durasi);
            
            $header = new HeaderUjian();
            $header->ujian_id = $ujian->id;
            $header->user_id = auth()->user()->id;
            $header->tanggal_mulai = $datetimeNow;
            $header->tanggal_selesai = $datetimeNow;
            $header->save();
            // Generate Nomor Soal
            $soals = $ujian->soal_ujians;
            $max = $soals->count();
            foreach ($soals as $key => $soal) {
                $no_soal = $this->generateSoalNumber($max, $ujian);
                JawabanUjian::create([
                    'no_soal' => $no_soal,
                    'ujian_id' => $ujian->id,
                    'user_id' => $header->user_id,
                    'soal_ujian_id' => $soal->id,
                ]);
            }

        }   
                    
        return redirect()->route('pegawai.ujian.soal.show', ['ujian' => $ujian->id, 'no_soal' => '1']);
    }

    private function generateSoalNumber($max, $ujian) 
    {
        $min = 1;
        $no_soal = mt_rand($min, $max);

        return $this->checkSoalNumberIsExists($no_soal, $ujian) ? $this->generateSoalNumber($max, $ujian) : $no_soal;
    }

    private function checkSoalNumberIsExists($no_soal, $ujian) 
    {
        return JawabanUjian::where('ujian_id', $ujian->id)->where('user_id', auth()->user()->id)->where('no_soal', $no_soal)->exists();
    }

}
