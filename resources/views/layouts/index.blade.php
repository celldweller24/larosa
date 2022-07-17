<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<meta name="robots" content="all,follow">--}}

    <title>@yield('title')</title>

    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')">

    {{--Prevent indexing--}}
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">


    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/8a3ed3eb19.js" crossorigin="anonymous"></script>

    <!-- Styles -->

    <!-- Bootstrap CSS -->
    {{--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">--}}

    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    {{--<link href="{{ asset('css/main.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700,800&subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="container-fluid">
        <div class="row">
            <div class="left g-0 col-4">
                @include('layouts.sidebar')
            </div>

            <div class="right col-sm-12 col-md-8">

                @if(Route::is('home'))
                    @include('layouts.home_header')
                @else
                    @include('layouts.header')
                @endif

                <div class="content">
                    @yield('content')
                </div>
                @include('layouts.footer')
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    @include('components.age_check')
</body>

</html>
