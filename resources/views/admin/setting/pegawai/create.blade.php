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
                    <div class="form-group row">
                        <label for="jabatan" class="col-md-4 col-form-label text-md-right">Jabatan</label>

                        <div class="col-md-6">
                            <input id="jabatan" type="text" class="form-control" name="jabatan"  required autofocus>

                            
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="tmt_jabatan" class="col-md-4 col-form-label text-md-right">TMT Jabatan</label>

                        <div class="col-md-6">
                            <input id="tmt_jabatan" type="date" class="form-control" name="tmt_jabatan"  required autofocus>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="unit_kerja" class="col-md-4 col-form-label text-md-right">Unit Kerja</label>

                        <div class="col-md-6">
                            <input id="unit_kerja" type="text" class="form-control" name="unit_kerja" required autofocus>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas_jabatan" class="col-md-4 col-form-label text-md-right">Kelas Jabatan</label>

                        <div class="col-md-6">
                            <input id="kelas_jabatan" type="text" class="form-control" name="kelas_jabatan"  required autofocus>

                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_jabatan" class="col-md-4 col-form-label text-md-right">Nilai Jabatan</label>

                        <div class="col-md-6">
                            <input id="nilai_jabatan" type="text" class="form-control" name="nilai_jabatan" required autofocus>

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