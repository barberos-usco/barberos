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
                @if ($horario)
                    
                
                {!! Form::model($horario,['method'=>'PATCH', 'action'=>['HorarioController@update', $horario->id], 'files'=>true], ['class'=>'form-inline']) !!}
                    <div class="section-title">
                        <h2>Editar Horario |
                            <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal1"> ?</div>
                            <!-- The Modal para barberos -->
                            <div class="modal" id="myModal1">
                                <div class="modal-dialog modal-large">
                                    <div class="modal-content letras ">

                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                        <h4 class="modal-title"><b>Editar Horario</b></h4>
                                        <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body text-justify">
                                        <h4><p>En esta primera sección, podremos elegir los horarios fijos por días.</p></h4>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer ">
                                        <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </h2>
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
                                @if ($editado == true)
                                <i class="fa fa-check fa-3x" aria-hidden="true" style="color:rgb(10, 250, 10);"></i>
                                @endif
                            </div>   
                        </div>
                    </div>
                {!! Form::close() !!}</br>  
                @endif
            </div>
        </div>


        
                        
        
    </div>
    
</main>
@endsection