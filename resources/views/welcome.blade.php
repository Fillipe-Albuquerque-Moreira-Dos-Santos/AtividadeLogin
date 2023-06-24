<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }

            .center-content {
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
            }

            .text-48 {
                font-size: 48px;
            }
        </style>
    </head>
    <body>
        <div class="center-content">
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <center>
                            <a href="{{ route('login') }}" class="text-48 text-gray-700 underline">LOGAR</a>
                        </center>
                        @if (Route::has('register'))
                            <center>
                                <a href="{{ route('register') }}" class="ml-4 text-48 text-gray-700 underline">REGISTRAR</a>
                            </center>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
