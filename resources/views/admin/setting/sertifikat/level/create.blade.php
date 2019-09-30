@extends('layouts.default')

@section('content')

    
    <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-8"></div>
        <div class="masonry-item col-md-8">
            <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">{{ $title }}</h6>
                <div class="mT-30">
                    <form method="POST" class="container" id="needs-validation" action="{{ route('level.store') }}" novalidate>
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="inputPassword3" placeholder="Deskripsi Level" name="deskripsi" rows="3" required="">
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