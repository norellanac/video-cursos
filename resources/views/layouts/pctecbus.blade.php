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
    <link rel="stylesheet" href="{{ asset('pctecbus/css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('pctecbus/css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('pctecbus/css/style.css') }}">
</head>

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
                                    <a class="d-none nav-link" href="contact.html">Contacto</a>
                                </li>
                                <li class="nav-item dropdown">
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
                                    <a class="btn btn-warning nav-link text-light" href="contact.html">Ingresar</a>
                                </li>
                                <li class="d-none nav-item active">
                                    <a class="btn btn-warning nav-link text-light" href="contact.html">Ingresar</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Consultoría en <br>Trasnformación Digital <br>Empresarial.</h1>
                            <p>Male bring land dominion over can yielding his moveth under of depend brought him is.
                                Multiply which firmament deep make.</p>
                            <a href="#" class="btn_1">learn more </a>
                            <a href="http://pctecbus.co/wp-content/uploads/2019/03/sap-business-one-in-60-seconds.mp4"
                                class="popup-youtube video_popup">
                                <span><img src="{{ asset('pctecbus/img/icon/play.svg') }}" alt=""></span> Intro
                                Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-app-1 custom-animation"><img src="{{ asset('pctecbus/img/animate_icon/icon_1.png') }}" alt="">
        </div>
        <div class="hero-app-2 custom-animation2"><img src="{{ asset('pctecbus/img/animate_icon/icon_2.png') }}" alt="">
        </div>
        <div class="hero-app-5 custom-animation4"><img src="{{ asset('pctecbus/img/animate_icon/icon_5.png') }}" alt="">
        </div>
        <div class="hero-app-7 custom-animation2"><img src="{{ asset('pctecbus/img/animate_icon/icon_7.png') }}" alt="">
        </div>
        <div class="hero-app-8 custom-animation"><img src="{{ asset('pctecbus/img/animate_icon/icon_8.png') }}" alt="">
        </div>
    </section>
    <!-- banner part start-->

    <!-- about part start-->
    <section class="about_part">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-md-6 col-lg-6 col-xl-5">
                    <div class="about_img">
                        <img src="{{ asset('pctecbus/img/undraw_business_plan_5i9d.svg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 offset-xl-1 col-xl-6">
                    <div class="about_text">
                        <h2>Más de 10 años de
                            Experiencia en consultoría</h2>
                        <h4>Dominio de negocios y competencia tecnológica</h4>
                        <p>Combinamos el conocimiento del dominio de negocios con la competencia tecnológica y las
                            metodologías comprobadas para brindar resultados de alta calidad de manera rentable y
                            maximizar su ventaja competitiva y productividad. </p>
                        <a href="#" class="btn_2">read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-app-7 custom-animation"><img src="{{ asset('pctecbus/img/animate_icon/icon_1.png') }}" alt="">
        </div>
        <div class="hero-app-8 custom-animation2"><img src="{{ asset('pctecbus/img/animate_icon/icon_2.png') }}" alt="">
        </div>
        <div class="hero-app-6 custom-animation3"><img src="{{ asset('pctecbus/img/animate_icon/icon_3.png') }}" alt="">
        </div>
    </section>
    <!-- about part start-->

    <!-- service_part start-->
    <section class="service_part section_padding gray_bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-8 col-xl-4">
                    <div class="single_service_text">
                        <h2>We Provide Best Services</h2>
                        <p>Male bring land dominion over can't yielding. His order moveth under of dry brought him is.
                            Multiply which firmament deep make. Male bring land. Dominion over can't yielding. His
                            moveth under of dry brought him is. Multiply which firmament deep make.</p>
                        <a href="#" class="btn_2">Load More</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="single_service_part">
                        <span class="single_service_icon">
                            <img src="https://logos-download.com/wp-content/uploads/2016/02/Microsoft_box.png"
                                height="70px">
                        </span>
                        <h4>Microsoft Partner</h4>
                        Herramientas para trabajo remoto y
                        colaboración, como Microsoft Teams, el almacenamiento en la nube seguro, el correo
                        empresarial y aplicaciones Premium de Office en tus dispositivos. </p>
                        <a href="#" class="btn_3">Learn More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="single_service_part single_service_part_2">
                        <span class="single_service_icon style_icon">
                            <img src="https://1000marcas.net/wp-content/uploads/2020/03/Sap-logo.png" alt=""
                                height="70px">
                        </span>
                        <h4>SAP partner</h4>
                        <p>Sabemos cómo implementar correctamente un sistema SAP y podemos validar si está
                            aprovechando al máximo su sistema SAP. </p>
                        <a href="#" class="btn_3 service_btn">Learn More <i class="ti-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!--::review_part start::-->
    <section class="review_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Customer Are Saying</h2>
                        <p>Winged hath had face creepeth abundantly so shall </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-xl-5">
                    <!-- THUMBNAILS -->
                    <div class="slider-nav-thumbnails">
                        <div class="slider-thumbnails">
                            <img src="{{ asset('pctecbus/img/client/bryan2.png') }}" alt="slideimg" class="image"
                                height="150px">
                        </div>
                        <div class="slider-thumbnails">
                            <img src="{{ asset('pctecbus/img/client/bryan1.png') }}" alt="slideimg" class="image"
                                height="150px">
                        </div>
                        <div class="slider-thumbnails">
                            <img src="{{ asset('pctecbus/img/client/bryan2.png') }}" alt="slideimg" class="image"
                                height="150px">
                        </div>
                        <div class="slider-thumbnails">
                            <img src="{{ asset('pctecbus/img/client/bryan1.png') }}" alt="slideimg" class="image"
                                height="150px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <!-- MAIN SLIDES -->
                    <div class="slider">
                        <div data-index="1">
                            <div class="client_review_text text-center">
                                <img src="{{ asset('pctecbus/img/icon/quate.svg') }}" class="quate_icon" alt="quate">
                                <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                    have light night beginning rule darkness seed darkness which land saying moveth.
                                    Fifth shall wont signs, can seasons green days gathered great</p>
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div data-index="2">
                            <div class="client_review_text text-center">
                                <img src="{{ asset('pctecbus/img/icon/quate.svg') }}" class="quate_icon" alt="quate">
                                <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                    have light night beginning rule darkness seed darkness which land saying moveth.
                                    Fifth shall wont signs, can seasons green days gathered great</p>
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div data-index="3">
                            <div class="client_review_text text-center">
                                <img src="{{ asset('pctecbus/img/icon/quate.svg') }}" class="quate_icon" alt="quate">
                                <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                    have light night beginning rule darkness seed darkness which land saying moveth.
                                    Fifth shall wont signs, can seasons green days gathered great</p>
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                        <div data-index="4">
                            <div class="client_review_text text-center">
                                <img src="{{ asset('pctecbus/img/icon/quate.svg') }}" class="quate_icon" alt="quate">
                                <p>Own midst. Behold sea created male he together of That Said fourth deep abundantly
                                    have light night beginning rule darkness seed darkness which land saying moveth.
                                    Fifth shall wont signs, can seasons green days gathered great</p>
                                <h3>Daniel E Gilcritst</h3>
                                <h5>Manager, Vision</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-app-7 custom-animation4"><img src="{{ asset('pctecbus/img/animate_icon/icon_4.png') }}"
                    alt=""></div>
            <div class="hero-app-3 custom-animation2"><img src="{{ asset('pctecbus/img/animate_icon/icon_8.png') }}"
                    alt=""></div>
            <div class="hero-app-8 custom-animation"><img src="{{ asset('pctecbus/img/animate_icon/icon_3.png') }}"
                    alt=""></div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- portfolio_part start-->
    <section class="portfolio_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-columns">
                        <div class="card">
                            <blockquote class="blockquote mb-0">
                                <h2>Soluciones para
                                    las diferentes Areas</h2>
                                <p>Male bring land. Dominion over can yielding his moveth under him is.
                                    Multiply which firmament</p>
                            </blockquote>
                        </div>
                        <div class="card">
                            <img src="{{ asset('pctecbus/img/gallery/gallery_item.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <a href="project_details.html">
                                    <h5 class="card-title">Contabilidad e Inventarios</h5>
                                </a>
                                <p class="card-text">
                                <ul>
                                    <li>Asesorias</li>
                                    <li>Auditorias</li>
                                </ul>

                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('pctecbus/img/gallery/gallery_item_1.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <a href="{{ url('#') }}">
                                    <h5 class="card-title">Asesoria y automatizacion <br> de procesos</h5>
                                </a>
                                <p class="card-text">
                                    <img src="https://logos-download.com/wp-content/uploads/2016/02/Microsoft_box.png"
                                        height="70px">
                                    <img src="https://1000marcas.net/wp-content/uploads/2020/03/Sap-logo.png" alt=""
                                        height="70px">
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('pctecbus/img/gallery/gallery_item_2.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <a href="{{ url('#') }}">
                                    <h5 class="card-title">Capacitaciónes</h5>
                                </a>
                                <p class="card-text">
                                    <img src="https://logos-download.com/wp-content/uploads/2016/02/Microsoft_box.png"
                                        height="70px">
                                    <img src="https://1000marcas.net/wp-content/uploads/2020/03/Sap-logo.png" alt=""
                                        height="70px">
                                </p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="{{ asset('pctecbus/img/gallery/gallery_item_3.png') }}" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <a href="project_details.html">
                                    <h5 class="card-title">Business Intelligence</h5>
                                </a>
                                <p class="card-text">
                                    <img src="https://talentoop.com/wp-content/uploads/2020/04/powerbi_icon-300x300.jpg"
                                        width="100px" alt="">
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio_part part end-->

    <!-- our_service_part part start-->
    <section class="about_part our_service_part padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-end">
                <div class="col-md-6 col-xl-5">
                    <div class="about_img">
                        <img src="{{ asset('pctecbus/img/undraw_business_deal_cpi9.svg') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 offset-xl-1 col-xl-6">
                    <div class="about_text">
                        <h2>Calidad y excelencia en servicios</h2>
                        <h4>Compromiso y calidad garantizan nuestros servicios</h4>
                        <p>Entregar a nuestros clientes una combinación innovadora de soluciones propias y de terceros a
                            través de servicios profesionales de excelencia, logrando una relación de largo plazo con
                            nuestros socios de negocio y colaboradores con el objetivo que superen sus desafíos
                            empresariales.</p>
                        <a href="#" class="btn_2">read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-app-1 custom-animation"><img src="{{ asset('pctecbus/img/animate_icon/icon_1.png') }}" alt="">
        </div>
        <div class="hero-app-4 custom-animation2"><img src="{{ asset('pctecbus/img/animate_icon/icon_8.png') }}" alt="">
        </div>
        <div class="hero-app-8 custom-animation3"><img src="{{ asset('pctecbus/img/animate_icon/icon_9.png') }}" alt="">
        </div>
    </section>
    <!--::blog_part start::-->

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

                    </script> All rights reserved | This template is made with <i class="ti-heart"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"> <i class="ti-twitter"></i> </a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-skype"></i></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

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



</body>

</html>
