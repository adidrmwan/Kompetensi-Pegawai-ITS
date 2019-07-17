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
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allSertifikat as $key => $sertifikat)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$sertifikat->judul}}</td>
                    <td>{{$sertifikat->deskripsi}}</td>
                    <td>{{date('d-m-Y', strtotime($sertifikat->tanggal_pelatihan))}}</td>
                    @include('layouts.style-status')
                    <td>
                        @if($sertifikat->status == 'rejected')
                        <form method="post" action="{{ route('sertifikasi.destroy', ['sertifikat' => $sertifikat->id]) }}">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <button class="btn btn-outline-danger" data-toggle="tooltip" data-placement="right" title="Delete this certificate?" 
                                    onclick="return confirm('Are you sure want to delete this rejected certificate?')">
                                <i class="fa fa-close"></i>
                            </button>
                        </form>
                        @else
                            <button class="btn btn-outline-secondary" disabled="">
                                <i class="fa fa-close"></i>
                            </button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection