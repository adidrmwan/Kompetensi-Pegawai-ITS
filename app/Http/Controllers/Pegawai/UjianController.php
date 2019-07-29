<?php

namespace App\Http\Controllers\Pegawai;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\Ujian;
use App\Models\HasilUjian;
use App\Models\SoalUjian;
use App\Models\HeaderUjian;

use Carbon\Carbon;

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
    public function store(HasilUjian $hasilUjian, Ujian $ujian)
    {
        $hasilJawaban = request('jawaban');
        $soal = SoalUjian::where('ujian_id', request('ujian_id'))->where('status', 'active')->pluck('kunci_jawaban'); 
        $count = 0;

        foreach ($hasilJawaban as $key => $value) {
            if ($hasilJawaban[$key] == $soal[$key]) {
                $count+=1;
            }
        }

        $nilai = $count / count($soal) * 100;

        $hasilUjian->create([
            'user_id' => auth()->user()->id,
            'ujian_id ' => request('ujian_id'),
            'jawaban_ujian' => json_encode(request('jawaban')),
            'nilai_ujian' => $nilai,  
        ]);

        $header = HeaderUjian::where('ujian_id', request('ujian_id'))->where('user_id', auth()->user()->id)->first();
        $header->update([
            'status' => 'finished'
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
        $header = HeaderUjian::where('ujian_id', $ujian->id)->where('user_id', auth()->user()->id)->first();

        if ($header == Null) {
            $datetimeNow = Carbon::now();
            $deadlineUjian = Carbon::now()->addMinutes($ujian->total_durasi);
            
            $header = new HeaderUjian();
            $header->ujian_id = $ujian->id;
            $header->user_id = auth()->user()->id;
            $header->tanggal_mulai = $datetimeNow;
            $header->tanggal_selesai = $datetimeNow;
            $header->save();
        }   

        return view('pegawai.ujian.soal.show', [
            'ujian' => $ujian,
            'soals' => $ujian->soal_ujians,
            'header' => $header,
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
