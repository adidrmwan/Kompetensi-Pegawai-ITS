@extends('pegawai.layouts.default')

@section('content')
<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item  w-100">
        <div class="row gap-20">
            <!-- #Toatl Visits ==================== -->
            <div class='col-md-6'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Capaian Nilai Kompetensi Anda :</h6>
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
            <div class='col-md-6'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Capaian Nilai Sertifikat Anda :</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash2"></span>
                            </div>
                            <div class="peer">
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $sertifikat }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Capaian Nilai Tes Kompetensi Umum Anda :</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash3"></span>
                            </div>
                            <div class="peer">
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $kompetensi_umum }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Capaian Nilai Tes Kompetensi Teknis Anda :</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash4"></span>
                            </div>
                            <div class="peer">
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $kompetensi_teknis }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Capaian Nilai Tes Kompetensi Kepribadian Anda :</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash"></span>
                            </div>
                            <div class="peer">
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">{{ $soft_kompetensi }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-12'>
                <div class="layers bd bgc-white p-20">
                    <div class="layer w-100 mB-10">
                        <h6 class="lh-1">Penilaian dari Kompetensi Pegawai :</h6>
                    </div>
                    <div class="layer w-100">
                        <div class="peers ai-sb fxw-nw">
                            <div class="peer peer-greed">
                                <span id="sparklinedash"></span>
                            </div>
                            <div class="peer" style=" margin-right: 15%;">
                                @if($current_score >= $kkm)
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">
                                        Selamat! Nilai kompetensi Anda telah melebihi nilai jabatan yang diukur, sehingga ke depan Anda bisa dipromosikan ke jabatan dengan nilai yang lebih tinggi
                                </span>
                                @elseif ($current_score >= $kkmSekarang && $current_score < $kkm  )
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-light-blue-900">
                                        Selamat! Nilai kompetensi anda telah memenuhi nilai jabatan yang diukur, sehingga Anda bisa disarankan untuk menempati jabatan tersebut
                                </span>
                                @else
                                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">
                                        Mohon maaf! Nilai kompetensi anda masih belum memenuhi nilai jabatan yang diukur, sehingga Anda belum bisa menempati jabatan tersebut 
                                </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="masonry-item col-md-8" style="margin:0 auto; float:none; position:relative; display: block;">
        
        
        <div class="bd bgc-white p-20">
            <div class="email-content h-100">
              <div class="h-100 scrollable pos-r">
                <div class="email-content-wrapper">
                  <!-- Header -->
                  <div class="peers ai-c jc-sb pX-40 pY-30">
                    <div class="peers peer-greed">
                      <div class="peer mR-20">
                        <img class="bdrs-50p w-3r h-3r" alt="" src="{{URL::asset('images/user-icon.png')}}">
                      </div>
                      <div class="peer">
                        <h5 class="c-grey-900 mB-5">{{ Auth::user()->name }}</h5>
                        <span>NIP : {{ Auth::user()->nip }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
            <div class="layers">
                <div class="layer w-100">
                  <div class="bgc-light-blue-900 c-white p-20">
                    <div class="peers ai-c jc-sb pX-40 pY-30" >
                      <div class="peer peer-greed">
                        <table>
                            <tr>
                                <th>Rumpun</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;{{$user->rumpun->nama}}</td>
                            </tr>

                            <tr>
                                <th>Jabatan</th>
                                <th>&nbsp;:</th>
                                
                                <td>&nbsp;{{$user->jabatanSekarang->nama}}</td>
                                
                            </tr>
                            <!-- didapet dari nilai jabatan_now_id -->
                            <tr>  
                                <th>Nilai Jabatan Sekarang</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;{{$user->jabatanSekarang->nilai}}</td>
                            </tr>
                            <!-- didapet dari nilai jabatan_later_id -->
                            <tr>
                                <th>Nilai Jabatan yang Diukur</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;{{$user->jabatanImpian->nilai}}</td>
                            </tr>

                            <tr>
                                <th>Kelas Jabatan</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;{{$user->jabatanSekarang->kelas}}</td>
                            </tr>
                            <tr>
                                <th>Masa Kerja</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;{{$user->masa_kerja}}</td>
                            </tr>
                            <tr>
                                <th>TMT Jabatan</th>
                                <th>&nbsp;:</th>
                                <td>&nbsp;{{date('d M Y', strtotime(Auth::user()->tmt_jabatan))}}</td>
                            </tr>
                            
                            
                           
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection