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
                        <h6 class="lh-1">Nilai saat ini :</h6>
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
            <div class='col-md-4'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Nilai Ujian 1</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash2"></span>
                            </div>
                            <div class="peer">
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">80</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #Unique Visitors ==================== -->
            <div class='col-md-4'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Nilai Ujian 2</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash3"></span>
                            </div>
                            <div class="peer">
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">50</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
    <div class="masonry-item col-md-6">
        <!-- #Todo ==================== -->
        <div class="bd bgc-white p-20">
            <div class="layers">
                <div class="layer w-100">
                  <div class="bgc-light-blue-500 c-white p-20">
                    <div class="peers ai-c jc-sb gap-40">
                      <div class="peer peer-greed">
                        <h5>{{ Auth::user()->name }}</h5>
                        <p class="mB-0">{{ Auth::user()->email }}</p>
                      </div>
                      <div class="peer">
                        <h3 class="text-right">NIP: 5115100162</h3>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection