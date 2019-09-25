@extends('layouts.default')

@section('content')

    
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-8"></div>
        <div class="masonry-item col-md-8">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Pegawai</h6>
                <div class="mT-30">
                    <form method="POST" class="container" id="needs-validation" action="{{ route('admin-tambah-pegawai.update', ['admin-tambah-pegawai' => $user->id]) }}" novalidate>
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIP</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="NIP" name="nip" value="{{ $user->nip }}" required="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Nama" name="nama" value="{{ $user->nama }}" required="">
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