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
                    <th>NIP Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>Judul</th>
                    <th>Jenis Sertifikat</th>
                    <th>Lingkup</th>
                    <th>Partisipasi</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Poin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sertifikats as $key => $sertifikat)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$sertifikat->user->id}}</td>
                    <td>{{$sertifikat->user->name}}</td>
                    <td>{{$sertifikat->judul}}</td>
                    <td>{{$sertifikat->jenis_sertifikat->deskripsi}}</td>
                    <td>{{$sertifikat->jenis_sertifikat->lingkup->deskripsi}}</td>
                    <td>{{$sertifikat->jenis_sertifikat->partisipasi->deskripsi}}</td>
                    @if($sertifikat->tanggal_mulai == $sertifikat->tanggal_selesai)
                        <td>{{date('d-m-Y', strtotime($sertifikat->tanggal_mulai))}}</td>
                    @else
                        <td>{{date('d-m-Y', strtotime($sertifikat->tanggal_mulai))}} - {{date('d-m-Y', strtotime($sertifikat->tanggal_selesai))}}</td>
                    @endif
                    @include('layouts.style-status')
                    <td>{{$sertifikat->jenis_sertifikat->poin}}</td>
                    <td>
                      <a href="{{ route('pemimpin.sertifikat.show', ['sertifikat' => $sertifikat->id]) }}">
                        <button class="btn btn-outline-info">
                            <i class="fa fa-eye"></i>
                        </button>
                      </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection