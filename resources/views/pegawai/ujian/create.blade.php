@extends('pegawai.layouts.default-ujian')

@section('content')

    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item  w-100">
            @foreach($ujians as $ujian)
            <div class="row gap-20">

                    <div class='col-md-4'>
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Nama Ujian</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">Ujian {{$ujian->bidang_ujian->deskripsi}}</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Jumlah Soal</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{$ujian->jumlah_soal}} Soal</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4'>
                        <div class="layers bd bgc-white p-20">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Waktu Tersisa</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peer">
                                    <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{$ujian->total_durasi}} menit</span>
                                </div>
                                
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
        <div class=" masonry-item col-md-2">
        </div>
        <div class="masonry-item col-md-10">
                <!-- #Chat ==================== -->
                <div class="bd bgc-white">
                    <div class="layers">
                        <div class="layer w-100 p-20">
                            <h6 class="lh-1"></h6>
                        </div>
                        <div class="layer w-100">
                            <!-- Chat Box -->
                            <div class="bgc-grey-200 p-20 gapY-15">
                                <!-- Chat Conversation -->
                                <div class="peers fxw-nw">
                                    <div class="peer mR-20">
                                        <h5>1</h5>
                                    </div>
                                    <div class="peer peer-greed">
                                        <div class="layers ai-fs gapY-5">
                                            <div class="layer">
                                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                    <div class="peer-greed">
                                                        <p>Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text ofLorem Ipsum is simply dummy text of</p>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline1">Toggle this first option</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline2">Or toggle this second option</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline11" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline11">Toggle this first option</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline22" name="customRadioInline1" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline22">Or toggle this second option</label>
                                                        </div>
                                                    </div>
                                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="peers fxw-nw">
                                    <div class="peer mR-20">
                                        <h5>2</h5>
                                    </div>
                                    <div class="peer peer-greed">
                                        <div class="layers ai-fs gapY-5">
                                            <div class="layer">
                                                <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                    <div class="peer-greed">
                                                        <p>Lorem Ipsum is simply dummy text of Lorem Ipsum is simply dummy text ofLorem Ipsum is simply dummy text of</p>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline3" name="customRadioInline2" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline3">Toggle this first option</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline4" name="customRadioInline2" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline4">Or toggle this second option</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline5" name="customRadioInline2" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline5">Toggle this first option</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control-inline">
                                                            <input type="radio" id="customRadioInline6" name="customRadioInline2" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline6">Or toggle this second option</label>
                                                        </div>
                                                    </div>
                                                            
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Chat Send -->
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
                                <button type="button" class="btn btn-primary">
                                    <i class="">Submit</i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection