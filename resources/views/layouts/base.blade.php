<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('pageTitle')</title>
        <!-- style -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        @yield('cssAggiuntivo')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>

        @include('partials.header')

        <main>
            @yield('content')
        </main>

        @include('partials.footer')

    </body>
</html>