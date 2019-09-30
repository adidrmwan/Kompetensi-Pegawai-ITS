@extends('layouts.default')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="bgc-white bd bdrs-3 p-20 mB-20">
      <div class="mB-20">
        <a href="{{ route('admin-tambah-pegawai.create') }}" class="btn cur-p btn-info" style="padding: 10px;">
          <i class="ti-upload"></i>&nbsp;&nbsp;Add Pegawai
        </a>

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
                <th>Rumpun</th>
                <th>Jabatan Sekarang</th>
                <th>Jabatan yang diukur</th>
                <!-- <th>Unit Kerja</th> -->
                <th>Kelas Jabatan</th>
                <th>Masa Kerja</th>
                <th>Nilai</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_user as $key => $employee)
            <tr>
              <td>{{$key+1}}</td>
              <td>{{$employee->nip}}</td>
              <td>{{$employee->name}}</td>
              @if(!empty($employee->id))
              <td>{{$employee->deskripsi}}</td>
              @endif
              @if(!empty($employee->jabatanSekarang->id))
              <td>{{$employee->jabatanSekarang->nama}}</td>
              @endif
              @if(!empty($employee->jabatanImpian->id))
              <td>{{$employee->jabatanImpian->nama}}</td>
              @endif
              <td>{{$employee->jabatanSekarang->kelas}}</td>
              <td>{{$employee->masa_kerja}}</td>
              <td>{{$employee->jabatanSekarang->nilai}}</td>
              <td>
                <div class="peers mR-15">
                  <div class="peer">
                    <a href="{{ route('admin-tambah-pegawai.edit', $employee->id) }}">
                      <button class="btn btn-outline-info">
                          <i class="fa fa-pencil"></i>
                      </button>
                    </a>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
</div>
@endsection