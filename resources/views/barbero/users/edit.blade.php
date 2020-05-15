@extends('layouts.app')
@extends('barbero.users.barra-lateral')
@section('content')

    <main id="main">
        <h1>Para modificar el perfil del barbero</h1>
        {!! Form::model($user,['method'=>'PATCH', 'action'=>['BarberoUsersController@update', $user->id], 'files'=>true]) !!}
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
                        {!! Form::date('fecha_nacimiento') !!}
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
                        {!! Form::submit('Actualizar') !!}
                    </td>
                    <td>
                        {!! Form::reset('Borrar Campos') !!}
                    </td>
                </tr>
                

            </table>
    </main>
@endsection