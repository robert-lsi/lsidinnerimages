<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>{{ env('APP_NAME') }}</title>
    </head>

    <body>
    <div id="app">
        @include('layouts/nav')

        @if(session('message'))
            <div class="container">
                <div class="alert alert-{{ session('message.type')}}">
                    {!! session('message.content') !!}
                </div>
            </div>
        @endif

        @yield('content')

        @include('layouts/footer')
        
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

