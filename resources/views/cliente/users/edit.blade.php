@extends('layouts.main')
@section('title','Editar Perfil')


@section('content')

@include('partials.barra-lateral')
    <main id="main">
        <div class="container">
            <img src="{{ asset('/images/Logo.jpg') }}" class="img-fluid  radio_logo sombreado " alt="Responsive image" width="1100" >
        
            <div class="caja sombreado">
                <div class="row">
                    <div class="letras  " >
                        
                            {!! Form::model($user,['method'=>'PATCH', 'action'=>['ClienteUsersController@update', $user->id], 'files'=>true], ['class'=>'form-inline']) !!}
                                
                                    <div class="section-title">
                                        <h2>Editar Perfil</h2>
                                    </div>
                                    <div class="subcaja3 sombreado row">
                                        <div class="col-md-12">
                                            {!! Form::label('name', 'Nombre: ',['class'=>'letras']) !!}
                                            {!! Form::text('name',null, ['class'=>'form-control sombreado redondeo']) !!}
                                        </div><br>
                                        <div class="col-md-12">
                                            {!! Form::label('apellidos', 'Apellidos: ',['class'=>'letras']) !!}  
                                            {!! Form::text('apellidos',null, ['class'=>'form-control sombreado redondeo']) !!}
                                        </div><br>
                                        <div class="col-md-12">
                                            {!! Form::label('genero', 'Género: ',['class'=>'letras']) !!}
                                            {!! Form::select('genero', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'Otro'],null, ['class'=>'form-control sombreado redondeo', 'required']) !!}
                                        </div><br>
                                        <div class="col-md-12">
                                            {!! Form::label('fecha_nacimiento', 'Fecha Nacimiento: ',['class'=>'letras']) !!}
                                            {!! Form::date('fecha_nacimiento',null, ['class'=>'form-control sombreado redondeo']) !!}
                                        </div><br>
                                            
                                        <div class="col-md-12">
                                            {!! Form::label('ubicacion', 'Ubicación: ',['class'=>'letras']) !!}
                                            {!! Form::text('ubicacion',null, ['class'=>'form-control sombreado redondeo']) !!}
                                        </div><br>

                                        <div class="col-md-12"><br>
                                            <div class="comentarios btn sombreado">
                                                {!! Form::label('Foto_perfil', 'Foto Perfil: ',['class'=>'letras-negras']) !!}
                                                {!! Form::file('url_fotoPerfil',['class'=>'']) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-12"><br>
                                            <div class="comentarios btn sombreado">
                                                {!! Form::label('Foto_perfil', 'Foto Local: ',['class'=>'letras-negras']) !!}
                                                {!! Form::file('url_wallpa',['class'=>'']) !!}
                                            </div>
                                        </div><br>
                                            
                                        <div class="col-md-11"><br>
                                            {!! Form::submit('Actualizar', ['class'=>'btn color-botom sombreado ']) !!}
                                            {!! Form::reset('Borrar Campos', ['class'=>'btn color-botom-borrar sombreado']) !!}
                                        </div><br>
                                    </div>
                                
                            {!! Form::close() !!}<br>
                    </div>
                    
                </div>
            </div>
                
        </div>
        

        
    </main>

@endsection