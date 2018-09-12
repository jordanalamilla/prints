<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF TOKEN -->
        <meta name="csrf-token"
              content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Art By Jordan') }}</title>
    
        <!-- SCRIPTS -->
        <script src="{{ asset('js/app.js') }}"></script>
    
        <!-- CKEDITOR -->
        <script src="https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js"></script>
    
        <!-- FONTAWESOME STYLE -->
        <link rel="stylesheet"
              href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
              crossorigin="anonymous">
    
        <!-- STRUCTURE STYLE -->
        <link href="{{ asset('css/structure.css') }}" rel="stylesheet">
    
        <!-- CUSTOM STYLE -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>

    <body>

        <div id="app">
            
            @include( 'includes/nav' )
            @include( 'includes/messages' )
            @yield('content')

        </div>

    </body>

</html>
