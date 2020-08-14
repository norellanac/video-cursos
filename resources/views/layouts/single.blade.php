<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
        background: #f7921c;
        background: linear-gradient(to right, #f0602a, #de9432);
    }

    .transparent {
        background-color: transparent !important;
        border-right-style: none;
    }

    .form-control::placeholder {
        color: white;
    }

    .form-control {
        background-color: transparent !important;
        border-left-style: none;
    }

    .form-control::-webkit-input-placeholder {
        background-color: transparent !important;
        color: white;
    }

    /*vuelve tranparente el color de fondo del input en bootstrap 4*/
    .form-control:valid {
        background-color: transparent !important;
    }

    .show-password {
        background-color: transparent !important;
        border-top-right-radius: 25px;
    }
</style>

<body>
    <div>
        @yield('content')
    </div>
    <script>
        //Bloquear doble envio de formulario******
        enviando = false; //Obligaremos a entrar el if en el primer submit
        function checkSubmit() {
          if (!enviando) {
            enviando= true;
            return true;
          } else {
            //Si llega hasta aca significa que pulsaron 2 veces el boton submit
            alert("El formulario ya se esta enviando");
            return false;
          }
        }
    </script>

    <script>
        //Mostrar contraseña
        enviando = false; //Obligaremos a entrar el if en el primer submit
        function showPassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }

            var y = document.getElementById("password-confirm");
            if (y.type === "password") {
                y.type = "teyx";
            } else {
                y.type = "password";
            }
        }
    </script>
    <script>
        $('.select2').select2();
    </script>
    {{--se agregó esta seccion para evitar conflictos entre select con busqueda y select depeneidntes en departamentos y municipios, --}}
    @yield('sectionJS')
</body>

</html>