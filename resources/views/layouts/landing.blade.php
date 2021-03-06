<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} | {{ substr(request()->getRequestUri(), 1) }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/tecun/logo.png') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/dark-mode.css') }}" rel="stylesheet">

    <!-- filtros datatables -->
    <link href="{{ asset('js/export/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <!-- menuadmin -->
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">


    {{-- selec2 --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.min.css') }}" />
    <style>
        [data-theme="dark"] {
            background-color: #111 !important;
            color: #eee;
        }

        [data-theme="dark"] .bg-light {
            background-color: #333 !important;
        }

        [data-theme="dark"] .bg-white {
            background-color: #000 !important;
        }

        [data-theme="dark"] .bg-black {
            background-color: #eee !important;
        }

    </style>
</head>

<body>
    <main role="main">
        <div id="app" class="container-fluid pl-0 pr-0 ml-0 mr-0">
            <section class="fixed-top bg-opacity">
                <!--Navbar -->
                <nav id="navigation" class="bg-opacity pt-3 pb-2 navbar  navbar-expand-lg navbar-light fixed-top">
                    <a class="ml-5 navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/pctec_logo.png') }}"
                            class="d-inline-block align-top ml-1" height="35px"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="text-light fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
                        <ul class="navbar-nav mr-auto">

                        </ul>
                        <ul class="navbar-nav ml-auto nav-flex-icons mr-5">
                            <li class="nav-item"><a class="nav-link waves-effect waves-light text-light"
                                    href="#home"><strong>Inicio</strong></a></li>
                            <li class="nav-item"><a class="nav-link waves-effect waves-light text-light"
                                    href="{{ url('services') }}"><strong>Productos y servicios</strong></a></li>


                            <li class="nav-item"><a class="h4 nav-link waves-effect waves-light text-light"
                                    href="{{ url('login') }}"><strong>Ingresar</strong></a></li>
                            <li class="nav-item">
                                <div class="nav-link waves-effect waves-light text-light">
                                    <div class="custom-control custom-switch ">
                                        <input type="checkbox" class="custom-control-input" id="darkSwitch">
                                        <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--/.Navbar -->
            </section>

            <div class="d-block d-sm-none bg-light" style="height: 80px"></div>
            <section id="home">
                <div class="bg-theme-light bg-gradiant">
                    <div class="">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('https://image.freepik.com/free-photo/hands-using-mobile-payments_34200-362.jpg') }}"
                                        width="100%" style="max-height: 700px" class="d-block w-100">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('https://image.freepik.com/free-photo/smartphones-sharing-information-with-their-applications_1134-87.jpg') }}"
                                        width="100%" style="max-height: 700px" class="d-block w-100">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('https://image.freepik.com/free-vector/mobile-app-development-background_73903-295.jpg') }}"
                                        width="100%" style="max-height: 700px" class="d-block w-100">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>First slide label</h5>
                                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <section class="pb-5" id="screenshot">
                <div class="container">
                    <div class="pt-5 pb-5 justify-content-center text-center">
                        <p class="h3">Nuestros servicios</p>
                    </div>
                    <div class="card-deck responsive">
                        <div class="card">
                            <img src="{{ asset('img/icons/undraw_file_sync_ot38.svg') }}" class="pt-3 b-1 card-img-top"
                                height="150px">
                            <div class="card-body">
                                <h5 class="text-dark">IMPLEMENTACIÓN DE SAP Y ACTUALIZACIÓN</h5>
                                <p class="text-muted">Ya sea que su empresa necesite un SAP ERP de escala completa, un
                                    solo
                                    módulo o una actualización, PC Technology está lista para superar todas las
                                    expectativas
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/icons/undraw_Mind_map_re_nlb6.svg') }}"
                                class="pt-3 b-1 card-img-top" height="150px">
                            <div class="card-body">
                                <h5 class="text-dark">APOYO A LA ADMINISTRACIÓN DE APLICACIONES DE SAP</h5>
                                <p class="text-muted">TEntendemos que cada organización tiene requisitos de soporte
                                    únicos.
                                    Ofrecemos una solución personalizada que se ajuste a sus necesidades.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/icons/undraw_setup_wizard_r6mr.svg') }}"
                                class="pt-3 b-1 card-img-top" height="150px">
                            <div class="card-body">
                                <h5 class="text-dark">SERVICIOS DE REVISIÓN Y AUDITORÍA DE SISTEMAS.</h5>
                                <p class="text-muted">Sabemos cómo implementar correctamente un sistema SAP y podemos
                                    validarlo si está aprovechando al máximo su sistema SAP.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/icons/undraw_software_engineer_lvl5.svg') }}"
                                class="pt-3 b-1 card-img-top" height="150px">
                            <div class="card-body">
                                <h5 class="text-dark">MIGRACIÓN EN LA NUBE DE SAP Y HOSTING</h5> <br>
                                <p class="text-muted">La ejecución de servidores basados ​​en la nube está ganando
                                    adopción
                                    debido a menores costos y una administración más sencilla. </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>


                        <div class="card">
                            <img src="{{ asset('img/icons/undraw_setup_wizard_r6mr.svg') }}"
                                class="pt-3 b-1 card-img-top" height="150px">
                            <div class="card-body">
                                <h5 class="text-dark">SERVICIOS DE REVISIÓN Y AUDITORÍA DE SISTEMAS.</h5>
                                <p class="text-muted">Sabemos cómo implementar correctamente un sistema SAP y podemos
                                    validarlo si está aprovechando al máximo su sistema SAP.</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('img/icons/undraw_software_engineer_lvl5.svg') }}"
                                class="pt-3 b-1 card-img-top" height="150px">
                            <div class="card-body">
                                <h5 class="text-dark">MIGRACIÓN EN LA NUBE DE SAP Y HOSTING</h5> <br>
                                <p class="text-muted">La ejecución de servidores basados ​​en la nube está ganando
                                    adopción
                                    debido a menores costos y una administración más sencilla. </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="features" class="text-light justify-content-center pt-5 pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <img src="https://pctecbus.co/wp-content/uploads/2019/08/power-bi-dashboard2.png"
                                width="100%">

                        </div>
                        <div class="col-12 col-md-4 offset-md-1">
                            <br><br>
                            <p class="h1 text-primary justify-content-center">SAP y PC Technology ayudan a tu empresa a
                                evolucionar hacia la
                                empresa inteligente.</p>
                        </div>

                    </div>
                </div>
            </section>

            <section class="bg-theme-1 text-light text-center pt-5 pb-2">


                <div class="mt-1 pb-1">
                    <div class="" role="group" aria-label="Basic example">
                        <a href="#" type="button"
                            class="btn btn-lg waves-effect waves-light btn-outline-light ml-3 mr-3"
                            style="border-radius: 50%;"> <i class="fab fa-facebook"></i> </a>
                        <a href="#" type="button"
                            class="btn btn-lg waves-effect waves-light btn-outline-light ml-3 mr-3"
                            style="border-radius: 50%;"> <i class="fab fa-instagram"></i> </a>
                        <a href="#" type="button"
                            class="btn btn-lg waves-effect waves-light btn-outline-light ml-3 mr-3"
                            style="border-radius: 50%;"> <i class="fab fa-linkedin"></i> </a>
                        <a href="#" type="button"
                            class="btn btn-lg waves-effect waves-light btn-outline-light ml-3 mr-3"
                            style="border-radius: 50%;"> <i class="fab fa-twitter"></i> </a>
                    </div>
                    <p class="mt-2">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());

                        </script> Copyright Corporacion PC Technology <br> Made with <i class="fa fa-heart"
                            aria-hidden="true"></i> by <a href="http://norellanac.website/" class="text-light"
                            target="_blank">Norellanac</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </section>

        </div>
    </main>

    <!--buttons-->
    <div class="btn-float">
        <a class="btn btn-light btn-circle btn-xl text-light" data-toggle="modal" data-target="#exampleModalCenter">
            <img src="https://image.flaticon.com/icons/svg/1660/1660216.svg" width="100%">
        </a>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header justify-content-center text-center">
                    <h5 class="modal-title text-primary" id="exampleModalCenterTitle">Cotizar </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-6 justify-content-center d-flex pl-3 pr-3 pt-3 pb-3">
                            <div>
                                <div>
                                    <img src="{{ asset('img/icons/undraw_secure_server_s9u8.svg') }}" width="100%" height="150px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col text-center">
                                                <a href="{{url('services')}}" class="btn btn-dark">
                                                    <i class="fas fa-"></i>
                                                    {{ __('Productos') }}
                                                </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 justify-content-center d-flex pl-3 pr-3 pt-3 pb-3">
                            <div>
                                <div>
                                    <img src="{{ asset('img/icons/undraw_programming_2svr.svg') }}" width="100%" height="150px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col text-center">
                                                <a href="{{url('services')}}" class="btn btn-dark">
                                                    <i class="fas fa-"></i>
                                                    {{ __('Servicios') }}
                                                </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
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

    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dark-mode-switch.min.js') }}"></script>

    <script>
        $(function() {
            $(document).scroll(function() {
                var $nav = $(".fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
            });
        });

    </script>
    <script>
        $('.responsive').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });

    </script>

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
