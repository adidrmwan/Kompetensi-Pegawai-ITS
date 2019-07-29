@extends('pegawai.layouts.default')

@section('content')

    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item  w-100">
            <div class="row gap-20">
                <div class="col-md-6">
                  <div class="bdrs-3 ov-h bgc-white bd">
                    <div class="bgc-deep-purple-500 ta-c p-30">
                      <!-- <h3 class="c-white">Ujian</h3> -->
                    </div>
                    <div class="pos-r">
                      <ul class="m-0 p-0 mT-20">
                        @foreach($ujians as $ujian)
                          @if($ujian->headers)
                          <li class="bdB peers ai-c jc-sb fxw-nw">
                            <a class="td-n p-20 peers fxw-nw mR-20 peer-greed c-grey-900" href="javascript:void(0);" data-toggle="modal" data-target="#calendar-edit">
                              <div class="peer mR-15">
                                <i class="fa fa-fw fa-clock-o c-green-500"></i>
                              </div>
                              <div class="peer">
                                <span class="fw-600">Ujian {{$ujian->bidang_ujian->deskripsi}}</span>
                                <div class="c-grey-600">
                                  <span class="c-grey-700">{{$ujian->total_durasi}} Menit - </span>
                                  <i>{{$ujian->jumlah_soal}} Soal - </i> 
                                  @if($ujian->headers->status == 'on_test')
                                  <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-10 pY-10 bgc-green-50 c-green-500">belum diambil</span>
                                  @elseif($ujian->headers->status == 'finished')
                                  <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-10 pY-10 bgc-red-50 c-red-500">sudah diambil</span>
                                  @endif
                                </div>
                              </div>
                            </a>
                            <div class="peers mR-15">
                              <div class="peer">
                                  @if($ujian->headers->status == 'on_test')
                                  <a href="{{ route('pegawai.ujian.show', ['ujian' => $ujian->id]) }}" class="btn cur-p btn-info" style="padding: 10px; margin-top: 8px;">
                                    <i class="ti-pencil"></i>&nbsp;&nbsp;Ambil Ujian 
                                  </a>
                                  @elseif($ujian->headers->status == 'finished')
                                  <button class="btn cur-p btn-secondary" style="padding: 10px; margin-top: 8px;" disabled="">
                                    <i class="ti-pencil"></i>&nbsp;&nbsp;Ambil Ujian 
                                  </button>
                                  @endif
                              </div>
                            </div>
                          </li>
                          @else
                          <li class="bdB peers ai-c jc-sb fxw-nw">
                            <a class="td-n p-20 peers fxw-nw mR-20 peer-greed c-grey-900" href="javascript:void(0);" data-toggle="modal" data-target="#calendar-edit">
                              <div class="peer mR-15">
                                <i class="fa fa-fw fa-clock-o c-green-500"></i>
                              </div>
                              <div class="peer">
                                <span class="fw-600">Ujian {{$ujian->bidang_ujian->deskripsi}}</span>
                                <div class="c-grey-600">
                                  <span class="c-grey-700">{{$ujian->total_durasi}} Menit - </span>
                                  <i>{{$ujian->jumlah_soal}} Soal - </i> 
                                  <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-10 pY-10 bgc-green-50 c-green-500">belum diambil</span>
                                </div>
                              </div>
                            </a>
                            <div class="peers mR-15">
                              <div class="peer">
                                <a href="{{ route('pegawai.ujian.show', ['ujian' => $ujian->id]) }}" class="btn cur-p btn-info" style="padding: 10px; margin-top: 8px;">
                                  <i class="ti-pencil"></i>&nbsp;&nbsp;Ambil Ujian 
                                </a>
                              </div>
                            </div>
                          </li>
                          @endif  
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>


@endsection