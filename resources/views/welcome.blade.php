<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rivas | Admin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            /* background-color: #fff; */
            /* background-image: url("{{ asset('img/fondo_5.jpg') }}"); */
            /* background-color: #FFE53B;
            background-image: linear-gradient(147deg, #FFE53B 0%, #FF2525 74%); */

            background-image: linear-gradient( 181.3deg,  rgba(134,15,15,1) 24.9%, rgba(183,10,10,1) 46.9%, rgba(210,70,0,1) 85.1% );

            /* background-color: #000000;
            background-image: linear-gradient(0deg, #000000 0%, #ea080c 77%); */

            color: white;
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

        .links>a {
            color: white;
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
                    <a class="tag" href="{{ url('/home') }}">Home</a>
                @else
                    <a class="tag" href="{{ route('login') }}">Login</a>

                    {{-- @if (Route::has('register'))
                        <a class="tag" href="{{ route('register') }}">Register</a>
                    @endif --}}
                @endauth
            </div>
        @endif

        <div class="content">
            <img src="{{ asset('img/logo_1.png') }}" class="img-fluid" alt="Responsive image"
                style="max-width: 50%; height: auto;">
            {{-- <div class="title m-b-md">
                Rivas ERP System
            </div> --}}

            {{-- <div class="links">
                <a href="https://laravel.com/docs">Docs</a>
                <a href="https://laracasts.com">Laracasts</a>
                <a href="https://laravel-news.com">News</a>
                <a href="https://blog.laravel.com">Blog</a>
                <a href="https://nova.laravel.com">Nova</a>
                <a href="https://forge.laravel.com">Forge</a>
                <a href="https://vapor.laravel.com">Vapor</a>
                <a href="https://github.com/laravel/laravel">GitHub</a>
            </div> --}}
        </div>
    </div>
</body>

</html>
