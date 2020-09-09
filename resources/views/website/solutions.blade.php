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
                                <a href="{{url('subcategories/'. $item->id)}}">
                                    <img class="d-block mx-auto" src="{{ asset('/storage/subcategories/' . $item->url_image) }}"
                                    height="150px">
                                </a>
                            <a href="{{url('subcategories/'. $item->id)}}" class="btn text-light btn-sm" style="background-color: orange">{{$item->name}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
        <!-- portfolio_part part end-->
    </div>

    <div>
        <div class="mt-2 col-12 col-md-6 offset-md-3" role="group" aria-label="Basic example">
            @foreach ($subcategories as $item)
                <a type="button" href="{{ url('learn') }}" class="btn btn-lg btn-block btn-light d-flex">
                    <img class="justify-content-start mr-5" src="{{ asset('/storage/subcategories/' . $item->url_image) }}"
                        height="40px">
                    <span class="mr-3  justify-content-center">{{ $item->name }}</span>
                    <span class="badge  badge-primary text-light  justify-content-end">{{ Auth::user()->id * 25 }}
                    </span>
                </a>
            @endforeach
        </div>
    </div>
@endsection
