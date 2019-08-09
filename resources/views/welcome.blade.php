<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coffee Tea Party</title>

        <link rel="stylesheet" type="text/css" href="{!! asset('bootstrap/css/bootstrap.css') !!}">
        <link rel="stylesheet" href="{!! asset('open-iconic/font/css/open-iconic-bootstrap.min.css') !!}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #00FF7F;
                color: #FFFF;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #FFFF;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"> <i class="oi oi-key"></i> Login</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <i class="oi oi-collapse-right"></i> Coffee Tea Party <i class="oi oi-collapse-left"></i>
                </div>

                <div class="links">
                    <a href="{{ url('/tentang') }}"><i class="oi oi-info"></i> Tentang</a>
                    <a href="{{ url('/produk') }}"><i class="oi oi-cart"></i> Produk</a>
                    <a href="{{ url('/manfaat') }}"><i class="oi oi-plus"></i> Manfaat</a>
                    <a href="{{ url('/kontak') }}"><i class="oi oi-phone"></i> Kontak Kami</a>
                </div>
            </div>
        </div>
    </body>
</html>
