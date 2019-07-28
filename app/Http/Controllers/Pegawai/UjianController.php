<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Ujian;
use App\Models\HasilUjian;
use App\Models\SoalUjian;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Ujian $ujian)
    {
        return view ('pegawai.ujian.index', [
            'ujians' => $ujian->where('status', 'active')->get(),
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
    public function store(Request $request, Ujian $ujian)
    {
        $hasilUjian = new HasilUjian();


        $hasilJawaban = request('jawaban');
        $soal = SoalUjian::where('ujian_id' ,request('ujian_id') )->pluck('kunci_jawaban'); 
        $count = 0;
        // dd($hasilJawaban, $soal);
        // dd($soal);
        foreach ($hasilJawaban as $key => $value) {
            if ($hasilJawaban[$key] == $soal[$key]) {
                $count+=1;
            }
        }
        // dd ($count);
        $nilai = $count / count($soal) * 100;

        $hasilUjian->create([
            'user_id' => auth()->user()->id,
            'ujian_id ' => request('ujian_id'),
            'jawaban_ujian' => json_encode(request('jawaban')),
            'nilai_ujian' => $nilai,  
        ]);

        

        return view ('pegawai.ujian.index', [
            'ujians' => $ujian->where('status', 'active')->get(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ujian $ujian)
    {
        return view('pegawai.ujian.soal.show', [
            'ujian' => $ujian,
            'soals' => $ujian->soal_ujians,
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
