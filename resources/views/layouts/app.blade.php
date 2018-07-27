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
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- BOOTSTRAP Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

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

    <footer></footer>
</body>
</html>
