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
                {!! Form::model($user,['method'=>'PATCH', 'action'=>['BarberoUsersController@update', $user->id], 'files'=>true], ['class'=>'form-inline']) !!}
                <div class="section-title">
                    <h2>Editar Servicios por Especialidad</h2>
                </div>
                <h5 class="blanco">** Las que no modifique, se le asignará imagen y texto por defecto **</h5> <br>
                <div class="caja-oscura">
                    <div class="row">
                        <div class="column3 letras  " >
                            <h2>Peluquería</h2>
                            <div>
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn color-botom sombreado centrado" data-toggle="modal" data-target="#myModal">
                                    Especificar
                                </button>
                                <!-- The Modal -->
                                <div class="modal" id="myModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Peluquería</h4>
                                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div>
                                                    {!! Form::file('foto_peluqueria',['class'=>'form-control-file']) !!}<br>
                                                    {!! Form::textarea('Peluqueria',null,['class'=>'form-control caja-texto']) !!}
                                                </div>
                                            </div>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Guardar</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column3 letras" >
                            <h2>Rasurado</h2>
                            <div>
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn color-botom sombreado centrado" data-toggle="modal" data-target="#myModal2">
                                    Especificar
                                </button>
                                <!-- The Modal -->
                                <div class="modal" id="myModal2">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Rasurado</h4>
                                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div>
                                                    {!! Form::file('foto_rasurado',['class'=>'form-control-file']) !!}<br>
                                                    {!! Form::textarea('Rasurado',null,['class'=>'form-control caja-texto']) !!}
                                                </div>
                                            </div>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Guardar</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column3 letras" >
                            <h2>Masajes y faciales</h2>
                            <div>
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn color-botom sombreado centrado" data-toggle="modal" data-target="#myModal3">
                                    Especificar
                                </button>
                                <!-- The Modal -->
                                <div class="modal" id="myModal3">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Masajes y faciales</h4>
                                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div>
                                                    {!! Form::file('foto_masajes_faciales',['class'=>'form-control-file']) !!}<br>
                                                    {!! Form::textarea('Masajes_faciales',null,['class'=>'form-control caja-texto']) !!}
                                                </div>
                                            </div>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Guardar</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column3 letras" >
                            <h2>Cejas</h2>
                            <div>
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn color-botom sombreado centrado" data-toggle="modal" data-target="#myModal4">
                                    Especificar
                                </button>
                                <!-- The Modal -->
                                <div class="modal" id="myModal4">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Cejas</h4>
                                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div>
                                                    {!! Form::file('foto_cejas',['class'=>'form-control-file']) !!}<br>
                                                    {!! Form::textarea('Cejas',null,['class'=>'form-control caja-texto']) !!}
                                                </div>
                                            </div>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Guardar</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column3 letras" >
                            <h2>Reporalización</h2>
                            <div>
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn color-botom sombreado centrado" data-toggle="modal" data-target="#myModal5">
                                    Especificar
                                </button>
                                <!-- The Modal -->
                                <div class="modal" id="myModal5">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Reporalización</h4>
                                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div>
                                                    {!! Form::file('foto_repolarizacion',['class'=>'form-control-file']) !!}<br>
                                                    {!! Form::textarea('Repolarizacion',null,['class'=>'form-control caja-texto']) !!}
                                                </div>
                                            </div>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Guardar</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column3 letras" >
                            <h2>Tratamiento Capilar</h2>
                            <div>
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn color-botom sombreado centrado" data-toggle="modal" data-target="#myModal6">
                                    Especificar
                                </button>
                                <!-- The Modal -->
                                <div class="modal" id="myModal6">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Tratamiento Capilar</h4>
                                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div>
                                                    {!! Form::file('foto_tratamiento_capilar',['class'=>'form-control-file']) !!}<br>
                                                    {!! Form::textarea('Tratamiento_capilar',null,['class'=>'form-control caja-texto']) !!}
                                                </div>
                                            </div>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Guardar</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column3 letras" >
                            <h2>Depilación con Cera</h2>
                            <div>
                                <!-- Button to Open the Modal -->
                                <button type="button" class="btn color-botom sombreado centrado" data-toggle="modal" data-target="#myModal7">
                                    Especificar
                                </button>
                                <!-- The Modal -->
                                <div class="modal" id="myModal7">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title">Depilación con Cera</h4>
                                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                            </div>
                                            
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <div>
                                                    {!! Form::file('foto_depilacion_cera',['class'=>'form-control-file']) !!}<br>
                                                    {!! Form::textarea('Depilacion_cera',null,['class'=>'form-control caja-texto']) !!}
                                                </div>
                                            </div>
                                            
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Guardar</button>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--<div class="boton-centrado letras" >
                            
                            <div>
                                {!! Form::submit('Guardar', ['class'=>'btn color-botom sombreado centrado']) !!}
                            </div>
                        </div>-->
                    </div>
                </div>
                {!! Form::close() !!}</br>  
            </div>
        </div>
    </div><br><br><br><br><br>
    
</main>  

@endsection