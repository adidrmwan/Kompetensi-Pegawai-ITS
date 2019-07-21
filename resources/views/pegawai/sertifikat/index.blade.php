@extends('pegawai.layouts.default')

@section('content')
<h4 class="c-grey-900 mT-10 mB-30">{{ $title }}</h4>
<div class="row">
  <div class="col-md-12">
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
      <div class="mB-20">
        <a href="{{ route('sertifikat.create') }}" class="btn cur-p btn-info" style="padding: 10px;">
          <i class="ti-upload"></i>&nbsp;&nbsp;Upload {{ $title }} 
        </a>

        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
      </div>
      <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Jenis Sertifikat</th>
                <th>Lingkup</th>
                <th>Partisipasi</th>
                <th>Tanggal</th>
                <th>Poin</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($sertifikats as $key => $sertifikat)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$sertifikat->judul}}</td>
              <td>{{$sertifikat->jenis_sertifikat->deskripsi}}</td>
              <td>{{$sertifikat->jenis_sertifikat->lingkup->deskripsi}}</td>
              <td>{{$sertifikat->jenis_sertifikat->partisipasi->deskripsi}}</td>
              @if($sertifikat->tanggal_mulai == $sertifikat->tanggal_selesai)
              <td>{{date('d-m-Y', strtotime($sertifikat->tanggal_mulai))}}</td>
              @else
              <td>{{date('d-m-Y', strtotime($sertifikat->tanggal_mulai))}} - {{date('d-m-Y', strtotime($sertifikat->tanggal_selesai))}}</td>
              @endif
              <td>{{$sertifikat->jenis_sertifikat->poin}}</td>
              @include('layouts.style-status')
              <td>
                  @if($sertifikat->status == 'rejected')
                  <form method="post" action="{{ route('sertifikat.destroy', ['sertifikat' => $sertifikat->id]) }}">
                      {{ csrf_field() }}
                      {{ method_field('delete') }}
                      <button class="btn btn-outline-danger" data-toggle="tooltip" data-placement="right" title="Delete this certificate?" 
                              onclick="return confirm('Are you sure want to delete this rejected certificate?')">
                          <i class="ti-trash"></i>
                      </button>
                  </form>
                  @else
                      <button class="btn btn-outline-secondary" disabled="">
                          <i class="ti-trash"></i>
                      </button>
                  @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
</div>
@endsection