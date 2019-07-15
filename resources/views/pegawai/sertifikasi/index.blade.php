@extends('pegawai.layouts.default')

@section('content')

    <div class="mB-20">
        <a href="{{ route('sertifikasi.create') }}" class="btn btn-info">
            <h5>Add Sertifikat +</h5>
        </a>

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
                    <th>Tanggal Pelatihan</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allSertifikat as $key => $sertifikat)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$sertifikat->judul}}</td>
                    <td>{{$sertifikat->deskripsi}}</td>
                    <td>{{date('d-m-Y', strtotime($sertifikat->tanggal_pelatihan))}}</td>
                    <td>{{$sertifikat->status}}</td>
                    <td>
                        <a href="{{route('sertifikasi.show', ['id' => $sertifikat['id']])}}">
                            <button class="btn btn-primary">Detail</button>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection