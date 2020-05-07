
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Información del Barbero</h1>

    <table width="500" border="1">
        <tr>
            <td scope="col">Id</td>
            <td scope="col">Nombre</td>
            <td scope="col">Apellidos</td>
            <td scope="col">Genero</td>
            <td scope="col">Fecha de Nacimiento</td>
            <td scope="col">Rol</td>
            <td scope="col">Ubicación</td>
            <td scope="col">Acción</td>
        </tr>
        @if ($users)
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->apellidos }}</td>
                    <td>{{ $user->genero }}</td>
                    <td>{{ $user->fecha_nacimiento }}</td>
                    <td>{{ $user->role_id }}</td>
                    <td>{{ $user->ubicacion }}</td>
                    <td><button type="button" class="btn btn-success">Editar</button></td>
                </tr>
                
            @endforeach
        @endif
        
    </table>
</body>
</html>