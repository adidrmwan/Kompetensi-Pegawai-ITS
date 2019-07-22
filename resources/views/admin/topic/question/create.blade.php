@extends('layouts.default')

@section('content')

    
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-8"></div>
        <div class="masonry-item col-md-8">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Question</h6>
                <div class="mT-30">
                        <form method="POST" class="container" id="needs-validation" action="{{ route('question.store') }}" novalidate>
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Pertanyaan</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputPassword3" placeholder="Pertanyaan" name="quest" rows="3" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Pilihan 1" name="option1" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Pilihan 2" name="option2" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Pilihan 3" name="option3" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Pilihan 4" name="option4" required="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="Pilihan 5" name="option5" required="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Jawaban</label>
                                    <div class="col-sm-3">
                                        <select class="form-control" required="" name="answer">
                                            <option value="">Pilih Jawaban</option>
                                            <option value="option1">Pilihan 1</option>
                                            <option value="option2">Pilihan 2</option>
                                            <option value="option3">Pilihan 3</option>
                                            <option value="option4">Pilihan 4</option>
                                            <option value="option5">Pilihan 5</option>
                                        </select>
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