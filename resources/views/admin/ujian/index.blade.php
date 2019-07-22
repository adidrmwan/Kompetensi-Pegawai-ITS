@extends('layouts.default')

@section('content')
<h4 class="c-grey-900 mT-10 mB-30">{{ $title }}</h4>
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
              <td>{{$data->total_durasi}} Menit</td>
              <td>{{$data->jumlah_soal}}</td>
              @include('admin.ujian.style-status')
              <td>
                <div class="peers mR-15">
                  <div class="peer">
                    <a href="{{ route('admin-ujian.show', ['admin_ujian' => $data->id]) }}">
                      <button class="btn btn-outline-info" data-toggle="tooltip" data-placement="right">
                          <i class="fa fa-plus"></i>
                      </button>
                    </a>
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