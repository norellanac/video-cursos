@extends('layouts.pctecbus')
@section('content')
    <div class="">
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
                                <h2>
                                    {{ $record->name }}
                                    <img class="d-inline" src="{{ asset('/storage/products/' . $record->url_image) }}"
                                        height="40px;">
                                </h2>
                                <p class="excert">
                                    {{ $record->information }}
                                </p>
                            </div>
                        </div>
                        <div class="comment-form">
                            <h2 class="h1 text-warning">Solicita Tu Cotizacion</h2>
                            <form class="form-contact comment_form" id="myForm$" action="{{ url('contactInfo') }}">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="product" value="{{ $record->name }}">
                                <div class="row pt-4">

                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"
                                                        title="Nombre"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Nombre" name="name"
                                                aria-label="Username" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fas fa-mobile-alt" title="Celular"></i></span>
                                            </div>
                                            <input type="phone" class="form-control" placeholder="Celular" name="phone"
                                                aria-label="Username" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-at"
                                                        title=""></i></span>
                                            </div>
                                            <input type="email" class="form-control" placeholder="Correo" name="email"
                                                aria-label="Username" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                    @if ($type == 'clasificacion')
                                        <input type="hidden" name="rating" value="{{ $url }}">
                                        <input type="hidden" name="solution" value="{{ $subcategory }}">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"
                                                            title="clasification"></i></span>
                                                </div>
                                                <select type="phone" class="form-control" name="industry"
                                                    aria-label="Username" required>
                                                    <option selected disabled>Industria</option>
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->name }}"> {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($type == 'industria')
                                        <input type="hidden" name="industry" value="{{ $url }}">
                                        <input type="hidden" name="solution" value="{{ $subcategory }}">
                                        <div class="col-sm-6">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-tag"
                                                            title="clasification"></i></span>
                                                </div>
                                                <select type="phone" class="form-control" name="rating" required>
                                                    <option selected disabled>Puesto</option>
                                                    @foreach ($ratings as $item)
                                                        <option value="{{ $item->name }}"> {{ $item->name }}</option>
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
                                                <select type="phone" class="form-control" name="rating">
                                                    <option selected disabled>Puesto</option>
                                                    @foreach ($ratings as $item)
                                                        <option value="{{ $item->name }}"> {{ $item->name }}</option>
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
                                                <select type="phone" class="form-control" name="industry">
                                                    <option selected disabled>Industria</option>
                                                    @foreach ($categories as $item)
                                                        <option value="{{ $item->name }}"> {{ $item->name }}</option>
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
                                                <select type="phone" class="form-control" name="solution">
                                                    <option selected disabled>Solucion</option>
                                                    @foreach ($subcategories as $item)
                                                        <option value="{{ $item->name }}"> {{ $item->name }}</option>
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
                                            <textarea class="form-control" aria-label="With textarea" name="comments"></textarea>
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
        <style>
            .modal-susc {
                background: #fceabb;
                /* fallback for old browsers */
                background: -webkit-linear-gradient(to bottom, #f8b500, #fceabb);
                /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to bottom, #f8b500, #fceabb);
                /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

            }

        </style>
        <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-susc">
                    <div class="modal-header">
                        <h4 class="modal-title text-light">Gracias por escribir.</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-6">
                                <img src="{{ asset('pctecbus/img/elements/undraw_inbox_oppv.svg') }}" height="300px" alt="">
                            </div>
                            <div class="col-6">
                                <p class="h2 text-light">Estimado usuario</p>
                                <p class="h4" style="color: #FF7E5F">Nuestro equipo te contactará para más información de
                                    nuestros productos y servicios</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    @endsection
    @section('sectionJS')
        <script>
            function showModalContact() {
                $('#myModal').modal('show');
            }
            $('#myForm').on('submit', function(e) {
                $('#myModal').modal('show');
                e.preventDefault();
                var form = document.querySelector('#myForm');
                var data = new FormData(form);
                //var req = new XMLHttpRequest();
                //req.send(req);
                for (var i = 0; i < form.elements.length; i++) {
                    console.log(form.elements[i].value);
                }
                console.log('Form:', data);
            });

            @if ($errors->any())
                showModalContact();
            @endif
        </script>

        <script>
            // JSON Object
            fetch("{{ url('suscribe') }}", {
                method: 'POST',
                body: JSON.stringify({
                    {
                        $record
                    }
                }),
                headers: {
                    'Content-type': 'application/json; charset=UTF-8'
                }
            }).then(function(response) {
                if (response.ok) {
                    return response.json();
                }
                return Promise.reject(response);
            }).then(function(data) {
                console.log(data);
            }).catch(function(error) {
                console.warn('Something went wrong.', error);
            });

        </script>
    @endsection
