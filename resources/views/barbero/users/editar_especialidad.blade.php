@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Editar')
    


@section('content')

@include('partials.barra-lateral')

<main id="main">
    <div class="container">
        <img src="{{ asset('/images/Logo.jpg') }}" class="img-fluid radio_logo sombreado " alt="Responsive image" width="1100" >
    
        <div class="caja-especialidad container sombreado">
            <div class="card-body ">
                @if ($user)
                    
                
                {!! Form::model($user,['method'=>'PATCH', 'action'=>['BarberoUsersController@especialidad', $user->id], 'files'=>true], ['class'=>'form-inline']) !!}
                    <div class="section-title">
                        <h2>Editar Horario</h2>
                    </div>
                    <div class="row">
                        <div class="column letras" >
                            <h2>Lunes</h2>
                            <div>
                                {!! Form::select('lunes', ['Cerrado' => 'Cerrado','6:00 am - 6:00 pm' => '6:00 am - 6:00 pm', '8:00 am - 5:30 pm' => '8:00 am - 5:30 pm', '10:00 am - 5:30 pm' => '10:00 am - 5:30 pm', '2:00 pm - 6:00 pm' => '2:00 am - 6:00 pm'],null, ['class'=>'form-control sombreado redondeo']) !!}
                            </div>
                        </div>
                        <div class="column letras" >
                            <h2>Martes</h2>
                            <div>
                                {!! Form::select('martes', ['Cerrado' => 'Cerrado','6:00 am - 6:00 pm' => '6:00 am - 6:00 pm', '8:00 am - 5:30 pm' => '8:00 am - 5:30 pm', '10:00 am - 5:30 pm' => '10:00 am - 5:30 pm', '2:00 pm - 6:00 pm' => '2:00 am - 6:00 pm'],null, ['class'=>'form-control sombreado redondeo']) !!}
                            </div>
                        </div>
                        <div class="column letras" >
                            <h2>Miércoles</h2>
                            <div>
                                {!! Form::select('miercoles', ['Cerrado' => 'Cerrado','6:00 am - 6:00 pm' => '6:00 am - 6:00 pm', '8:00 am - 5:30 pm' => '8:00 am - 5:30 pm', '10:00 am - 5:30 pm' => '10:00 am - 5:30 pm', '2:00 pm - 6:00 pm' => '2:00 am - 6:00 pm'],null, ['class'=>'form-control sombreado redondeo']) !!}
                            </div>
                        </div>
                        <div class="column letras" >
                            <h2>Jueves</h2>
                            <div>
                                {!! Form::select('jueves', ['Cerrado' => 'Cerrado','6:00 am - 6:00 pm' => '6:00 am - 6:00 pm', '8:00 am - 5:30 pm' => '8:00 am - 5:30 pm', '10:00 am - 5:30 pm' => '10:00 am - 5:30 pm', '2:00 pm - 6:00 pm' => '2:00 am - 6:00 pm'],null, ['class'=>'form-control sombreado redondeo']) !!}
                            </div>
                        </div>
                        <div class="column letras" >
                            <h2>Viernes</h2>
                            <div>
                                {!! Form::select('viernes', ['Cerrado' => 'Cerrado','6:00 am - 6:00 pm' => '6:00 am - 6:00 pm', '8:00 am - 5:30 pm' => '8:00 am - 5:30 pm', '10:00 am - 5:30 pm' => '10:00 am - 5:30 pm', '2:00 pm - 6:00 pm' => '2:00 am - 6:00 pm'],null, ['class'=>'form-control sombreado redondeo']) !!}
                            </div>
                        </div>
                        <div class="column letras" >
                            <h2>Sábado</h2>
                            <div>
                                {!! Form::select('sabado', ['Cerrado' => 'Cerrado','6:00 am - 6:00 pm' => '6:00 am - 6:00 pm', '8:00 am - 5:30 pm' => '8:00 am - 5:30 pm', '10:00 am - 5:30 pm' => '10:00 am - 5:30 pm', '2:00 pm - 6:00 pm' => '2:00 am - 6:00 pm'],null, ['class'=>'form-control sombreado redondeo']) !!}
                            </div>
                        </div>
                        <div class="column letras" >
                            <h2>Domingo</h2>
                            <div>
                                {!! Form::select('domingo', ['Cerrado' => 'Cerrado','6:00 am - 6:00 pm' => '6:00 am - 6:00 pm', '8:00 am - 5:30 pm' => '8:00 am - 5:30 pm', '10:00 am - 5:30 pm' => '10:00 am - 5:30 pm', '1:00 pm - 4:00 pm' => '1:00 am - 4:00 pm'],null, ['class'=>'form-control sombreado redondeo']) !!}
                            </div>
                        </div>
                        <div class="column letras" >
                            
                            <div>
                                {!! Form::submit('Guardar', ['class'=>'btn color-botom sombreado centrado']) !!}
                            </div>
                        </div>
                    </div>
                {!! Form::close() !!}</br>  
                @endif
            </div>
        </div>


        <div class="caja-especialidad container sombreado">
            <div class="card-body ">
                {!! Form::model($user,['method'=>'PATCH', 'action'=>['BarberoUsersController@update', $user->id], 'files'=>true], ['class'=>'form-inline']) !!}
                    <div class="row">
                        <div class="columna letras" >
                            <img src="{{ asset('/images/especialidad-izq.png') }}" class="img-fluid  " alt="Responsive image" width="100%" >
                        </div>
                        <div class="columna letras" >
                            <div class="section-title">
                                <h2>Editar Especialidades</h2>
                            </div>
                            <div>
                               {!! Form::checkbox('Peluqueria', 'Peluqueria') !!} Peluqueria
                            </div>
                            <div>
                               {!! Form::checkbox('Rasurado', 'Rasurado') !!} Rasurado
                            </div>
                            <div>
                               {!! Form::checkbox('Masajes y faciales', 'Masajes y faciales') !!} Masajes y faciales
                            </div>
                            <div>
                               {!! Form::checkbox('Cejas', 'Cejas') !!} Cejas
                            </div>
                            <div>
                               {!! Form::checkbox('Reporalizacion', 'Reporalizacion') !!} Reporalización
                            </div>
                            <div>
                               {!! Form::checkbox('Tratamiento Capilar', 'Tratamiento Capilar') !!} Tratamiento Capilar
                            </div>
                            <div>
                               {!! Form::checkbox('Depilación con Cera', 'Depilación con Cera') !!} Depilación con Cera
                            </div><br><br>
                            {!! Form::submit('Guardar', ['class'=>'btn color-botom sombreado centrado']) !!}
                            {!! Form::reset('Borrar', ['class'=>'btn color-botom-borrar sombreado']) !!}
                        </div>
                        <div class="columna letras" >
                            <img src="{{ asset('/images/especialidad-dere.png') }}" class="img-fluid  " alt="Responsive image" width="100%" >
                        </div>
                        
                        {{--  <div class="column letras" >
                            
                            <div>
                                {!! Form::submit('Guardar', ['class'=>'btn color-botom sombreado centrado']) !!}
                            </div>
                        </div>--}}
                    </div>
                {!! Form::close() !!}</br>  
            </div>
        </div>
    </div>
    
</main>
@endsection