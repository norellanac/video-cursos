@extends('layouts.pctec')
@section('content')
    <div>
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
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
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
                        <img src="{{ asset('img/icons/undraw_Mind_map_re_nlb6.svg') }}" class="pt-3 b-1 card-img-top"
                            height="150px">
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
                        <img src="{{ asset('img/icons/undraw_setup_wizard_r6mr.svg') }}" class="pt-3 b-1 card-img-top"
                            height="150px">
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
                        <img src="{{ asset('img/icons/undraw_software_engineer_lvl5.svg') }}" class="pt-3 b-1 card-img-top"
                            height="150px">
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
                        <img src="{{ asset('img/icons/undraw_setup_wizard_r6mr.svg') }}" class="pt-3 b-1 card-img-top"
                            height="150px">
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
                        <img src="{{ asset('img/icons/undraw_software_engineer_lvl5.svg') }}" class="pt-3 b-1 card-img-top"
                            height="150px">
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
                        <img src="https://pctecbus.co/wp-content/uploads/2019/08/power-bi-dashboard2.png" width="100%">

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
    </div>
@endsection
