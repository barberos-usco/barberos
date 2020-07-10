@extends('layouts.main')
@section('title','Editar Perfil')


@section('content')

@include('barbero.users.partials.barra-lateral')
    <main id="main">
        <div class="container">
            <img src="{{ asset('/images/Logo.jpg') }}" class="img-fluid rounded sombreado " alt="Responsive image" width="1100" >
        
            <div class="caja">
        {!! Form::model($user,['method'=>'PATCH', 'action'=>['BarberoUsersController@update', $user->id], 'files'=>true]) !!}
            <div class="section-title">
                <h2>Editar Perfil</h2>
            </div>
            <table>
                <tr>
                    <td>
                        {!! Form::label('name', 'Nombre: ') !!}
                    </td>
                    <td>
                        {!! Form::text('name',null, ['class'=>'form-control']) !!}
                    </td>
                </tr>
                <tr>
                    <td>
                        {!! Form::label('apellidos', 'Apellidos: ') !!}
                    </td>
                    <td>
                        {!! Form::text('apellidos',null, ['class'=>'form-control']) !!}
                    </td>
                </tr>
                <tr>
                    <td>
                        {!! Form::label('genero', 'Género: ') !!}
                    </td>
                    <td>
                        {!! Form::select('genero', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino'],null, ['class'=>'form-control']) !!}
                    </td>
                </tr>
                <tr>
                    <td>
                        {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento: ') !!}
                    </td>
                    <td>
                        {!! Form::date('fecha_nacimiento',null, ['class'=>'form-control']) !!}
                    </td>
                </tr>
                
                <tr>
                    <td>
                        {!! Form::label('ubicacion', 'Ubicación: ') !!}
                    </td>
                    <td>
                        {!! Form::text('ubicacion',null, ['class'=>'form-control']) !!}
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
            <div
        </div>
    </main>
@include('barbero.users.partials.footer')
@endsection