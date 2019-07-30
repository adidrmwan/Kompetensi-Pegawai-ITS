@extends('pegawai.layouts.ujian.default')

@section('content')
<div class="full-container">
  <div class="peers fxw-nw pos-r">
    <!-- Sidebar -->
    <div class="peer bdR" id="chat-sidebar">
      <div class="layers h-100">

        <!-- List Soal -->
        <div class="layer w-100 fxg-1 scrollable pos-r">
            <div class="p-20 peers">
              @foreach($ujian->soal_ujians as $key => $soal)
                <div class="peer mR-5">
                    <div class="btn btn-outline-info">{{ $key+1 }}</div>
                </div>
              @endforeach
            </div>
        </div>
      </div>
    </div>

    <!-- Chat Box -->
    <div class="peer peer-greed" id='chat-box'>
      <div class="layers h-100">
        <div class="layer w-100">
          <!-- Header -->
          <div class="peers fxw-nw jc-sb ai-c pY-20 pX-30 bgc-white">
            <div class="peers ai-c">
              <div class="peer d-n@md+">
                <a href="" title="" id='chat-sidebar-toggle' class="td-n c-grey-900 cH-blue-500 mR-30">
                  <i class="ti-menu"></i>
                </a>
              </div>
              <div class="peer mR-20">
                <span class="btn btn-info bdrs-50p p-15 lh-0">
                  <i class="fa fa-file"></i>
                </span>
              </div>
              <div class="peer">
                <h6 class="tt-c c-grey-900 lh-1 mB-0">Ujian {{$ujian->bidang_ujian->deskripsi}}</h6>
                <i class="fsz-sm lh-1">{{date('l, d F Y', strtotime($header->tanggal_selesai))}}</i>
              </div>
            </div>
            <div class="peers">
              <!-- <a href="" class="peer td-n c-grey-900 cH-blue-500 fsz-md mR-30" title="">
                <i class="ti-video-camera"></i>
              </a>
              <a href="" class="peer td-n c-grey-900 cH-blue-500 fsz-md mR-30" title="">
                <i class="ti-headphone"></i>
              </a>
              <a href="" class="peer td-n c-grey-900 cH-blue-500 fsz-md" title="">
                <i class="ti-more"></i> -->
              </a>
            </div>
          </div>
        </div>

        <div class="layer w-100 fxg-1 bgc-grey-200 scrollable pos-r">
          <div class="p-50">
            <form method="POST" class="container" action="{{ route('pegawai.ujian.store') }}" novalidate>
              {{ csrf_field() }}
              <input type="hidden" name="ujian_id" value="{{$ujian->id}}">
              @php
                  $i = 0;
              @endphp
              @foreach($soals as $key => $soal)
              <div class="peers p-50">
                <div class="peer p-3 mR-10">
                  <h5 class="fsz-def tt-c c-grey-900">{{$soal->no_soal}}.</h5>
                </div>
                <div class="peer peer-greed ov-h">
                  <h5 class="fsz-def tt-c c-grey-900">{!! $soal->deskripsi !!}</h5>
                  <div class="c-grey-700">
                    <div class="layers ai-fs gapY-5">
                      <div class="layer">
                        <div class="peers fxw-nw ai-c pY-3 pX-10 bdrs-2 lh-3/2">
                          <div class="peer-greed">
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
              </div>
              @php
                  $i++;
              @endphp
              @endforeach
            </form>
          </div>
        </div>
        <div class="layer w-100">
          <!-- Chat Send -->
          <div class="p-20 bdT bgc-white">
            <div class="pos-r">
              <div class="peers ">
                <div class="peer-greed">
                  {{$soals->render()}}
                </div>
              <div>
                <div>
                  <button type="submit" class="btn btn-outline-primary">
                    <i class="fa fa-chevron-left"></i> Prev
                  </button>
                  <button type="submit" class="btn btn-outline-primary">
                    Next <i class="fa fa-chevron-right"></i>
                  </button>
                </div>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection