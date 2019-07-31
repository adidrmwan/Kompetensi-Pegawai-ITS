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

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ujian $ujian, $no_soal)
    {
        $header = HeaderUjian::where('ujian_id', $ujian->id)->where('user_id', auth()->user()->id)->first();
        $soals = SoalUjian::join('jawaban_ujian', 'jawaban_ujian.soal_ujian_id', '=', 'soal_ujian.id')
                    ->where('jawaban_ujian.ujian_id', $ujian->id)
                    ->where('jawaban_ujian.user_id', auth()->user()->id)
                    ->where('jawaban_ujian.no_soal', $no_soal)->first();
                    
        $no_soal = $soals->no_soal;
        return view('pegawai.ujian.soal.show', [
            'ujian' => $ujian,
            'soals' => $soals,
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

    public function savePermanent(Ujian $ujian)
    {
        foreach ($ujian->jawaban_ujians as $key => $value) {
            $soal = $ujian->soal_ujians->where('id', $value->soal_ujian_id)->first();

            if($value->jawaban == $soal->kunci_jawaban) {
                $value->update([
                    'poin' => 1
                ]);

                $value->save();
            }
        }

        $count_jawaban_benar = $ujian->jawaban_ujians->where('poin', 1)->count();
        $count_soal_ujian = $ujian->soal_ujians->where('status', 'active')->count();

        $nilai = $count_jawaban_benar / $count_soal_ujian * 100;

        $header = HeaderUjian::where('ujian_id', $ujian->id)->where('user_id', auth()->user()->id)->first();
        $header->update([
            'status' => 'finished',
            'nilai_akhir' => $nilai,
        ]);

        
    }

    public function save(Ujian $ujian, $no_soal)
    {
        if (request()->has('next')) {
            $new_no_soal = $no_soal + 1;
        } 
        elseif (request()->has('prev')) {
            $new_no_soal = $no_soal - 1;
        } 

        $jawabanUjian = JawabanUjian::where('ujian_id', $ujian->id)
                        ->where('user_id', auth()->user()->id)
                        ->where('no_soal', $no_soal)->first();

        $jawabanUjian->update([
            'jawaban' => request('jawaban')
        ]);

        $jawabanUjian->save();

        if(request()->has('finised')) {
            $this->savePermanent($ujian);
            return redirect()->route('pegawai.ujian.index');
        } 
        else {
            return redirect()->route('pegawai.ujian.soal.show', ['ujian' => $ujian->id, 'no_soal' => $new_no_soal]);        
        }

    }


}