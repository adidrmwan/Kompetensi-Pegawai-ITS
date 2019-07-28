@extends('pegawai.layouts.default')

@section('content')
<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item  w-100">
        <div class="row gap-20">
            <!-- #Toatl Visits ==================== -->
            <div class='col-md-4'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Nilai Sertifikat Yang Diperoleh :</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash"></span>
                            </div>
                            <div class="peer">
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $current_score }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #Total Page Views ==================== -->
            @foreach($test_score_1 as $key => $score_1)
            <div class='col-md-4'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Nilai Ujian</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash2"></span>
                            </div>
                            <div class="peer">
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">{!! $score_1->nilai_ujian!!}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <!-- #Unique Visitors ==================== -->
            <!-- #Bounce Rate ==================== -->
            {{-- <div class='col-md-3'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Bounce Rate</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash4"></span>
                            </div>
                            <div class="peer">
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">33%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="masonry-item col-md-6" style="margin:0 auto; float:none; position:relative; display: block;">
        <!-- #Todo ==================== -->
        <div class="bd bgc-white p-20">
            <div class="layers">
                <div class="layer w-100">
                  <div class="bgc-light-blue-500 c-white p-20">
                    <div class="peers ai-c jc-sb gap-10" >
                        <h2 style="margin:0 auto;">Informasi Data Pegawai</h2>
                      <div class="peer peer-greed">
                        <h5>{{ Auth::user()->name }}</h5>
                        <p class="mB-0"> NIP : {{ Auth::user()->nip }}</p>
                        <p class="mB-0"> Jabatan : {{ Auth::user()->jabatan }}</p>
                        <p class="mB-0"> TMT Jabatan : {{ Auth::user()->tmt_jabatan }}</p>
                        <p class="mB-0"> Unit Kerja : {{ Auth::user()->unit_kerja }}</p>
                        <p class="mB-0"> Kelas Jabatan : {{ Auth::user()->kelas_jabatan }}</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection