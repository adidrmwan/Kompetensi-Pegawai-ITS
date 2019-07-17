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
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">500</span>
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
                <div class="layer w-100 mB-10">
                    <h6 class="lh-1">ProfilKu</h6>
                </div>
                <div class="layer w-100">
                    <ul class="list-task list-group" data-role="tasklist">
                        <li class="list-group-item bdw-0" data-role="task">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                <input type="checkbox" id="inputCall2" name="inputCheckboxesCall" class="peer">
                                <label for="inputCall2" class=" peers peer-greed js-sb ai-c">
                                    <span class="peer peer-greed">Nama :</span>
                                    <span class="peer">
                                        <span class=" lh-0 p-10">Adi Darmawan</span>
                                    </span>
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                <input type="checkbox" id="inputCall3" name="inputCheckboxesCall" class="peer">
                                <label for="inputCall3" class=" peers peer-greed js-sb ai-c">
                                    <span class="peer peer-greed">Email :</span>
                                    <span class="peer">
                                        <span class=" lh-0 p-10">adi@kompeg.com</span>
                                    </span>
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item bdw-0" data-role="task">
                            <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                                <input type="checkbox" id="inputCall4" name="inputCheckboxesCall" class="peer">
                                <label for="inputCall4" class=" peers peer-greed js-sb ai-c">
                                    <span class="peer peer-greed">NIP :</span>
                                    <span class="peer">
                                        <span class=" lh-0 p-10">12345</span>
                                    </span>
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection