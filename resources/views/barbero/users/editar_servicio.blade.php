@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Editar')
    


@section('content')

@include('barbero.users.partials.barra-lateral')
<main id="main">
    <div class="container">
        <img src="{{ asset('/images/Logo.jpg') }}" class="img-fluid rounded sombreado " alt="Responsive image" width="1100" >
        <div class="caja-especialidad container sombreado">
            <div class="card-body ">
                {!! Form::model($user,['method'=>'PATCH', 'action'=>['BarberoUsersController@update', $user->id], 'files'=>true], ['class'=>'form-inline']) !!}
                <div class="section-title">
                    <h2>Editar Servicios por Especialidad</h2>
                </div>
                <div class="row">
                    <div class="column3 letras" >
                        <h2>Peluquería</h2>
                        <div>
                            {!! Form::file('foto',['class'=>'form-control-file']) !!}
                            {!! Form::textarea('Peluqueria',null,['class'=>'form-control ']) !!}
                        </div>
                    </div>
                    <div class="column3 letras" >
                        <h2>Peluquería</h2>
                        <div>
                            {!! Form::file('foto',['class'=>'form-control-file']) !!}
                            {!! Form::textarea('Peluqueria',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="column3 letras" >
                        <h2>Peluquería</h2>
                        <div>
                            {!! Form::file('foto',['class'=>'form-control-file']) !!}
                            {!! Form::textarea('Peluqueria',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="column3 letras" >
                        <h2>Peluquería</h2>
                        <div>
                            {!! Form::file('foto',['class'=>'form-control-file']) !!}
                            {!! Form::textarea('Peluqueria',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="column3 letras" >
                        <h2>Peluquería</h2>
                        <div>
                            {!! Form::file('foto',['class'=>'form-control-file']) !!}
                            {!! Form::textarea('Peluqueria',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="column3 letras" >
                        <h2>Peluquería</h2>
                        <div>
                            {!! Form::file('foto',['class'=>'form-control-file']) !!}
                            {!! Form::textarea('Peluqueria',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="column3 letras" >
                        <h2>Peluquería</h2>
                        <div>
                            {!! Form::file('foto',['class'=>'form-control-file']) !!}
                            {!! Form::textarea('Peluqueria',null,['class'=>'form-control']) !!}
                        </div>
                    </div>
                    <div class="boton-centrado letras" >
                        
                        <div>
                            {!! Form::submit('Guardar', ['class'=>'btn color-botom sombreado centrado']) !!}
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}</br>  
            </div>
        </div>
    </div>
  
</main>       
@include('barbero.users.partials.footer')
@endsection