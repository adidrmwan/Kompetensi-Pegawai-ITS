@extends('layouts.default')

@section('content')
<h4 class="c-grey-900 mT-10 mB-30">{{ $title }}</h4>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12">
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
      <div class="mB-20">
        <a href="{{ route('admin-ujian.create') }}" class="btn cur-p btn-info" style="padding: 10px;">
          <i class="ti-upload"></i>&nbsp;&nbsp;Add {{ $title }}
        </a>

        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
      </div>
      <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>No</th>
                <th>Nama Ujian (Bidang)</th>
                <th>Tipe Ujian</th>
                <th>Rumpun/Jabatan</th>
                <th>Durasi</th>
                <th>Jumlah Soal</th>
                <th>Status</th>
                <th>Soal</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($allData as $key => $data)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$data->bidang_ujian->deskripsi}}</td>
              <td>{{$data->tipe_ujian->nama}}</td>
              @if($data->tipe_ujian->kode_tipe == 'B')
              <td>Semua Jabatan</td>
              @else
              <td><b>{{$data->jabatan->rumpuns->nama}}</b>/<br>{{$data->jabatan->nama}}</td>
              @endif
              <td>{{$data->total_durasi}} Menit</td>
              <td>{{$data->jumlah_soal}}</td>
              @include('admin.ujian.style-status')
              <td>
                <div class="peers mR-15">
                  <div class="peer">
                  @if($data->status == 'pending')
                    <a href="{{ route('admin-ujian.show', ['admin_ujian' => $data->id]) }}">
                      <button class="btn btn-outline-info" data-toggle="tooltip" data-placement="right">
                          <i class="fa fa-plus"></i>
                      </button>
                    </a>
                  @else
                    <button class="btn btn-outline-secondary" disabled="">
                        <i class="fa fa-plus"></i>
                    </button>
                  @endif
                  </div>

              </td>
              @include('admin.ujian.style-aksi')
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
</div>
@endsection