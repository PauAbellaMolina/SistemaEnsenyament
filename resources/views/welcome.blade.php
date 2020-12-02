<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&family=Rubik:wght@500&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #393e46;
                color: #eeeeee;
                font-family: 'Rubik Mono One', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            ::selection {
                color: #393e46;
                background-color: #edc988;
            }

            .customLink:hover {
                font-style: italic;
                text-shadow: .1em .1em 0 #ea5455;
            }

            .noShadow:hover {
                text-shadow: none !important;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-right a {
                color: #edc988;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .content {
                text-align: center;
                font-family: 'Rubik', sans-serif;
            }

            .title {
                color: #edc988;
                text-shadow: 4px 5px 9px black;
                font-size: 84px;
                font-family: 'Rubik Mono One', sans-serif;
            }

            .links > a {
                color: #edc988;
                padding: 0 25px;
                font-size: 16px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .coloured {
                color: #edc988 !important;
            }

            .logo {
                text-shadow: .05em .055em 0 #ea5455;
            }
            .logo:hover {
                text-shadow: .1em .1em 0 #ea5455;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right">
                    @auth
                        <a class="customLink noShadow" href="{{ url('/home') }}">Entrar</a>
                    @else
                        <a class="customLink" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title logo m-b-md">Sistema Educatiu</div>

                <div class="links">
                    <h3>Made with ❤️ by <span class="coloured">Pau Abella</span></h3>
                    <a class="customLink" href="https://pauabella.dev">pauabella.dev</a>
                </div>
            </div>
        </div>
    </body>
</html>
