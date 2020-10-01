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

                                    <iframe class="embed-responsive-item"
                                        src="{{ 'https://www.youtube.com/embed/' . $record->url_video }}" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                                <img class="img-fluid" src="img/blog/single_blog_1.png" alt="">
                            </div>
                            <div class="blog_details">
                                <h2>{{ $record->name }}
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
                            <h2 class="h1 text-warning">Solicita Tu Cotizacion</h2>
                            <form class="form-contact comment_form" action="#" id="commentForm">
                                <div class="row pt-4">

                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"
                                                        title="Nombre"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Nombre" name="name"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fas fa-mobile-alt" title="Celular"></i></span>
                                            </div>
                                            <input type="phone" class="form-control" placeholder="Celular" name="phone"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"
                                                        title=""></i></span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="Correo" name="email"
                                                aria-label="Username" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    @if ($type == 'clasificacion')
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"
                                                            title="clasification"></i></span>
                                                </div>
                                                <select type="phone" class="form-control" placeholder="Celular" name="phone"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                    <option value="">Industria</option>
                                                    @foreach ($subcategories as $item)
                                                        <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($type == 'industria')
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"
                                                            title="clasification"></i></span>
                                                </div>
                                                <select type="phone" class="form-control" placeholder="Celular" name="phone"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                    <option value="">Puesto</option>
                                                    @foreach ($ratings as $item)
                                                        <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($type == 'na')
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"
                                                            title="clasification"></i></span>
                                                </div>
                                                <select type="phone" class="form-control" placeholder="Celular" name="phone"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                    <option value="">Puesto</option>
                                                    @foreach ($ratings as $item)
                                                        <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"
                                                            title="clasification"></i></span>
                                                </div>
                                                <select type="phone" class="form-control" placeholder="Celular" name="phone"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                    <option value="">Industria</option>
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"
                                                            title="clasification"></i></span>
                                                </div>
                                                <select type="phone" class="form-control" placeholder="Celular" name="phone"
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                                    <option value="">Solucion</option>
                                                    @foreach ($subcategories as $item)
                                                        <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endif
                                    <div class="col-sm-12">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Comentarios</span>
                                            </div>
                                            <textarea class="form-control" aria-label="With textarea"></textarea>
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
                                                {{ $record->information }}
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
                                                {{ $record->objective }}
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
                                                {{ $record->details }}
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
                                    @foreach ($record->rating as $item)
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
