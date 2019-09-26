@extends('pegawai.layouts.default')

@section('content')
<div class="full-container">
  <div class="masonry-sizer col-md-6"></div>
  <div class="masonry-item w-100">  
    <div class="email-app">
      <div class="email-side-nav remain-height ov-h">
        <div class="h-100 layers">
          <div class="scrollable pos-r bdT layer w-100 fxg-1">
            <ul class="p-20 nav flex-column">
              <li class="nav-item">
                <a href="javascript:void(0)" class="nav-link c-grey-800 cH-blue-500 actived">
                  <div class="peers ai-c jc-sb">
                    <div class="peer peer-greed">
                      <i class="mR-10 ti-email"></i>
                      <span>Available</span>
                    </div>
                    <div class="peer">
                      <span class="badge badge-pill bgc-deep-purple-50 c-deep-purple-700">+99</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link c-grey-800 cH-blue-500">
                  <div class="peers ai-c jc-sb">
                    <div class="peer peer-greed">
                      <i class="mR-10 ti-share"></i>
                      <span>Finished</span>
                    </div>
                    <div class="peer">
                      <span class="badge badge-pill bgc-green-50 c-green-700">12</span>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="email-wrapper row remain-height bgc-white ov-h" style="width: 1800px;">
        <div class="email-list w-90 layers">
          <div class="layer w-100 fxg-1 scrollable pos-r">
            <div class="">
              @foreach($ujian_umum as $ujian)
                @if($ujian->tipe_ujian->isKompetensiUmum())
                  @include('pegawai.ujian.style-ujian')
                @endif
              @endforeach
            </div>
            <div class="">
              @foreach($ujian_sesuai_jabatan as $ujian)
                @if(!$ujian->tipe_ujian->isKompetensiUmum())
                  @include('pegawai.ujian.style-ujian')
                @endif
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection