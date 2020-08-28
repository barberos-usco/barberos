<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Default') | BarbApp</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/demo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{{ asset('/images/favicon.ico') }}}">
</head>
<body class="fondo">
    <!-- ======= Mobile nav toggle button ======= -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    @include('partials.nav')
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/iconos.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/valoraciones.min.js') }}"></script>
    <script src="{{ asset('js/valoraciones.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>


    <main id="main">

    </main>

    <script>
        $(function() {
        muestra_valor1=function(datos) {$("td.valor1").html(datos.valor);}
        $('#puntos_1').valoraciones({callback:muestra_valor1});
        $('td input').change(function(){
            control=$(this);
            nombre=control.attr('name');
            switch(nombre) {
                case 'marcadores':
                    instancia5.Marcadores(control.val());
                break;
                case 'actual':
                    instancia5.Valor(control.val());
                break;
                case 'maximo':
                    instancia5.Maximo(control.val());
                break;
            }
        });
        });
        </script>
</body>
</html>
