@extends('pegawai.layouts.default')

@section('content')

    
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-8"></div>
        <div class="masonry-item col-md-8">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Sertifikat</h6>
                <div class="mT-30">
                    <form method="POST" class="container" id="needs-validation" action="{{ route('sertifikasi.store') }}" novalidate>
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Judul sertifikat" name="judul" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputPassword3" placeholder="Deskripsi sertifikat" name="deskripsi" rows="3" required=""></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tipe Pelatihan</label>
                            <div class="col-sm-3">
                                <select class="form-control" required="" name="tipe_pelatihan_id">
                                    <option value="">Pilih Tipe Pelatihan</option>
                                    @foreach($tipePelatihan as $tipe)
                                    <option value="{{$tipe->id}}">{{$tipe->deskripsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Pelatihan</label>
                            <div class="col-sm-3">
                                <input type="date" class="form-control" id="inputEmail3" name="tanggal_pelatihan" required="">
                            </div>
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