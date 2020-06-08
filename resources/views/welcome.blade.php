<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    SIRI
                </div>
                <div class="links">
                    <button id="setup-siri" class="btn btn-info btn-setup">SetUp</button>
                </div>
                <!-- response -->
                <div class="ai-response">
                    <div id="you"></div>
                    <div id="siri"></div>
                </div>
            </div>
        </div>
    </body>
        <link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}">

        <link rel="stylesheet" href="{!! asset('css/welcome.css') !!}">
        <script type="text/javascript" src="{!! asset('js/jquery-3.2.1.js') !!}" ></script>
        <script type="text/javascript" src="{!! asset('js/ai.js') !!}" ></script>
</html>
