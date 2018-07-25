<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config( 'app.name', 'Art By Jordan' ) }}</title>

    </head>
    <body>

        <header>
            <img src="#" alt="rose" />
            <h1>The Artwork of Jordan Alamilla</h1>
        </header>

        @include( 'includes/nav' )
        @include( 'includes/messages' )

        <main>
            @yield( 'content' )
        </main>

    </body>
</html>
