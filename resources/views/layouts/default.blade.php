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

    <!-- JQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.8.0.min.js"></script>

    <!-- Text Editor / CKEditor -->
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

    <style>
      #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #fff;
        z-index: 90000;
      }

      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }

      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #333;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }

      @-webkit-keyframes sk-scaleout {
        0% { -webkit-transform: scale(0) }
        100% {
          -webkit-transform: scale(1.0);
          opacity: 0;
        }
      }

      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        } 100% {
          -webkit-transform: scale(1.0);
          transform: scale(1.0);
          opacity: 0;
        }
      }
    </style>
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

						{{-- @include('layouts.messages')  --}}
						@yield('content')

                    </div>
                </div>
            </main>

            <!-- ### $App Screen Footer ### -->
            <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600">
                <span>Copyright © 2019 Designed by Adi Darmawan
            </footer>
        </div>
    </div>


    <script src="{{ URL::asset('/js/app.js') }}"></script>

    @yield('js')
    
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


</body>

</html>
