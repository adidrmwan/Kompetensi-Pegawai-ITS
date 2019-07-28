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

</head>

<body class="app">

    @include('pegawai.layouts.spinner')

    <div>
        <!-- #Left Sidebar ==================== -->
        @include('pegawai.layouts.ujian.sidebar')

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            @include('pegawai.layouts.ujian.topbar')

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <div class="container-fluid">

                        <h4 class="c-grey-900 mT-10 mB-30">@yield('page-header')</h4>

						@include('pegawai.layouts.messages') 
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
    <script type="text/javascript">

    function calculateTotal(){
    var total = 0,
        i;
    
    for (i = 0; i < radios.length; i++) {
        if (radios[i].type == 'radio' && radios[i].checked) {
            total += Number(radios[i].value);
        }
    }
       
    result.innerHTML = total;
    return false; 
}

var radios = document.getElementsByTagName("input"),
    result = document.getElementById("display-message");

document.forms[0].onsubmit = calculateTotal;
    </script>

    @yield('js')
    
    @stack('script')
</body>

</html>