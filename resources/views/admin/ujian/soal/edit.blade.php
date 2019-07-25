@extends('layouts.default')

@section('content')

    
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-8"></div>
        <div class="masonry-item col-md-8">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">{{ $title }}</h6>
                <div class="mT-30">
                    <form method="POST" class="container" id="needs-validation" action="{{ route('admin-ujian-soal.update', ['admin_ujian' => $value->id]) }}" novalidate>
                        {{ csrf_field() }}
                        {{ method_field('patch') }}
                        <div class="form-group row">
                          <label for="deskripsi" class="col-md-2 col-form-label">Deskripsi Soal</label>
                          <div class="col-md-10">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" required="" rows="3">{{ $value->deskripsi }}</textarea>
                          </div>
                        </div>
                        @if($tipe_ujian == 'A')
                        <div class="form-group row">
                          <label for="pilihan_a" class="col-md-2 col-form-label">Pilihan A</label>
                          <div class="col-md-10">
                            <textarea class="form-control" id="pilihan_a" name="pilihan_a" required="">{{ $value->pilihan_a }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="pilihan_b" class="col-md-2 col-form-label">Pilihan B</label>
                          <div class="col-md-10">
                          <textarea class="form-control" id="pilihan_b" name="pilihan_b" required="">{{ $value->pilihan_b }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="pilihan_c" class="col-md-2 col-form-label">Pilihan C</label>
                          <div class="col-md-10">
                          <textarea class="form-control" id="pilihan_c" name="pilihan_c" required="">{{ $value->pilihan_c }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="pilihan_d" class="col-md-2 col-form-label">Pilihan D</label>
                          <div class="col-md-10">
                          <textarea class="form-control" id="pilihan_d" name="pilihan_d" required="">{{ $value->pilihan_d }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="kunci_jawaban" class="col-md-2 col-form-label">Kunci Jawaban</label>
                          <div class="col-md-10">
                            <select class="form-control" id="kunci_jawaban" name="kunci_jawaban" required="" >
                                @if($value->kunci_jawaban == 'pilihan_a')
                                <option value="pilihan_a" selected>Pilihan A</option>
                                <option value="pilihan_b">Pilihan B</option>
                                <option value="pilihan_c">Pilihan C</option>
                                <option value="pilihan_d">Pilihan D</option>
                                @endif
                                @if($value->kunci_jawaban == 'pilihan_b')
                                <option value="pilihan_b" selected>Pilihan B</option>
                                <option value="pilihan_a">Pilihan A</option>
                                <option value="pilihan_c">Pilihan C</option>
                                <option value="pilihan_d">Pilihan D</option>
                                @endif
                                @if($value->kunci_jawaban == 'pilihan_c')
                                <option value="pilihan_c" selected>Pilihan C</option>
                                <option value="pilihan_a">Pilihan A</option>
                                <option value="pilihan_b">Pilihan B</option>
                                <option value="pilihan_d">Pilihan D</option>
                                @endif
                                @if($value->kunci_jawaban == 'pilihan_d')
                                <option value="pilihan_d" selected>Pilihan D</option>
                                <option value="pilihan_a">Pilihan A</option>
                                <option value="pilihan_b">Pilihan B</option>
                                <option value="pilihan_c">Pilihan C</option>
                                @endif
                            </select>
                          </div>
                        </div>
                        @elseif($tipe_ujian == 'B')
                        <div class="form-group row">
                          <label for="pilihan_a" class="col-md-2 col-form-label">Pilihan A<br><small>Poin: 1</small></label>
                          <div class="col-md-10">
                            <textarea class="form-control" id="pilihan_a" name="pilihan_a" required="">{{ $value->pilihan_a }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="pilihan_b" class="col-md-2 col-form-label">Pilihan B<br><small>Poin: 2</small></label>
                          <div class="col-md-10">
                          <textarea class="form-control" id="pilihan_b" name="pilihan_b" required="">{{ $value->pilihan_b }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="pilihan_c" class="col-md-2 col-form-label">Pilihan C<br><small>Poin: 3</small></label>
                          <div class="col-md-10">
                          <textarea class="form-control" id="pilihan_c" name="pilihan_c" required="">{{ $value->pilihan_c }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="pilihan_d" class="col-md-2 col-form-label">Pilihan D<br><small>Poin: 4</small></label>
                          <div class="col-md-10">
                          <textarea class="form-control" id="pilihan_d" name="pilihan_d" required="">{{ $value->pilihan_d }}</textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="pilihan_e" class="col-md-2 col-form-label">Pilihan E<br><small>Poin: 5</small></label>
                          <div class="col-md-10">
                          <textarea class="form-control" id="pilihan_e" name="pilihan_e" required="">{{ $value->pilihan_e }}</textarea>
                          </div>
                        </div>
                        @endif
                        <input type="text" name="ujian_id" hidden="" value="{{$ujian_id}}">
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