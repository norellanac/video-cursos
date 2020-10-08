@extends('layouts.pctecbus')
@section('content')
    <div>
        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xl-6">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h1>Consultoría en <br>Trasnformación Digital.</h1>
                                <p>Combinamos el conocimiento del dominio de negocios con la competencia tecnológica y las
                                    metodologías comprobadas para brindar resultados de alta calidad de manera rentable y
                                    maximizar su ventaja competitiva y productividad.</p>
                                <a href="{{ 'OurServices' }}" class="btn_2">Servicios</a>
                                <a href="http://pctecbus.co/wp-content/uploads/2019/03/sap-business-one-in-60-seconds.mp4"
                                    class="popup-youtube video_popup d-none">
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



        <!-- service_part start-->
        <section class="service_part section_padding gray_bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-8 col-xl-4">
                        <div class="single_service_text">
                            <h2>Los mejores en servicios</h2>
                            <p>Nuestra experiencia en tecnologia, nos ayuda a poder asesorarte en los diferentes procesos de
                                tu negocio adaptando herramientas segun la necesidad comercial.</p>
                            <a href="{{ 'OurServices' }}" class="btn_2">Servicios</a>
                            <a href="{{ 'OurProducts' }}" class="btn_2">Productos</a>
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
                            <a href="#" class="d-none btn_3">Learn More <i class="ti-arrow-right"></i></a>
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
                            <a href="#" class="d-none btn_3 service_btn">Learn More <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- upcoming_event part start-->

        <!-- about part start-->
        <section class="about_part">
            <div class="container">
                <div class="row align-items-center justify-content-end">
                    <div class="col-md-6 col-lg-6 col-xl-5">
                        <div class="about_img">
                            <img src="{{ asset('pctecbus/img/compromiso-calidad-pctec.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 offset-xl-1 col-xl-6">
                        <div class="about_text">
                            <h2>Más de 10 años de
                                Experiencia en consultoría</h2>
                            <h4>Dominio de negocios y competencia tecnológica</h4>
                            <p>Nuestros servicios no se limitan a una tecnologia. Debido a nuestras habilidades en
                                el área tecnológica son amplias y podemos ayudar a tu empresa integrándola a la era de la
                                inteligencia digital. </p>
                            <a href="{{ 'OurServices' }}" class="btn_2">Servicios</a>
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
        @if ($records->first())
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
                                        <p class="d-none">Sap Guatemala| Implementacion de sap en guatemala| consultores sap guatemala</p>
                                    </blockquote>
                                </div>
                                @foreach ($records as $item)
                                    <div class="card">
                                        <img src="{{ asset('/storage/categories/' . $item->url_image) }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <a href="{{url('solutions/industria/'. $item->url)}}">
                                                <h5 class="card-title">{{ $item->name }}</h5>
                                            </a>
                                            <p class="card-text">
                                                <img src="https://logos-download.com/wp-content/uploads/2016/02/Microsoft_box.png"
                                                    height="40px">
                                                <img src="https://1000marcas.net/wp-content/uploads/2020/03/Sap-logo.png"
                                                    alt="" height="40px">
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- portfolio_part part end-->
        @endif


        <!-- our_service_part part start-->
        <section class="about_part our_service_part padding_top">
            <div class="container">
                <div class="row align-items-center justify-content-end">
                    <div class="col-md-6 col-xl-5">
                        <div class="about_img">
                            <img src="{{ asset('pctecbus/img/compromiso-calidad-pctec.png') }}" alt="">
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
                            <a href="OurServices" class="btn_2">Servicios</a>
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
    </div>
@endsection
