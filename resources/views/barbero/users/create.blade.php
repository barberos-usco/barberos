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
    <h1>Para crear un usuario, no lo usaré igual </h1>
    {!! Form::open(['method'=>'POST', 'action'=>'BarberoUsersController@create']) !!}
        <table>
            <tr>
                <td>
                    {!! Form::label('name', 'Nombre: ') !!}
                </td>
                <td>
                    {!! Form::text('name') !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('apellidos', 'Apellidos: ') !!}
                </td>
                <td>
                    {!! Form::text('apellidos') !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('genero', 'Género: ') !!}
                </td>
                <td>
                    {!! Form::select('genero', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino']) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento: ') !!}
                </td>
                <td>
                    {!! Form::date('fecha_nacimiento', \Carbon\Carbon::now()) !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('password', 'Password: ') !!}
                </td>
                <td>
                    {!! Form::password('password') !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('email', 'E-Mail: ') !!}
                </td>
                <td>
                    {!! Form::text('email') !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('email', 'Verificar E-Mail: ') !!}
                </td>
                <td>
                    {!! Form::text('email_verified_at') !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('role_id', 'Role: ') !!}
                </td>
                <td>
                    {!! Form::text('role_id') !!}
                </td>
            </tr>
            <tr>
                <td>
                    {!! Form::label('ubicacion', 'Ubicación: ') !!}
                </td>
                <td>
                    {!! Form::text('ubicacion') !!}
                </td>
            </tr>
            
            <tr>
                <td>
                    {!! Form::submit('Crear') !!}
                </td>
                <td>
                    {!! Form::reset('Borrar Campos') !!}
                </td>
            </tr>
            

        </table>
    {!! Form::close() !!}
</body>
</html>