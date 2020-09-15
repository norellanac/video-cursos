@extends('layouts.pctecbus')
@section('content')
    <div class="container">

        <!--================Blog Area =================-->
        <section class="blog_area single-post-area section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post">
                            <div class="feature-img">
                                <div class="embed-responsive embed-responsive-16by9">

                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/SV6imUKuGQs"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <img class="img-fluid" src="img/blog/single_blog_1.png" alt="">
                            </div>
                            <div class="blog_details">
                                <h2>{{ $record->title }}
                                </h2>
                                <ul class="blog-info-link mt-3 mb-4">
                                    <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                </ul>
                                <p class="excert">
                                    {{ $record->information }}
                                </p>
                            </div>
                        </div>
                        <div class="comment-form">
                            <h4>Solicita Tu Cotizacion</h4>
                            <form class="form-contact comment_form" action="#" id="commentForm">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control w-100" name="comment" id="comment" cols="30"
                                                rows="3" placeholder="Dudas o comentarios"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="name" id="name" type="text"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input class="form-control" name="website" id="website" type="text"
                                                placeholder="Website">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="button button-contactForm btn_1">Solicitar
                                        cotizacion</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget post_category_widget">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left" type="button"
                                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Detalles de producto
                                                </button>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                                synth nesciunt you probably haven't heard of them accusamus labore
                                                sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    Entregables
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                                synth nesciunt you probably haven't heard of them accusamus labore
                                                sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingThree">
                                            <h2 class="mb-0">
                                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Objetivos
                                                </button>
                                            </h2>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                            data-parent="#accordionExample">
                                            <div class="card-body">
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                                wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                                vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                                synth nesciunt you probably haven't heard of them accusamus labore
                                                sustainable VHS.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title">Categoría</h4>
                                <ul class="list">
                                    @foreach ($record->category as $item)
                                        <li>
                                            <a href="{{ url('categories/' . $item->id) }}">{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </aside>
                            <aside class="single_sidebar_widget tag_cloud_widget">
                                <h4 class="widget_title">Etiquetas</h4>
                                <ul class="list">
                                    @foreach ($record->category as $item)
                                        <li>
                                            <a href="{{ url('subcategories/' . $item->id) }}">{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area end =================-->

    @endsection
