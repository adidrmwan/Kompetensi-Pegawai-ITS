@extends('layouts.default')

@section('content')

    
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-8"></div>
        <div class="masonry-item col-md-8">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">{{ $title }}</h6>
                <div class="mT-30">
                    <form method="POST" class="container" id="needs-validation" action="{{ route('jenis-sertifikat.update', ['jenis-sertifikat' => $value->id]) }}" novalidate>
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Bidang</label>
                            <div class="col-sm-4">
                                <select class="form-control" required="" name="bidang_id">
                                    <option value="{{$value->bidang->id}}">{{$value->bidang->deskripsi}}</option>
                                    @foreach($bidangs as $bidang)
                                    @if($bidang->id != $value->bidang->id)
                                    <option value="{{$bidang->id}}">{{$bidang->deskripsi}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Lingkup</label>
                            <div class="col-sm-4">
                                <select class="form-control" required="" name="lingkup_id">
                                    <option value="{{$value->lingkup->id}}">{{$value->lingkup->deskripsi}}</option>
                                    @foreach($lingkups as $lingkup)
                                    @if($lingkup->id != $value->lingkup->id)
                                    <option value="{{$lingkup->id}}">{{$lingkup->deskripsi}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputPassword3" placeholder="Contoh: Lomba Karya Tulis Ilmiah, Forum Komunikasi Ilmiah, ..." name="deskripsi" rows="3" required="">{{ $value->deskripsi }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Partisipasi Sebagai</label>
                            <div class="col-sm-4">
                                <select class="form-control" required="" name="partisipasi_id">
                                    <option value="{{$value->partisipasi->id}}">{{$value->partisipasi->deskripsi}}</option>
                                    @foreach($partisipasis as $partisipasi)
                                    @if($partisipasi->id != $value->partisipasi->id)
                                    <option value="{{$partisipasi->id}}">{{$partisipasi->deskripsi}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Poin</label>
                            <div class="col-sm-3">
                                <input type="number" min="0" class="form-control" placeholder="Poin" name="poin" value="{{ $value->poin }}" required="">
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