@extends('layouts.pctecbus')
@section('content')
    <div>

        <!-- portfolio_part start-->
        <section class="portfolio_part section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-columns">
                            <div class="card">
                                <blockquote class="blockquote mb-0">
                                    <h2>Soluciones para
                                        las diferentes Industrias</h2>
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
                                    <a href="{{ url('services') }}">
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
                                    <a href="{{ url('services') }}">
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
    </div>
@endsection
