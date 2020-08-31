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
                <div class="section-title">
                    <h2>Editar Servicios por Especialidad |
                        <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal1"> ?</div>
                        <!-- The Modal para barberos -->
                        <div class="modal" id="myModal1">
                            <div class="modal-dialog modal-large">
                                <div class="modal-content letras ">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title"><b>Editar Servicios por Especialidad</b></h4>
                                    <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body text-justify">
                                    <h6><p>En esta vista, podremos editar los servicios que elegimos anteriormente:

                                    <ul>
                                        <li>Podemos subir una imagen acorde al servicio.</li>
                                        <li>Poner un rango de precio del servicio.</li>
                                        <li>Disponer de una descripción personalizada del servicio.</li>
                                    </ul>
                                    Si el <b>usuario-barbero</b> no hace esta personalización, se le asignaría una imagen y texto genérico.</p></h6>
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
                <h5 class="blanco">** Las que no modifique, se le asignará imagen y texto por defecto **</h5> <br>
                <div class="caja-oscura">
                    <div class="row">
                       @foreach($especialidadesBarbero as $especialidad)
                            <div class="column3 letras">
                                <h2>{{ $especialidad->especialidad->nombre }}</h2>
                                <div>
                                    <!-- Button to Open the Modal -->
                                    <button type="button" class="btn color-botom sombreado centrado" data-toggle="modal" data-target="#myModal-{{$especialidad->especialidad_id}}">
                                        Especificar
                                    </button>
                                    <!-- The Modal -->
                                    <div class="modal" id="myModal-{{$especialidad->especialidad_id}}">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <h4 class="modal-title">{{ $especialidad->especialidad->nombre }}</h4>
                                                <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <!-- Modal body -->
                                                <div class="modal-body">
                                                    {!! Form::model($user,['method'=>'PATCH', 'action'=>['BarberoUsersController@editarServicio', $user->id], 'files'=>true], ['class'=>'form-inline']) !!}
                                                    <div>
                                                        {!! Form::hidden('especialidad_id',$especialidad->especialidad_id) !!}
                                                        {!! Form::file('imagen',['class'=>'form-control-file']) !!}<br>
                                                        Precio:
                                                        {!! Form::select('precio', ['5.000 - 10.000' => '5.000 - 10.000', '10.000 - 15.000' => '10.000 - 15.000', '15.000 - 20.000' => '15.000 - 20.000', '20.000 - 30.000' => '20.000 - 30.000'],$especialidad->precio, ['class'=>'form-control sombreado redondeo', 'required']) !!}<br>
                                                        {!! Form::textarea('descripcion',$especialidad->descripcion,['class'=>'form-control caja-texto']) !!}
                                                    </div>
                                                </div>

                                                <!-- Modal footer -->
                                                <div class="modal-footer">
                                                <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Cerrar</button>
                                                {!! Form::submit('Guardar', ['class'=>'btn color-botom-2 sombreado']) !!}
                                                </div>
                                            </div>
                                        </div>
                                        {!! Form::close() !!}</br>
                                    </div>
                                </div>
                            </div>
                       @endforeach
                        <!--<div class="boton-centrado letras" >
                            <div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div><br><br><br><br><br>
@include('partials.footer')
</main>

@endsection
