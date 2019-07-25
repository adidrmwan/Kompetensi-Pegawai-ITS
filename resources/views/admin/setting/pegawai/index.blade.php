@extends('layouts.default')

@section('content')
{{-- <h4 class="c-grey-900 mT-10 mB-30">{{ $title }}</h4> --}}
<div class="row">
  <div class="col-md-12">
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
      <div class="mB-20">
        {{-- <a href="{{ route('bidang.create') }}" class="btn cur-p btn-info" style="padding: 10px;">
          <i class="ti-upload"></i>&nbsp;&nbsp;Add {{ $title }}
        </a> --}}

        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
      </div>
      <table id="dataTable" class="table table-hover table-bordered" cellspacing="0" width="100%">
          <thead>
            <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Unit Kerja</th>
                <th>Kelas Jabatan</th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_employee as $key => $employee)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$employee->nip}}</td>
              <td>{{$employee->name}}</td>
              <td>{{$employee->jabatan}}</td>
              <td>{{$employee->unit_kerja}}</td>
              <td>{{$employee->kelas_jabatan}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
</div>
@endsection