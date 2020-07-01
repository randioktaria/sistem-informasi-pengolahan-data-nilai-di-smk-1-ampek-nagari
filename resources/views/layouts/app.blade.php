<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('SISTEM INFORMASI AKADEMIK') }}</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />


    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
	
	@section('css')

	@show
    
    @if (Auth::check() && Auth::user()->level == 'admin')

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/material-dashboard.css?v=2.1.1') }}">

    @elseif (Auth::check() && Auth::user()->level == 'guru' || Auth::check() && Auth::user()->level == 'siswa')

    <!-- Font and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('css/now-ui-dashboard.css?v=1.3.0') }}">
    
    @endif

</head>
<body class="{{ $class ?? '' }}">

    @section('sidebar')

        @if (Auth::check() && Auth::user()->level == 'admin')

            @include('layouts.navbars.admin.nav')
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

        @elseif (Auth::check() && Auth::user()->level == 'siswa')

            @include('layouts.navbars.siswa.nav')
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>

        @elseif (Auth::check() && Auth::user()->level == 'guru')

            @include('layouts.navbars.guru.nav')
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            
        @else

        <main class="py-4">
            @yield('content')
        </main>

        @endif
    @show
    <!--   Core JS Files   -->
    <script src="{{ asset('js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('js/core/popper.min.js') }}"></script>

    @if (Auth::check() && Auth::user()->level == 'admin')

    <script src="{{ asset('js/core/bootstrap-material-design.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar-admin.jquery.min.js') }}"></script>
    <script src="{{ asset('js/material-dashboard.js?v=2.1.1') }}" type="text/javascript"></script>

    @elseif (Auth::check() && Auth::user()->level == 'guru' || Auth::check() && Auth::user()->level == 'siswa')

    <script src="{{ asset('js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('js/now-ui-dashboard.min.js?v=1.3.0') }}" type="text/javascript"></script>

    @endif

    @section('js')

    @show

  
</body>
</html>
