@extends('layouts.pctecbus')
@section('content')
    <div class="container-fluid pb-6">
        <div class="d-sm-none d-md-block" style="margin-top: 200px"></div>
        <div class="row" style="margin-top: 100px">
            <div class="col-12 col-md-4  justify-content-center mt-6 mb-6">
                <div>
                    <div>
                        <img src="{{ asset('img/icons/ceo-cto.svg') }}" width="100%" height="150px">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <a href="{{url('solutions')}}" class="btn btn-dark">
                                        <i class="fas fa-"></i>
                                        {{ __('Directores') }}
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4  justify-content-center mt-6 mb-6">
                <div>
                    <div>
                        <div class="d-block d-sm-none" style="margin-top: 50px"></div>
                        <img src="{{ asset('img/icons/gerentes-manager.svg') }}" width="100%" height="150px">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <a href="{{url('solutions')}}" class="btn btn-dark">
                                        <i class="fas fa-"></i>
                                        {{ __('Gerencias') }}
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4  justify-content-center mt-6 mb-6">
                <div>
                    <div>
                        <div class="d-block d-sm-none" style="margin-top: 50px"></div>
                        <img src="{{ asset('img/icons/undraw_programming_2svr.svg') }}" width="100%" height="150px">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <a href="{{url('solutions')}}" class="btn btn-dark">
                                        <i class="fas fa-"></i>
                                        {{ __('Usuarios') }}
                                    </a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-block d-sm-none" style="margin-bottom: 100px"></div>
    <div class="d-sm-none d-md-block" style="margin-top: 200px"></div>

@endsection
