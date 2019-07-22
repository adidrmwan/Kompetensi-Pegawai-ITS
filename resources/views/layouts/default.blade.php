<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
	<link href="{{ URL::asset('/css/app.css') }}" rel="stylesheet"> 
	
	@yield('css')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.8.0.min.js"></script>

</head>

<body class="app">

    @include('layouts.spinner')

    <div>
        <!-- #Left Sidebar ==================== -->
        @include('layouts.sidebar')

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            @include('layouts.topbar')

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <div class="container-fluid">

                        <h4 class="c-grey-900 mT-10 mB-30">@yield('page-header')</h4>

						@include('layouts.messages') 
						@yield('content')

                    </div>
                </div>
            </main>

            <!-- ### $App Screen Footer ### -->
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                <span>Copyright © 2017 Designed by
            </footer>
        </div>
    </div>

    <script src="{{ URL::asset('/js/app.js') }}"></script>

    <script type="text/javascript">
      $('#edit-soal').on('show.bs.modal', function (event) {
        console.log('clicked!');
          var button = $(event.relatedTarget);
          var deskripsi = button.data('deskripsi');
          var pilihan_a = button.data('pilihana');
          var pilihan_b = button.data('pilihanb');
          var pilihan_c = button.data('pilihanc');
          var pilihan_d = button.data('pilihand');
          var kunci_jawaban = button.data('kuncijawaban');
          var url = button.data('id');
          var modal = $(this);
          modal.find('.modal-body #deskripsi').val(deskripsi);
          modal.find('.modal-body #pilihan_a').val(pilihan_a);
          modal.find('.modal-body #pilihan_b').val(pilihan_b);
          modal.find('.modal-body #pilihan_c').val(pilihan_c);
          modal.find('.modal-body #pilihan_d').val(pilihan_d);
          modal.find('.modal-body #kunci_jawaban').val(kunci_jawaban);
    });
    </script>
    @yield('js')


</body>

</html>
