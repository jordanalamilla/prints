<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Art By Jordan') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- CKEDITOR --}}
    <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- BOOTSTRAP Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <!-- FONTAWESOME Styles -->
    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- CUSTOM Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container" id="app">

        <header>
            <div id="header-image-container">
                <img src="/img/rose.png"
                    alt="A rose graphic by Jordan Alamilla." />
            </div>

            <h1>The Artwork of <strong>Jordan Alamilla</strong></h1>
        </header>

        @include( 'includes/nav' )
        @include( 'includes/messages' )

        <main>
            @yield('content')
        </main>
    </div>

    <footer>

        <div class="container">
            <p>&copy; Jordan Alamilla 2018
                <!-- AUTH LINKS -->
                @guest
                     // <a href="{{ route('login') }}">{{ __('Admin Login') }}</a>
                @endguest
            </p>
        </div>

    </footer>
</body>
</html>
