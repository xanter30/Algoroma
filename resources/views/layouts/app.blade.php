<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

        <!-- other -->
        <title>App Name - @yield('title')</title>
    </head>
    <body class="bg-light">
        @include('navbar')
        <main role="main" class="container">
            <div class="row">
                <div class="col">
                    @yield('content')
                </div>
                <div class="col-3">
                    @include('sidebar')
                <div>
            </div>
        </main>

        <!-- scripts -->
        <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
