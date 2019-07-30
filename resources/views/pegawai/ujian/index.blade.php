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
    <div class="email-wrapper row remain-height bgc-white ov-h">
      <div class="email-list w-90 layers">
<!--         <div class="layer w-100">
          <div class="bgc-grey-100 peers ai-c jc-sb p-20 fxw-nw">
            <div class="peer">
              <div class="btn-group" role="group">
                <button type="button" class="email-side-toggle d-n@md+ btn bgc-white bdrs-2 mR-3 cur-p">
                  <i class="ti-menu"></i>
                </button>
                <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p">
                  <i class="ti-folder"></i>
                </button>
                <button type="button" class="btn bgc-white bdrs-2 mR-3 cur-p">
                  <i class="ti-tag"></i>
                </button>
                <div class="btn-group" role="group">
                  <button id="btnGroupDrop1" type="button" class="btn cur-p bgc-white no-after dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="ti-more-alt"></i>
                  </button>
                  <ul class="dropdown-menu fsz-sm" aria-labelledby="btnGroupDrop1">
                    <li>
                      <a href="" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700">
                        <i class="ti-trash mR-10"></i>
                        <span>Delete</span>
                      </a>
                    </li>
                    <li>
                      <a href="" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700">
                        <i class="ti-alert mR-10"></i>
                        <span>Mark as Spam</span>
                      </a>
                    </li>
                    <li>
                      <a href="" class="d-b td-n pY-5 pX-10 bgcH-grey-100 c-grey-700">
                        <i class="ti-star mR-10"></i>
                        <span>Star</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="peer">
              <div class="btn-group" role="group">
                <button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p">
                  <i class="ti-angle-left"></i>
                </button>
                <button type="button" class="fsz-xs btn bgc-white bdrs-2 mR-3 cur-p">
                  <i class="ti-angle-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div> -->
        <!-- <div class="layer w-100">
          <div class="bdT bdB">
            <input type="text" class="form-control m-0 bdw-0 pY-15 pX-20" placeholder="Search...">
          </div>
        </div> -->
        <div class="layer w-100 fxg-1 scrollable pos-r">
          <div class="">
            @foreach($ujians as $ujian)
              @if($ujian->headers)
                <div class=" peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                  <div class="peer mR-10">
                    <i class="fa fa-fw fa-clock-o c-green-500"></i>
                  </div>
                  <div class="peer peer-greed ov-h">
                    <h5 class="fsz-def tt-c c-grey-900">Ujian {{$ujian->bidang_ujian->deskripsi}}</h5>
                    <div class="c-grey-600">
                      <span class="c-grey-700">{{$ujian->total_durasi}} Menit - </span>
                      <i>{{$ujian->jumlah_soal}} Soal</i> 
                    </div>
                  </div>
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
                </div>
              @else
                <div class=" peers fxw-nw p-20 bdB bgcH-grey-100 cur-p">
                  <div class="peer mR-10">
                    <i class="fa fa-fw fa-clock-o c-green-500"></i>
                  </div>
                  <div class="peer peer-greed ov-h">
                    <h5 class="fsz-def tt-c c-grey-900">Ujian {{$ujian->bidang_ujian->deskripsi}}</h5>
                    <div class="c-grey-600">
                      <span class="c-grey-700">{{$ujian->total_durasi}} Menit - </span>
                      <i>{{$ujian->jumlah_soal}} Soal</i> 
                    </div>
                  </div>
                  <div class="peers mR-15">
                    <div class="peer">
                      <a href="{{ route('pegawai.ujian.show', ['ujian' => $ujian->id]) }}" class="btn cur-p btn-info" style="padding: 10px; margin-top: 8px;">
                        <i class="ti-pencil"></i>&nbsp;&nbsp;Ambil Ujian 
                      </a>
                    </div>
                  </div>
                </div>
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