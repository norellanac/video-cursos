@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center mt-2">
            <p class="text-primary h2">Agregar</p>
        </div>
        <div class="mt-4">
            <form method="POST" action="{{ url('products') }}" enctype="multipart/form-data"
                onsubmit="return checkSubmit();">
                @csrf
                <div class="form-row">
                    <div class="col-12 input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text transparent" id="inputGroup-sizing-sm">
                                <i class="text-primary fas fa-tags"></i>
                            </span>
                        </div>
                        <input id="name" placeholder="Titulo o nombre" type="text"
                            class="text-primary form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required>

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
                                <i class="text-primary fas fa-link"></i>
                            </span>
                        </div>
                        <input id="url" placeholder="link o url (debe ser unica por cada categoria)" type="text"
                            class="text-primary form-control @error('url') is-invalid @enderror" name="url"
                            value="{{ old('url') }}" required>

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text transparent" id="inputGroup-sizing-sm">
                                <i class="text-primary fas fa-align-left"></i>
                            </span>
                        </div>
                        <input id="description" placeholder="Descripción" type="text"
                            class="text-primary form-control @error('description') is-invalid @enderror" name="description"
                            value="{{ old('description') }}" required>

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

                    <div class="col-12 input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text transparent" id="inputGroup-sizing-sm">
                                <i class="text-primary fas fa-align-left"></i>
                            </span>
                        </div>
                        <input id="information" placeholder="Información del producto" type="text"
                            class="text-primary form-control @error('information') is-invalid @enderror" name="information"
                            value="{{ old('information') }}" required>

                        @error('information')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        @error('information')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text transparent" id="inputGroup-sizing-sm">
                                <i class="text-primary fas fa-link"></i>
                            </span>
                        </div>
                        <input id="reference_link" placeholder="Link o enlace de referencia" type="text"
                            class="text-primary form-control @error('reference_link') is-invalid @enderror"
                            name="reference_link" value="{{ old('reference_link') }}" required >

                        @error('reference_link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        @error('reference_link')
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
                                <i class="text-primary fas fa-money-bill-wave"></i>
                            </span>
                        </div>
                        <input id="price" placeholder="Precio Q. " type="number"
                            class="text-primary form-control @error('price') is-invalid @enderror" name="price"
                            value="{{ old('price') }}" required>

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text transparent" id="inputGroup-sizing-sm">
                                <i class="text-primary fas fa-question-circle"></i>
                            </span>
                        </div>
                        <select name="status_id" id="status_id"
                            class="form-control @error('status_id') is-invalid @enderror" required>
                            <option value="3" selected>Estado</option>
                            @foreach ($status as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('status_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        @error('status_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-primary" id="inputGroup-sizing-sm">
                                <i class="text-primary fas fa-newspaper"></i> / <i class="text-primary fas fa-podcast"></i>
                            </span>
                        </div>
                        <select
                            class="js-example-basic-multiple js-states form-control @error('subcategory_id') is-invalid @enderror"
                            name="category_id[]" id="category_id" multiple="multiple" required>
                            <option selected disabled>categoría Principal</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-primary" id="inputGroup-sizing-sm">
                                <i class="text-primary fas fa-newspaper"></i> / <i class="text-primary fas fa-podcast"></i>
                            </span>
                        </div>
                        <select
                            class="js-example-basic-multiple js-states form-control @error('subcategory_id') is-invalid @enderror"
                            name="subcategory_id[]" id="subcategory_id" multiple="multiple" required>
                            <option disabled selected>Etiquetas</option>
                            @foreach ($subcategories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('subcategory_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        @error('type_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-primary" id="inputGroup-sizing-sm">
                                <i class="text-primary fas fa-newspaper"></i> / <i class="text-primary fas fa-podcast"></i>
                            </span>
                        </div>
                        <select name="type_id" id="type_id" class="form-control @error('type_id') is-invalid @enderror"
                            required>
                            <option value="1" selected>Tipo</option>
                            <option value="1">Producto</option>
                            <option value="2">Servicio</option>
                        </select>
                        @error('type_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        @error('type_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 col-md-6 input-group input-group-lg mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text text-primary" id="inputGroup-sizing-sm">
                                <i class="text-primary fas fa-newspaper"></i> / <i class="text-primary fas fa-podcast"></i>
                            </span>
                        </div>
                        <select name="supplier_id" id="supplier_id"
                            class="form-control @error('supplier_id') is-invalid @enderror" required>
                            <option value="1" selected>Proveedor</option>
                            @foreach ($suppliers as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('supplier_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                        @error('supplier_id')
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
@section('js')
    <script>
        $('.js-example-basic-multiple').select2();

    </script>
@endsection
