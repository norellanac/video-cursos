@php
$namesUser = explode(" ", Auth::user()->name);
@endphp
@extends('layouts.user')
@section('content')
<div class="container-fluid">
    <div class="mb-3 justify-content-center row ">

        <div class="">
            <video id="player" class="video-js" controls="true" preload="none" width="960" height="400"
                poster="http://vjs.zencdn.net/v/oceans.png" data-setup="{}">
                <source src="http://vjs.zencdn.net/v/oceans.mp4" type="video/mp4">
                <source src="http://vjs.zencdn.net/v/oceans.webm" type="video/webm">
                <source src="http://vjs.zencdn.net/v/oceans.ogv" type="video/ogg">
            </video>
        </div>



        <div class="mt-2 col-12 col-md-6 offset-md-3" role="group" aria-label="Basic example">
            <a type="button" href="{{url('learn')}}" class="btn btn-lg btn-block btn-light d-flex">
                <i class="fas fa-rocket mr-3  text-success justify-content-start"></i>
                <span class="mr-3  justify-content-center">Cursos sap</span>
                <span class="badge  badge-primary text-light  justify-content-end">{{ Auth::user()->id *25 }}
                </span>
            </a>
            <a type="button" href="{{url('learn')}}" class="btn btn-lg btn-block btn-light d-flex">
                <i class="fas fa-map-marked-alt mr-3 text-dark justify-content-start"></i>
                <span class="mr-3  justify-content-center">Cursos Office</span>
                <span class="badge  badge-secondary text-light  justify-content-end">{{ Auth::user()->id  * 20}}
                </span>
            </a>
            <a type="button" class="btn btn-lg btn-block btn-light d-flex" href="{{url('learn')}}">
                <i class="fas fa-medal mr-3  justify-content-start text-danger"></i>
                <span class="mr-3  justify-content-center">Otros cursos</span>
                <span class="d-none badge  badge-secondary text-light  justify-content-end">{{ Auth::user()->id }}
                </span>
            </a>
        </div>
    </div>
</div>

@endsection