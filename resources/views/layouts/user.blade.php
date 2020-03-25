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

</head>
<style>
    .nav-app-icon {
        font-size: 18px;
    }
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-primary bg-primary text-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url()->previous() }}">
                    <span class="nav-app-icon text-light"><i class="fas fa-arrow-left"></i></span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <i class="fas fa-bars text-light"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('login') }}"> <span
                                    class="nav-app-icon text-light"><i class="fas fa-user"> </i> </span>
                                {{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-light" href="{{ route('register') }}"> <span
                                    class="nav-app-icon text-light"><i class="fas fa-user"> </i> </span>
                                {{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="text-light nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right bg-primary" aria-labelledby="navbarDropdown">
                                <a class="text-light" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <nav class="fixed-bottom bg-primary">
        <ul class="nav justify-content-around">
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
                    <p class="text-light" style="margin-top: -5px;"> User</p>
                </a>
            </li>
        </ul>
    </nav>
</body>

</html>