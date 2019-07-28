@extends('pegawai.layouts.default')

@section('content')

    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item  w-100">
            <div class="row gap-20">
                @foreach($ujians as $ujian)
                <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-1 text-capitalize font-weight-bold">Ujian {{$ujian->bidang_ujian->deskripsi}}</h6>
                        </div>
                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer peer-greed">
                                    <p><i class="ti-timer"></i> {{$ujian->total_durasi}} Menit <br> <i class="ti-files"></i> {{$ujian->jumlah_soal}} Soal</p>
                                </div>
                                <div class="peer">
                                    <a href="{{ route('pegawai.ujian.show', ['ujian' => $ujian->id]) }}" class="btn cur-p btn-info" style="padding: 10px; margin-top: 8px;">
                                        <i class="ti-pencil"></i>&nbsp;&nbsp;Ambil Ujian 
                                      </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection