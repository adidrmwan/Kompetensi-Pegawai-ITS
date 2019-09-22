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
                        <h6 class="lh-1">Nilai Sekarang :</h6>
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
        </div>
    </div>
    <div class="masonry-item col-md-6" style="margin:0 auto; float:none; position:relative; display: block;">
        
        
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
                    <div class="peer">
                      <a href="" class="btn btn-info bdrs-50p p-15 lh-0">
                        <i class="fa fa-pencil"></i>
                      </a>
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
                                <th>:</th>
                                <td>&nbsp;{{$user->rumpun->nama}}</td>
                            </tr>

                            <tr>
                                <th>Jabatan</th>
                                <th>:</th>
                                
                                <td>&nbsp;{{$user->jabatanSekarang->nama}}</td>
                                
                            </tr>
                            <!-- didapet dari nilai jabatan_now_id -->
                            <tr>  
                                <th>Nilai Jabatan Sekarang</th>
                                <th>:</th>
                                <td>&nbsp;{{$user->jabatanSekarang->nilai}}</td>
                            </tr>
                            <!-- didapet dari nilai jabatan_later_id -->
                            <tr>
                                <th>Nilai Jabatan Impian</th>
                                <th>:</th>
                                <td>&nbsp;{{$user->jabatanImpian->nilai}}</td>
                            </tr>

                            <tr>
                                <th>Kelas Jabatan</th>
                                <th>:</th>
                                <td>&nbsp;{{$user->jabatanSekarang->kelas}}</td>
                            </tr>
                            <tr>
                                <th>Masa Kerja</th>
                                <th>:</th>
                                <td>&nbsp;{{$user->masa_kerja}}</td>
                            </tr>
                            <tr>
                                <th>TMT Jabatan</th>
                                <th>:</th>
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