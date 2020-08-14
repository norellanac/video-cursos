<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Videojs -->
    <link href="https://vjs.zencdn.net/7.8.4/video-js.css" rel="stylesheet" />

    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
</head>
<style>
    .nav-app-icon {
        font-size: 18px;
    }

    .badge-notify {
        position: absolute;
        top: 1em;
        margin-right: 1em;
    }

    .bg-theme-1 {
        background-color: #f7921c;
    }

    .bg-theme-2 {
        background-color: #519e93;
    }

    .bg-theme-3 {
        background-color: #015e88;
    }

    .bg-theme-4 {
        background-color: #01d4d9;
    }

    .bg-theme-5 {
        background-color: #bcbcbc;
    }

    .bg-theme-6 {
        background-color: #ffffff;
    }

    .bg-theme-7 {
        background-color: #55c684;
    }

    .bg-theme-8 {
        background-color: #87ab10;
    }

    .bg-theme-9 {
        background-color: #bf2833;
    }
</style>

<body>
    <div id="app">
        <!-- example 1 - using absolute position for center -->
        <nav class="navbar navbar-expand-md navbar-dark bg-theme-1">
            <div class="container">
                <a class="navbar-brand" href="{{ url()->previous() }}">
                    <span class="nav-app-icon text-light"><i class="fas fa-arrow-left"></i></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="collapsingNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link">Link</a>
                        </li>
                    </ul>
                    @guest
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('login') }}"> <span
                                    class="nav-app-icon text-light"><i class="fas fa-sign-in-alt"> </i> </span>
                                {{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register') }}"> <span
                                    class="nav-app-icon text-light"><i class="fas fa-user-plus"> </i> </span>
                                {{ __('Register') }}</a>
                        </li>
                    </ul>
                    @else
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('#')}}" data-target="#myModal" data-toggle="modal"><span
                                    class="nav-app-icon text-light"><i class="fas fa-user"></i></span>
                                <span class="text-light" style="margin-top: -5px;"> {{ Auth::user()->name }} </span></a>
                        </li>
                        <li class="nav-item" style="margin-right: 1em;">
                            <a class="nav-link" href="{{url('#')}}" data-target="#myModal" data-toggle="modal">
                                <span class="nav-app-icon text-light" style="margin-top: -4em;"><i
                                        class="fas fa-wallet"></i></span>
                                <span class="text-light" style="margin-top: -5px;">
                                    Tokens
                                </span>
                                <span class="badge  badge-warning text-dark">{{ Auth::user()->id }} </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><span
                                    class="nav-app-icon text-light"><i class="fas fa-sign-out-alt"></i></span>
                                <span class="text-light" style="margin-top: -5px;"> Salir </span></a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @endguest
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

    </div>
    <nav class="fixed-bottom bg-theme-1" style="padding-bottom: 0;">
        @guest
        <ul class="nav justify-content-around" style="margin-bottom: -1em;">
            <li class="nav-item text-center">
                <a class="nav-link" href="{{url('/home')}}">
                    <span class="nav-app-icon text-light"><i class="fas fa-home"></i></span>
                    <p class="text-light" style="margin-top: -5px;"> Home</p>
                </a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="{{url('/login')}}">
                    <span class="nav-app-icon text-light"><i class="fas fa-sign-in-alt"></i></span>
                    <p class="text-light" style="margin-top: -5px;"> Ingresar</p>
                </a>
            </li>
            <li class="align-self-end nav-item text-center">
                <a class="nav-link" href="{{url('/register')}}">
                    <span class="nav-app-icon text-light"><i class="fas fa-user-plus"></i></span>
                    <p class="text-light" style="margin-top: -5px;"> Registrarse</p>
                </a>
            </li>
        </ul>
        @else
        <ul class="nav justify-content-around" style="margin-bottom: -1em;">
            <li class="nav-item text-center">
                <a class="nav-link" href="{{url('/home')}}">
                    <span class="nav-app-icon text-light"><i class="fas fa-home"></i></span>
                    <p class="text-light" style="margin-top: -5px;"> Home</p>
                </a>
            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="{{url('/login')}}">
                    <span class="nav-app-icon text-light"><i class="fas fa-cog"></i></span>
                    <p class="text-light" style="margin-top: -5px;"> Settings</p>
                </a>
            </li>
            <li class="align-self-end nav-item text-center">
                <a class="nav-link" href="{{url('/register')}}">
                    <span class="nav-app-icon text-light"><i class="fas fa-user"></i></span>
                    <p class="text-light" style="margin-top: -5px;"> {{ Auth::user()->name }}</p>
                </a>
            </li>
        </ul>
        @endguest
    </nav>

    <script src="https://vjs.zencdn.net/7.8.4/video.js"></script>
</body>

</html>