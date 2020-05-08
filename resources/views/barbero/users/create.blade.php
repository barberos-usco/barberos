@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Usuario</div>

                <div class="card-body">

                    
                    {!! Form::open(['method'=>'POST', 'action'=>'BarberoUsersController@store', 'files'=>true]) !!}
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection