@extends('layouts.default')

@section('content')
{{-- <h4 class="c-grey-900 mT-10 mB-30">{{ $title }}</h4> --}}
<div class="row gap-20 masonry pos-r">
    <div class="masonry-sizer col-md-6"></div>
    <div class="masonry-item col-md-10">
        <div class="bgc-white p-20 bd">
            <h5 class="c-grey-900 mB-20">Form Registrasi Pegawai</h5>
            <hr>
            <div class="mT-30">
                <form method="POST" action="{{ route('admin-tambah-pegawai.store') }}" enctype="multipart/form-data" class="container">
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nama</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nip" class="col-md-4 col-form-label text-md-right">NIP</label>

                        <div class="col-md-6">
                            <input id="nip" type="text" class="form-control" name="nip"  required autofocus>

                        </div>
                    </div>
<!-- 
                    <div class="form-group row">
                            <label for="rumpun_id" class="col-md-4 col-form-label text-md-right">Rumpun</label>
                            <div class="col-sm-6">
                                <select class="form-control" required="" name="rumpun_id">
                                    <option value="">Pilih Rumpun</option>
                                    @foreach($rumpuns as $rumpun)
                                    <option value="{{$rumpun->id}}">{{$rumpun->nama}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div> -->
                    <div class="form-group row">
                            <label for="rumpun_id" class="col-md-4 col-form-label text-md-right">Jabatan Sekarang</label>
                            <div class="col-sm-6">
                                <select class="form-control" required="" name="jabatan_sekarang">
                                    <option value="">Pilih Jabatan Sekarang</option>
                                    @foreach($jabatans as $jabatan)
                                    <option value="{{$jabatan->id}}">{{$jabatan->nama}} - {{$jabatan->nilai}} </option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="rumpun_id" class="col-md-4 col-form-label text-md-right">Jabatan Impian</label>
                            <div class="col-sm-6">
                                <select class="form-control" required="" name="jabatan_impian">
                                    <option value="">Pilih Jabatan Impian</option>
                                    @foreach($jabatans as $jabatan)
                                    <option value="{{$jabatan->id}}">{{$jabatan->nama}} - {{$jabatan->nilai}}</option>
                                    @endforeach
                                </select>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label for="tmt_jabatan" class="col-md-4 col-form-label text-md-right">TMT Jabatan</label>

                        <div class="col-md-6">
                            <input id="tmt_jabatan" type="date" class="form-control" name="tmt_jabatan"  required autofocus>

                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="masa_kerja" class="col-md-4 col-form-label text-md-right">Masa Kerja</label>

                        <div class="col-md-6">
                            <input id="masa_kerja" type="text" class="form-control" name="masa_kerja" required autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection