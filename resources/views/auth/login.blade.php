<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<style>
    body {
        background: #007bff;
        background: linear-gradient(to right, #0062E6, #33AEFF);
    }

    .transparent {
        background-color: transparent;
        border-right-style: none;
    }

    .form-control::placeholder {
        color: white;
    }

    .form-control {
        background-color: transparent;
        border-left-style: none;
    }


    .form-control::-webkit-input-placeholder {
        background-color: transparent;
        color: white;
    }

    /*vuelve tranparente el color de fondo del input en bootstrap 4*/
    .form-control:valid {
        background-color: transparent !important; 
    }
</style>

<body>
    <div class="container ">
        <div class="row justify-content-around" style="margin-top: 8em;">
            <img src="https://image.flaticon.com/icons/svg/1828/1828503.svg" class="img-fluid" width="25%" alt="Responsive image">
        </div>
        
        <div class="row justify-content-around">
            <h1 class="text-light">Bienvenido</h1>
        </div>
        <div class="row justify-content-around ">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group input-group-lg mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text transparent" id="inputGroup-sizing-sm">
                            <i class="text-light fas fa-at"></i>
                        </span>
                    </div>
                    <input placeholder="Correo "  type="text"
                    aria-label=" Sizing example input" aria-describedby="inputGroup-sizing-sm"
                            class=" form-control text-light @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required  >

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                </div>
                <div class="input-group input-group-lg mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text transparent" id="inputGroup-sizing-sm">
                            <i class="text-light fas fa-user"></i>
                        </span>
                    </div>
                    <input placeholder="Hola mundo n" type="number" class=" form-control text-light"
                    aria-label=" Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-lg mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text transparent" id="inputGroup-sizing-sm">
                            <i class="text-light fas fa-user"></i>
                        </span>
                    </div>
                    <input placeholder="Hola mundo p" type="password" class=" form-control text-light">
                </div>
                {{--

                <div class="form-group row">
                    <label for="email"
                        class="col-md-4 col-form-label text-md-right text-light">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input placeholder="Correo" id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                    --}}

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input placeholder="Contraseña" id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>