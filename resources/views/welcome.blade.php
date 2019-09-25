@extends('layouts.home-master')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat Datang di Website SIKAT</div>

                <div class="panel-body" style="display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;">
                    <img class="pos-a centerXY" src="/images/logo.jpeg" alt="" style="width: 550px; height: 550px;">
                </div>
            </div>
        </div>
    </div>
</div> -->

<header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h2 class=" text-white font-weight-bold">" Sungguh menakjubkan.. akhirnya bisa mengetahui kompetensi diri saya "</h2>
          <hr class="divider my-4">
        </div>
        <div class="col-lg-8 align-self-baseline">
          <!-- <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p> -->
          <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ url('/login') }}">Find Out More</a>
        </div>
      </div>
    </div>
  </header>
@endsection
