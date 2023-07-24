<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../resources/images/favicon.ico" type="image/x-icon">
        <title>DC Comics - Homepage</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/js/app.js')

    </head>

    <body>
        @include('partials.header')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
    </body>
</html>