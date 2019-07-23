@extends('pegawai.layouts.default')

@section('content')

    
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-8"></div>
        <div class="masonry-item col-md-8">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Sertifikat</h6>
                <div class="mT-30">
                    <form method="POST" class="container" id="needs-validation" action="{{ route('pegawai.sertifikat.store') }}" novalidate>
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" placeholder="Judul sertifikat" name="judul" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jenis_sertifikat_id" class="col-sm-2 col-form-label">Jenis Sertifikat</label>
                            <div class="col-sm-10">
                                <select class="form-control" required="" name="jenis_sertifikat_id">
                                    <option value="">Pilih Jenis Sertifikat</option>
                                    @foreach($jenisSertifikat as $jenis)
                                    <option value="{{$jenis->id}}">{{$jenis->bidang->deskripsi}} - {{$jenis->deskripsi}} - {{$jenis->lingkup->deskripsi}} - {{$jenis->partisipasi->deskripsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="deskripsi" placeholder="Deskripsi sertifikat" name="deskripsi" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal_mulai" class="col-sm-2 col-form-label">Tanggal Mulai</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required="">
                            </div>
                            <label for="tanggal_selesai" class="col-sm-2 col-form-label">Tanggal Selesai</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="penyelenggara" class="col-sm-2 col-form-label">Penyelenggara</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penyelenggara" placeholder="Penyelenggara" name="penyelenggara" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tempat_diselenggarakan" class="col-sm-2 col-form-label">Tempat diselenggarakan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat_diselenggarakan" placeholder="Tempat diselenggarakan" name="tempat_diselenggarakan" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_sertifikat" class="col-sm-2 col-form-label">No. Sertifikat</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="no_sertifikat" placeholder="No. sertifikat" name="no_sertifikat" required="">
                            </div>
                            <label for="tanggal_sertifikat" class="col-sm-2 col-form-label">Tanggal Sertifikat</label>
                            <div class="col-sm-4">
                                <input type="date" class="form-control" id="tanggal_sertifikat" name="tanggal_sertifikat" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uploaded_file">Bukti Sertifikat</label>
                            <input type="file" class="form-control-file" id="uploaded_file" name="uploaded_file" required="">
                          </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit form</button>
                            </div>
                        </div>
                    </form>
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function () {
                            'use strict';
                            window.addEventListener('load', function () {
                                var form = document.getElementById('needs-validation');
                                form.addEventListener('submit', function (event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            }, false);
                        })();
                    </script>
                </div>
            </div>
        </div>
</div>

@endsection