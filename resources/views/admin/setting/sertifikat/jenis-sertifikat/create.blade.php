@extends('layouts.default')

@section('content')

    
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-8"></div>
        <div class="masonry-item col-md-8">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">{{ $title }}</h6>
                <div class="mT-30">
                    <form method="POST" class="container" id="needs-validation" action="{{ route('jenis-sertifikat.store') }}" novalidate>
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Kegiatan</label>
                            <div class="col-sm-4">
                                <select class="form-control" required="" name="bidang_id">
                                    <option value="">Pilih Kegiatan</option>
                                    @foreach($bidangs as $bidang)
                                    <option value="{{$bidang->id}}">{{$bidang->deskripsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Skala</label>
                            <div class="col-sm-4">
                                <select class="form-control" required="" name="lingkup_id">
                                    <option value="">Pilih Skala</option>
                                    @foreach($lingkups as $lingkup)
                                    <option value="{{$lingkup->id}}">{{$lingkup->deskripsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Level</label>
                            <div class="col-sm-4">
                                <select class="form-control" required="" name="level_id">
                                    <option value="">Pilih Level</option>
                                    @foreach($levels as $level)
                                    <option value="{{$level->id}}">{{$level->deskripsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputPassword3" placeholder="Contoh: Lomba Karya Tulis Ilmiah, Forum Komunikasi Ilmiah, ..." name="deskripsi" rows="3" required=""></textarea>
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Partisipasi Sebagai</label>
                            <div class="col-sm-4">
                                <select class="form-control" required="" name="partisipasi_id">
                                    <option value="">Pilih Partisipasi</option>
                                    @foreach($partisipasis as $partisipasi)
                                    <option value="{{$partisipasi->id}}">{{$partisipasi->deskripsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Poin</label>
                            <div class="col-sm-4">
                                <input type="number" min="0" class="form-control" placeholder="Poin" name="poin" required="">
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