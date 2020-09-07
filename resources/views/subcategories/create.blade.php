@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center mt-2">
        <p class="text-primary h2">Agregar</p>
    </div>
    <div class="mt-4">
        <form method="POST" action="{{ url('subcategories') }}" enctype="multipart/form-data"
        onsubmit="return checkSubmit();">
            @csrf
            <div class="form-row">
                <div class="col-12 input-group input-group-lg mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text transparent" id="inputGroup-sizing-sm">
                            <i class="text-primary fas fa-tags"></i>
                        </span>
                    </div>
                    <input id="name" placeholder="Categoría" type="text"
                        class="text-primary form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 input-group input-group-lg mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text transparent" id="inputGroup-sizing-sm">
                            <i class="text-primary fas fa-image"></i>
                        </span>
                    </div>
                    <div class="custom-file">
                        <input title="Selecionar" type="file" accept="image/*" name="url_image"
                            id="inputGroupFile04" aria-describedby="inputGroupFileAddon04"
                            class="custom-file-input form-control{{ $errors->has('url_image') ? ' is-invalid' : '' }}"
                            value="{{ old('url_image') }}" required>
                        @if ($errors->has('url_image'))
                            <span class="invalid-feedback" role="alert">
                                <strong><i
                                        class="fas fa-exclamation-triangle"></i>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                        <label class="custom-file-label" for="inputGroupFile04">Elegir imagen de producto</label>
                    </div>
                </div>
                <div class="col-12 input-group input-group-lg mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text transparent" id="inputGroup-sizing-sm">
                            <i class="text-primary fas fa-align-left"></i>
                        </span>
                    </div>
                    <input id="description" placeholder="Descripcion (opcional)" type="text"
                        class="text-primary form-control @error('description') is-invalid @enderror" name="description"
                        value="{{ old('description') }}" autocomplete="description" autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-lg btn-primary">
                                <i class="fas fa-save"></i>
                                {{ __('Guardar') }}
                            </button> </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="row mt-5 justify-content-center">
        @if (Route::has('password.request'))
        <a class="m-t-5 btn btn-link text-light" href="{{ route('password.request') }}">
            {{ __('¿Olvidé la contraseña?') }}
        </a>
        <a class="btn btn-link text-light" href="{{ route('register') }}">
            {{ __('Crear cuenta') }}
        </a>
        @endif
    </div>
</div>
@endsection