@extends('pegawai.layouts.default')

@section('content')

    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item  w-100">
            <div class="row gap-20">
                <!-- #Toatl Visits ==================== -->
                <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-1">Ujian Minat Bakat</h6>
                        </div>
                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer">
                                    <a href="{{ route('pegawai.ujian') }}" class="btn cur-p btn-info" style="padding: 10px;">
                                        <i class="ti-pencil"></i>&nbsp;&nbsp;Ambil Ujian 
                                      </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-md-3'>
                    <div class="layers bd bgc-white p-20">
                        <div class="layer w-100 mB-10">
                            <h6 class="lh-1">Ujian Kepribadian</h6>
                        </div>
                        <div class="layer w-100">
                            <div class="peers ai-sb fxw-nw">
                                <div class="peer">
                                    <a href="#" class="btn cur-p btn-info" style="padding: 10px;">
                                        <i class="ti-pencil"></i>&nbsp;&nbsp;Ambil Ujian 
                                      </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection