<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }} | {{ substr(request()->getRequestUri(), 1) }}</title>
    <link rel="icon" href="img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('pctecbus/css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('pctecbus/css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('pctecbus/css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('pctecbus/css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('pctecbus/css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('pctecbus/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('pctecbus/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('pctecbus/css/style.css') }}">

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
    /**/

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
        position: fixed !important;
        right: -100px !important;
        bottom: 40px !important;
        z-index: 100 !important;
    }


    /**/

</style>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-xl-8">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}"> <img src="{{ asset('pctecbus/img/pctec.gif') }}"
                                alt="logo" height="50px"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('OurProducts') }}">Productos</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('OurServices') }}">Servicios</a>
                                </li>
                                <li class="nav-item dropdown d-none">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        SAP ADD-ONS
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="project.html">Project</a>
                                        <a class="dropdown-item" href="project_details.html">Project Details</a>
                                        <a class="dropdown-item" href="service.html">Services</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>

                                <li class="nav-item active">
                                    <a class="btn btn-warning nav-link text-light"
                                    target="_blank"
                                        href="{{ url('https://pctecbus.sharepoint.com/sites/SAPBusinessONE') }}">Ingresar</a>
                                </li>
                                <li class="d-none nav-item active">
                                    <a class="btn btn-warning nav-link text-light"
                                        href="{{ url('login') }}">Ingresar</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    @yield('content')




    <!-- footer part start-->
    <section class="footer-area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Top Products</h4>
                    <ul>
                        <li><a href="#">Managed Website</a></li>
                        <li><a href="#">Manage Reputation</a></li>
                        <li><a href="#">Power Tools</a></li>
                        <li><a href="#">Marketing Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">Brand Assets</a></li>
                        <li><a href="#">Investor Relations</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-xl-2 col-sm-4 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Guides</a></li>
                        <li><a href="#">Research</a></li>
                        <li><a href="#">Experts</a></li>
                        <li><a href="#">Agencies</a></li>
                    </ul>
                </div>
                <div class="col-xl-4 col-sm-8 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Newsletter</h4>
                    <p>You can trust us. we only send promo offers,</p>
                    <div class="form-wrap" id="mc_embed_signup">
                        <form target="_blank"
                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                            method="get" class="form-inline">
                            <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                required="" type="email">
                            <button class="click-btn btn btn-default text-uppercase btn_2">subscribe</button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>

                            <div class="info"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="copyright_part">
        <div class="container">
            <div class="row align-items-center">
                <p class="footer-text m-0 col-lg-8 col-md-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved <span class="d-none">| This template is made with <i class="ti-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> </span>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-3 col-md-12 text-center text-lg-right footer-social">
                    <a href="https://www.facebook.com/pctechnologygt/" target="blank"><i class="ti-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/pc-technology" target="blank"> <i class="ti-linkedin"></i> </a>
                    <a href="https://api.whatsapp.com/send?phone=50254954454" target="blank"><i class="fab fa-whatsapp"></i></a>
                    <a href="mailto:ventas@pctecbus.co" target="blank"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- -->
    <!--buttons-->
    <div class="btn-float">
        <a data-toggle="modal" data-target="#exampleModalCenter">
            <img src="{{ asset('pctecbus/img/pctecbus-mascota.gif') }}" width="50%">
        </a>

    </div>

    <!-- Modal -->
    <div class="modal fade pl-6 pr-6 pt-6 pb-6" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="justify-content-center text-center">
                        <h5 class="modal-title text-primary" id="exampleModalCenterTitle">Cotizar </h5>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-sm-6 justify-content-center d-flex pl-6 pr-6 pt-6 pb-6">
                            <div>
                                <div>
                                    <img src="{{ asset('img/icons/pc-technology-productos.svg') }}" width="100%"
                                        height="150px">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col text-center">
                                                <a href="{{ url('OurProducts') }}" class="btn btn-dark">
                                                    <i class="fas fa-"></i>
                                                    <span class="text-light">{{ __('Productos') }}
                                                    </span>
                                                </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 justify-content-center d-flex pl-6 pr-6 pt-6 pb-6">
                            <div>
                                <div>
                                    <a href="{{ url('OurServices') }}">
                                        <img src="{{ asset('pctecbus/img/elements/servicios-pctecbus.svg') }}"
                                            width="100%" height="150px">
                                    </a>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col text-center">
                                                <a href="{{ url('OurServices') }}" class="btn btn-dark btn-small ">
                                                    <span class="text-light">{{ __('Servicios') }}</span>
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
    <!-- -->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{ asset('pctecbus/js/jquery-1.12.1.min.js') }}"></script>
    <!-- popper js -->
    <script src="{{ asset('pctecbus/js/popper.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('pctecbus/js/bootstrap.min.js') }}"></script>
    <!-- easing js -->
    <script src="{{ asset('pctecbus/js/jquery.magnific-popup.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('pctecbus/js/swiper.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('pctecbus/js/masonry.pkgd.js') }}"></script>
    <!-- particles js -->
    <script src="{{ asset('pctecbus/js/owl.carousel.min.js') }}"></script>
    <!-- swiper js -->
    <script src="{{ asset('pctecbus/js/slick.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('pctecbus/js/custom.js') }}"></script>

    <script>
        $(function() {

            $('[data-toggle="modal"]').hover(function() {
                var modalId = $(this).data('target');
                $(modalId).modal('show');

            });

        });

    </script>

</body>

</html>
