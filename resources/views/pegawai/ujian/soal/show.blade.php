<!-- Tipe A: Salah Benar -->
@extends('pegawai.layouts.ujian.default')

@section('content')

<div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item col-md-12">
                <!-- #Chat ==================== -->
                <div class="bd bgc-grey">
                    <div class="layers">
                        <div class="layer w-100 p-20">
                            <h6 class="lh-1"></h6>
                        </div>
                        <div class="layer w-100">
                            <!-- Chat Box -->
                            <div class="bgc-white-200 p-20 gapY-15">
                                <form method="POST" class="container" action="{{ route('pegawai.ujian.store') }}" novalidate>
                                <!-- Chat Conversation -->
                                {{ csrf_field() }}
                                <input type="hidden" name="ujian_id" value="{{$ujian->id}}">
                                @php
                                    $i = 0;
                                @endphp
                                @foreach($soals as $key => $soal)
                                    <div class="peers fxw-nw">
                                        <div class="peer mR-20">
                                            <h5>{{$key + 1}}</h5>
                                        </div>
                                        <div class="peer peer-greed">
                                            <div class="layers ai-fs gapY-5">
                                                <div class="layer">
                                                    <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                        <div class="peer-greed">
                                                            {!! $soal->deskripsi !!}
                                                            <div class="custom-control custom-radio">
                                                            <input type="radio" id="jawaban[{{$soal->id}}][1]" name="jawaban[{{$i}}]" class="custom-control-input" value="pilihan_a">
                                                                <label class="custom-control-label" for="jawaban[{{$soal->id}}][1]">{!! $soal->pilihan_a!!}</label>
                                                            </div>

                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="jawaban[{{$soal->id}}][2]" name="jawaban[{{$i}}]" class="custom-control-input" value="pilihan_b">
                                                                <label class="custom-control-label" for="jawaban[{{$soal->id}}][2]">{!! $soal->pilihan_b!!}</label>
                                                            </div>

                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="jawaban[{{$soal->id}}][3]" name="jawaban[{{$i}}]" class="custom-control-input" value="pilihan_c">
                                                                <label class="custom-control-label" for="jawaban[{{$soal->id}}][3]">{!! $soal->pilihan_c!!}</label>
                                                            </div>

                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="jawaban[{{$soal->id}}][4]" name="jawaban[{{$i}}]" class="custom-control-input" value="pilihan_d">
                                                                <label class="custom-control-label" for="jawaban[{{$soal->id}}][4]">{!! $soal->pilihan_d!!}</label>
                                                            </div>
                                                        </div>
                                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div id="display-message"></div> --}}
                                    @php
                                        $i++;
                                    @endphp
                                @endforeach
                                <div class="p-20 bdT bgc-white">
                                        <div class="pos-r">
                                            <button type="button" class="btn btn-primary">
                                                <i class="">Prev</i>
                                            </button>
                                            <button type="button" class="btn btn-primary">
                                                <i class="">Next</i>
                                            </button>
                                        </div>
                                        <div class="pos-r" style="padding: 10px;">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="">Submit</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Chat Send -->
                        
                    </div>
                </div>
            </div>
    </div>

@endsection