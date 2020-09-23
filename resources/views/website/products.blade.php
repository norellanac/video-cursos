@extends('layouts.pctecbus')
<style>
    /* FontAwesome for working BootSnippet :> */

    @import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    #team {
        background: #eee !important;
    }

    .btn-primary:hover,
    .btn-primary:focus {
        background-color: #108d6f;
        border-color: #108d6f;
        box-shadow: none;
        outline: none;
    }

    .btn-primary {
        color: #fff;
        background-color: #007b5e;
        border-color: #007b5e;
    }

    section {
        padding: 60px 0;
    }

    section .section-title {
        text-align: center;
        color: #007b5e;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    #team .card {
        border: none;
        background: #ffffff;
    }

    .image-flip:hover .backside,
    .image-flip.hover .backside {
        -webkit-transform: rotateY(0deg);
        -moz-transform: rotateY(0deg);
        -o-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        transform: rotateY(0deg);
        border-radius: .25rem;
    }

    .image-flip:hover .frontside,
    .image-flip.hover .frontside {
        -webkit-transform: rotateY(180deg);
        -moz-transform: rotateY(180deg);
        -o-transform: rotateY(180deg);
        transform: rotateY(180deg);
    }

    .mainflip {
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -ms-transition: 1s;
        -moz-transition: 1s;
        -moz-transform: perspective(1000px);
        -moz-transform-style: preserve-3d;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
        position: relative;
    }

    .frontside {
        position: relative;
        -webkit-transform: rotateY(0deg);
        -ms-transform: rotateY(0deg);
        z-index: 2;
        margin-bottom: 30px;
    }

    .backside {
        position: absolute;
        top: 0;
        left: 0;
        background: white;
        -webkit-transform: rotateY(-180deg);
        -moz-transform: rotateY(-180deg);
        -o-transform: rotateY(-180deg);
        -ms-transform: rotateY(-180deg);
        transform: rotateY(-180deg);
        -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
        box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    }

    .frontside,
    .backside {
        -webkit-backface-visibility: hidden;
        -moz-backface-visibility: hidden;
        -ms-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: 1s;
        -webkit-transform-style: preserve-3d;
        -moz-transition: 1s;
        -moz-transform-style: preserve-3d;
        -o-transition: 1s;
        -o-transform-style: preserve-3d;
        -ms-transition: 1s;
        -ms-transform-style: preserve-3d;
        transition: 1s;
        transform-style: preserve-3d;
    }

    .frontside .card,
    .backside .card {
        min-height: 380px;
        max-height: 380px;
    }

    .backside .card a {
        font-size: 18px;
        color: #007b5e !important;
    }

    .frontside .card .card-title,
    .backside .card .card-title {
        color: #007b5e !important;
    }

    .frontside .card .card-body img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
    }

</style>
@section('content')

    <div class="container-fluid pb-6 justify-content-center" style="margin-top: 100px">

    </div>

    @if ($records)
    <div>
        @foreach ($suppliers as $supplier)
            <!-- Team -->
            <section id="team" class="pb-5">
                <div class="container">
                    <h5 class="section-title h1">
                        <img src="{{ asset('/storage/suppliers/' . $supplier->url_image) }}" class="mx-auto d-inline"
                            height="150px">
                    </h5>
                    <div class="row">
                        @foreach ($records->where('supplier_id', $supplier->id) as $item)
                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="image-flip">
                                    <div class="mainflip flip-0">
                                        <div class="frontside">
                                            <div class="card">
                                                <div class="card-body text-center">
                                                    <p><img class=" img-fluid"
                                                            src="{{ asset('/storage/products/' . $item->url_image) }}"
                                                            alt="imagen del producto"></p>
                                                    <h4 class="card-title">{{ $item->name }}</h4>
                                                    <p class="card-text">{{ $item->description }}</p>
                                                    <a href="#" class="btn btn-primary btn-sm"><i
                                                            class="fa fa-plus"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="backside">
                                            <div class="card">
                                                <div class="card-body text-center mt-4">
                                                    <h4 class="card-title">{{ $item->name }}</h4>
                                                    <p class="card-text">{{ substr($item->information, 0, 255) }}
                                                    </p>
                                                    @if ($type && $url)
                                                        <a href="{{ url('productos/' . $item->url . '/' . $type . '/' . $url. '/' . $subcategory->url) }}"
                                                            class="btn btn-primary btn-sm mt-3"> <i
                                                                class="fa fa-info-circle text-light">
                                                            </i> <span class="text-light">Más información</span></a>
                                                    @else
                                                        <a href="{{ url('productos/' . $item->url . '/na/na/na') }}"
                                                            class="btn btn-primary btn-sm mt-3"> <i
                                                                class="fa fa-info-circle text-light">
                                                            </i> <span class="text-light">Más información</span></a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <!-- Team -->
        @endforeach

    </div>
    @else
        <p>nada por aqui</p>
    @endif

    <div class="d-block d-sm-none" style="margin-bottom: 100px"></div>
    <div class="d-sm-none d-md-block" style="margin-top: 200px"></div>

@endsection
