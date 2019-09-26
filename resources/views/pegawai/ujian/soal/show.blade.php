@extends('pegawai.layouts.ujian.default')

@section('content')

<div class="full-container">
  <form method="POST" action="{{ route('pegawai.ujian.soal.save', ['ujian' => $ujian->id, 'no_soal' => $soals->no_soal]) }}" novalidate>
    <div class="peers fxw-nw pos-r">
      <div class="peer bdR" id="chat-sidebar">
        <div class="layers h-100">
          <div class="bdB layer w-100">
            <input type="text" placeholder="Daftar Soal" class="form-constrol p-15 bdrs-0 w-100 bdw-0" readonly="">
          </div>
          <div class="layer w-100 fxg-1 scrollable pos-r">
            <div class="p-20 peers">
              @foreach($ujian->jawaban_ujians->sortBy('no_soal') as $key => $soal)
                @if($soal->user_id == Auth::user()->id)
                  <div class="peer mR-5">
                    <a href="{{ route('pegawai.ujian.soal.show', ['ujian' => $soal->ujian_id, 'no_soal' => $soal->no_soal]) }}">
                      <div class="btn btn-{{ $soal->jawaban ? 'info' : 'outline-info' }}">{{ $soal->no_soal }}</div>
                    </a>
                  </div>
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>

      <div class="peer peer-greed" id='chat-box'>
        <div class="layers h-100">
          <div class="layer w-100">
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
                  <i class="ti-more"></i>
                </a> -->
              </div>
            </div>
          </div>

          <div class="layer w-100 fxg-1 bgc-grey-200 scrollable">
            <div class="p-50">
                {{ csrf_field() }}
                <input type="hidden" name="ujian_id" value="{{$ujian->id}}">
                <div class="peers p-10">
                  <div class="peer p-4">
                    <h5 class="fsz-def tt-c c-grey-900">{{ $soals->no_soal }}.</h5>
                  </div>
                  <div class="peer peer-greed ov-h">
                    <h5 class="fsz-def tt-c c-grey-900">{!! $soals->deskripsi !!}</h5>
                    <div class="c-grey-900">
                      <div class="layers ai-fs gapY-5">
                        <div class="layer">
                          <div class="peers fxw-nw ai-c pY-3 pX-10 bdrs-2 lh-3/2">
                            <div class="peer-greed">
                              @foreach($no_jawaban as $no)
                                @if($ujian->tipe_ujian->kode_tipe == 'A')
                                  @include('pegawai.ujian.jawaban.tipe-soal-a')
                                @elseif($ujian->tipe_ujian->kode_tipe == 'B')
                                  @include('pegawai.ujian.jawaban.tipe-soal-b')
                                @elseif($ujian->tipe_ujian->kode_tipe == 'C')
                                  @include('pegawai.ujian.jawaban.tipe-soal-c')
                                @endif
                              @endforeach
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          @include('pegawai.ujian.soal.style-button')
        </div>
      </div>
    </div>
  </form>
</div>
@endsection