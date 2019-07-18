@extends('pemimpin.layouts.default')

@section('content')

    <div class="mB-20">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
    </div>
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tipe Pelatihan</th>
                    <th>Tanggal Pelatihan</th>
                    <th>Status</th>
                    <th>Nilai</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sertifikats as $key => $sertifikat)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$sertifikat->judul}}</td>
                    <td>{{$sertifikat->deskripsi}}</td>
                    <td>{{$sertifikat->tipe_pelatihan->deskripsi}}</td>
                    <td>{{date('d-m-Y', strtotime($sertifikat->tanggal_pelatihan))}}</td>
                    @include('layouts.style-status')
                    <td>{{$sertifikat->tipe_pelatihan->nilai}}</td>
                    <td>Lihat Gambar</td>
                    <td>
                        @if($sertifikat->status == 'pending')
                          <div class="peers mR-15">
                            <div class="peer">
                              <a href="{{ route('pemimpin.approve', ['sertifikat' => $sertifikat->id]) }}">
                                <button class="btn btn-outline-primary" data-toggle="tooltip" data-placement="right" title="Verify this certificate?" 
                                        onclick="return confirm('Are you sure want to verify this certificate?')">
                                    <i class="fa fa-check"></i>
                                </button>
                              </a>
                            </div>
                            <div class="peer">
                              <a href="{{ route('pemimpin.reject', ['sertifikat' => $sertifikat->id]) }}">
                                <button class="btn btn-outline-danger" data-toggle="tooltip" data-placement="right" title="Reject this certificate?" 
                                        onclick="return confirm('Are you sure want to reject this certificate?')">
                                    <i class="fa fa-close"></i>
                                </button>
                              </a>
                            </div>
                          </div>
                        @else
                          <div class="peers mR-15">
                            <div class="peer">
                                <button class="btn btn-outline-secondary" disabled="">
                                    <i class="fa fa-check"></i>
                                </button>
                            </div>
                            <div class="peer">
                                <button class="btn btn-outline-secondary" disabled="">
                                    <i class="fa fa-close"></i>
                                </button>
                            </div>
                          </div>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection