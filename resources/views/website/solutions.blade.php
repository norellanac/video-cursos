@extends('layouts.pctecbus')
@section('content')
    <div class="container">

        <!-- portfolio_part start-->
        <section class="section_padding">
            <div class="row">
                @foreach ($subcategories as $item)
                    <div class="col-6 col-md-3">
                        <div class="text-center">
                            <div class="card-body">
                                <a href="{{ url('soluciones/' . $type . '/' . $url . '/' . $item->url) }}">
                                    <img class="d-block mx-auto"
                                        src="{{ asset('/storage/subcategories/' . $item->url_image) }}" height="150px">
                                </a>
                                <a href="{{ url('soluciones/' . $type . '/' . $url . '/' . $item->url) }}"
                                    class="btn text-light btn-sm" style="background-color: orange">{{ $item->name }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        <!-- portfolio_part part end-->
    </div>
@endsection
