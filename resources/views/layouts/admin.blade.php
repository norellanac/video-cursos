<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ substr(request()->getRequestUri(), 1) }}</title>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/pctec_logo.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- filtros datatables -->
    <link href="{{ asset('js/export/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- menuadmin -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">

    {{-- selec2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111574681-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());



        gtag('config', 'UA-111574681-1');

    </script>

</head>
<style>
    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }

    .btn-circle.btn-lg {
        width: 50px;
        height: 50px;
        padding: 10px 16px;
        font-size: 18px;
        line-height: 1.33;
        border-radius: 25px;
    }

    .btn-circle.btn-xl {
        width: 70px;
        height: 70px;
        padding: 10px 16px;
        font-size: 24px;
        line-height: 1.33;
        border-radius: 35px;
    }

    .btn-float {
        position: fixed;
        right: 37px;
        bottom: 100px;
    }

</style>
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

    .list-group-item-action {
        width: 100%;
        color: #495057;
        text-align: inherit;
    }

    .list-group-item-action:hover,
    .list-group-item-action:focus {
        z-index: 1;
        color: #343A40;
        text-decoration: none;
        background-color: #9e5b03;
    }

    .list-group-item-action:active {
        color: #212529;
        background-color: #33f7921c;
    }


    /*buscar select */
    .select2-container .select2-selection--single {
        height: 46px !important;
    }

    .select2-container--default .select2-selection--single {
        border: 1px solid #ccc !important;
        border-radius: 0px !important;
    }

</style>

<body>
    <div id="app">
        <div class="d-flex" id="wrapper">

            <!-- Sidebar -->
            <div class="bg-theme-1 text-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">
                    <img class="d-inline-block align-top ml-1" src="{{ asset('pctecbus/img/pc-technology.png') }}"
                        style="max-width: 200px" />
                    <span class="h3 text-light d-none"> {{ config('app.name', 'App Name') }} </span>
                </div>
                <div class="list-group list-group-flush">
                    <a href="{{ url('#') }}" class="list-group-item list-group-item-action bg-theme-1 text-light"> <span
                            class=""><i class="fas fa-chart-bar"></i></span> Administracion</a>
                    <a href="{{ url('suppliers') }}"
                        class="list-group-item list-group-item-action bg-theme-1 text-light"> <span class=""><i
                                class="fas fa-users"></i></span> Proveedores</a>
                    <a href="{{ url('categories') }}"
                        class="list-group-item list-group-item-action bg-theme-1 text-light"> <span class=""><i
                                class="fas fa-tags"></i></span> Categorías</a>
                    <a href="{{ url('subcategories') }}"
                        class="list-group-item list-group-item-action bg-theme-1 text-light">
                        <span class=""><i class="fas fa-tags"></i></span> SubCategorías</a>
                    <a href="{{ url('categories') }}"
                        class="list-group-item list-group-item-action bg-theme-1 text-light"> <span class=""><i
                                class="fas fa-book"></i></span> Cursos</a>
                    <a href="{{ url('adminPost') }}"
                        class="list-group-item list-group-item-action bg-theme-1 text-light">
                        <span class=""><i class="fas fa-video"></i></span> Cargar Video</a>
                    <a href="{{ url('products') }}"
                        class="list-group-item list-group-item-action bg-theme-1 text-light">
                        <span class=""><i class="fas fa-desktop"></i></span> Productos</a>
                    <a href="{{ url('storesAdmin') }}"
                        class="list-group-item list-group-item-action bg-theme-1 text-light"> <span class=""><i
                                class="fas fa-building"></i></span> Agencias</a>
                    <a href="{{ url('awardsAdmin') }}"
                        class="list-group-item list-group-item-action bg-theme-1 text-light"> <span class=""><i
                                class="fas fa-medal"></i></span> Reconocimientos</a>
                    <a href="{{ url('users') }}" class="list-group-item list-group-item-action bg-theme-1 text-light">
                        <span class=""><i class="fas fa-user"></i></span> Usuarios</a>
                    <a href="{{ url('#') }}" class="list-group-item list-group-item-action bg-theme-1 text-light">
                        <span class=""><i class="fas fa-gamepad"></i></span> Juego</a>
                    <a href="{{ url('#') }}" class="list-group-item list-group-item-action bg-theme-1 text-light">
                        <span class=""><i class="fas fa-cog"></i></span> Ajustes</a>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">

                <nav class="navbar navbar-expand-lg navbar-dark bg-theme-1 border-bottom">
                    <button id="menu-toggle" class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#sidebar-wrapper" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""><i class="fas fa-ellipsis-v"></i></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('adminPost') }}"> <span><i
                                            class="fas fa-newspaper"></i></span> Publicaciones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('adminPost') }}"> <span><i
                                                class="fas fa-newspaper"></i></span> Publicaciones</a>
                                    <a class="dropdown-item" href="{{ url('users') }}"> <span><i
                                                class="fas fa-users"></i></span> Usuarios</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                        <span class="nav-app-icon"><i class="fas fa-sign-out-alt"></i></span>
                                        <span class="" style="margin-top: -5px;"> Salir </span></a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main class="mb-5">
                    @yield('content')
                </main>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script>
        $('.select2').select2();
    </script>


    <!-- tableExport -->
    <script src="{{ asset('js/export/jquery.base64.js') }}" defer></script>
    <!-- tableExport -->
    <script src="{{ asset('js/export/tableExport.js') }}" defer></script>
    <!-- necesario para PDF -->
    <script src="{{ asset('js/export/jspdf/libs/sprintf.js') }}" defer></script>
    <!-- necesario para PDF -->
    <script src="{{ asset('js/export/jspdf/jspdf.js') }}" defer></script>
    <!-- necesario para PDF -->
    <script src="{{ asset('js/export/jspdf/libs/base64.js') }}" defer></script>

    <!-- filtros -->
    <script src="{{ asset('js/export/jquery.dataTables.min.js') }}" defer></script>
    <!-- filtros -->
    <script src="{{ asset('js/export/dataTables.bootstrap4.min.js') }}" defer></script>


    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");

        });

    </script>
    <script>
        //Bloquear doble envio de formulario******
        enviando = false; //Obligaremos a entrar el if en el primer submit
        function checkSubmit() {
            if (!enviando) {
                enviando = true;
                return true;
            } else {
                //Si llega hasta aca significa que pulsaron 2 veces el boton submit
                alert("El formulario ya se esta enviando");
                return false;
            }
        }

    </script>
    @yield('js')
</body>

</html>
