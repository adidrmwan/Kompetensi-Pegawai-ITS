@extends('layouts.default')

@section('content')

    
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-8"></div>
        <div class="masonry-item col-md-8">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">{{ $title }}</h6>
                <div class="mT-30">
                    <form method="POST" class="container" id="needs-validation" action="{{ route('admin-ujian.store') }}" novalidate>
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Bidang Ujian</label>
                            <div class="col-sm-10">
                                <select class="form-control" required="" name="bidang_ujian_id">
                                    <option value="">Pilih Bidang Ujian</option>
                                    @foreach($bidangs as $bidang)
                                    <option value="{{$bidang->id}}">{{$bidang->deskripsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tipe Ujian</label>
                            <div class="col-sm-10">
                                <select class="form-control" required="" name="tipe_ujian_id">
                                    <option value="">Pilih Tipe Ujian</option>
                                    @foreach($types as $type)
                                    <option value="{{$type->id}}">{{$type->deskripsi}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Durasi Ujian</label>
                            <div class="col-sm-2">
                                <select class="form-control" required="" name="durasi_jam">
                                    <option value="">Pilih Jam</option>
                                    <option value="60">1 Jam</option>
                                    <option value="120">2 Jam</option>
                                    <option value="180">3 Jam</option>
                                    <option value="240">4 Jam</option>
                                    <option value="300">5 Jam</option>
                                    <option value="360">6 Jam</option>
                                    <option value="420">7 Jam</option>
                                    <option value="480">8 Jam</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control" required=""  name="durasi_menit">
                                    <option value="">Pilih Menit</option>
                                    <option value="0">0 Menit</option>
                                    <option value="15">15 Menit</option>
                                    <option value="30">30 Menit</option>
                                    <option value="45">45 Menit</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Submit</button>
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