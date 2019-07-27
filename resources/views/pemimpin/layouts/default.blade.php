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

    @include('pemimpin.layouts.spinner')

    <div>
        <!-- #Left Sidebar ==================== -->
        @include('pemimpin.layouts.sidebar')

        <!-- #Main ============================ -->
        <div class="page-container">
            <!-- ### $Topbar ### -->
            @include('pemimpin.layouts.topbar')

            <!-- ### $App Screen Content ### -->
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <div class="container-fluid">

                        <h4 class="c-grey-900 mT-10 mB-30">@yield('page-header')</h4>

						@include('pemimpin.layouts.messages') 
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

</body>

</html>
