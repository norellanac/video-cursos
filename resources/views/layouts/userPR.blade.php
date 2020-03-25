<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Jalón |Raite') }}</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('prantokon/css/bootstrap.min.css')}}" media="all" />
    <!-- Slick nav CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('prantokon/css/slicknav.min.css')}}" media="all" />
    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('prantokon/css/icofont.css')}}" media="all" />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('prantokon/css/slick.css')}}">

    <link rel="stylesheet" href="{{asset('prantokon/css/font-awesome.min.css')}}">
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('prantokon/css/owl.carousel.css')}}">
    <!-- Popup CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('prantokon/css/magnific-popup.css')}}">
    <!-- Switcher CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('prantokon/css/switcher-style.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('prantokon/css/animate.min.css')}}">
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('prantokon/css/style.css')}}" media="all" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('prantokon/css/responsive.css')}}" media="all" />
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{asset('prantokon/img/favcion.png')}}" />
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body data-offset="50">
    {{--

    <!-- Page loader -->
    <div id="preloader"></div>
    --}}
    <!-- header section start -->
    <header class="header">
        <div class="container">
            <div class="row flexbox-center">
                <div class="col-lg-2 col-md-3 col-6">
                    <div class="logo">
                        <a href="{{ url('/') }}"><img src="{{asset('prantokon/img/logo.png')}}" alt="logo" /></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9 col-6">
                    <div class="responsive-menu"></div>
                    <div class="mainmenu">
                        <ul id="primary-menu">
                            <li><a class="nav-link active" href="{{ url('/') }}">Inicio</a></li>
                            <li><a class="nav-link" href="#feature">Feature</a></li>
                            <li><a class="nav-link" href="#screenshot">Screenshot</a></li>
                            <li><a class="nav-link" href="#pricing">Pricing</a></li>
                            <li><a class="nav-link" href="#team">Team</a></li>
                            <li><a class="nav-link" href="#blog">Blog</a></li>
                            <li>
                                <div class="dropdown">
                                    <a class="nav-link  text-white dropdown-toggle" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="text-secondary" href="#">Action</a>
                                        <a class="text-secondary" href="#">Another action</a>
                                        <a class="text-secondary" href="#">Something else here</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li><a class="appao-btn" href="{{url('/')}}/#">Download</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- header section end -->

    <!-- hero area start -->
    <section class="hero-area" id="home">
        <div style="margin-top:5em; margin-bottom: 10em;">
            @yield('content')
        </div>
    </section><!-- hero area end -->


    <!-- footer section start -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="subscribe-form">
                        <form action="#">
                            <input type="text" placeholder="Your email address here">
                            <button type="submit">Subcribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright-area">
                        <ul>
                            <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-pinterest"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                        </ul>
                        <p>&copy;
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                                aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- footer section end -->
    {{--
        <a href="#" class="scrollToTop">
        <i class="icofont icofont-arrow-up"></i>
    </a>
    <div class="switcher-area" id="switch-style" >
        <div class="display-table">
            <div class="display-tablecell">
                <a class="switch-button" id="toggle-switcher"><i class="icofont icofont-wheel"></i></a>
                <div class="switched-options">
                    <div class="config-title">Home variation:</div>
                    <ul>
                        <li><a href="index.html">Home - Fixed Text</a></li>
                        <li><a href="index-slider.html">Home - Slider Effect</a></li>
                        <li class="active"><a href="index-video.html">Home - Video Background</a></li>
                    </ul>
                    <div class="config-title">Other Pages</div>
                    <ul>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="blog-detail.html">Blog Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        --}}
    <!-- jquery main JS -->
    <script src="{{asset('prantokon/js/jquery.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('prantokon/js/bootstrap.min.js')}}"></script>
    <!-- Slick nav JS -->
    <script src="{{asset('prantokon/js/jquery.slicknav.min.js')}}"></script>
    <!-- Slick JS -->
    <script src="{{asset('prantokon/js/slick.min.js')}}"></script>
    <!-- owl carousel JS -->
    <script src="{{asset('prantokon/js/owl.carousel.min.js')}}"></script>
    <!-- Popup JS -->
    <script src="{{asset('prantokon/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Counter JS -->
    <script src="{{asset('prantokon/js/jquery.counterup.min.js')}}"></script>
    <!-- Counterup waypoints JS -->
    <script src="{{asset('prantokon/js/waypoints.min.js')}}"></script>
    <!-- YTPlayer JS -->
    <script src="{{asset('prantokon/js/jquery.mb.YTPlayer.min.js')}}"></script>
    <!-- jQuery Easing JS -->
    <script src="{{asset('prantokon/js/jquery.easing.1.3.js')}}"></script>
    <!-- Gmap JS -->
    <script src="{{asset('prantokon/js/gmap3.min.js')}}"></script>
    <!-- Google map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>
    <!-- Custom map JS -->
    <script src="{{asset('prantokon/js/custom-map.js')}}"></script>
    <!-- WOW JS -->
    <script src="{{asset('prantokon/js/wow-1.3.0.min.js')}}"></script>
    <!-- Switcher JS -->
    <script src="{{asset('prantokon/js/switcher.js')}}"></script>
    <!-- main JS -->
    <script src="{{asset('prantokon/js/main.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>