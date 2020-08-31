@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Perfil')



@section('content')

@include('partials.barra-lateral')
<main id="main">

    <div class="caja-oscura_perfil_info_cliente row">

            <div class="caja-interna_perfil_titulo letras text-center sombreado">
              <b>  {{ $user->name ." ". $user->apellidos }}
                <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal1"> ?</div>
                <!-- The Modal para barberos -->
                <div class="modal" id="myModal1">
                    <div class="modal-dialog modal-large">
                        <div class="modal-content letras ">

                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title"><b>Información del Barbero</b></h4>
                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-justify">
                            <h4><p>Aquí se puede encontrar los datos básicos del usuario-cliente, como su edad, género, rol y una imagen del usuario.</p></h4>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer ">
                            <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
            </b>
            </div>
            <div class="caja-interna_perfil_info letras  col-md-6 text-center sombreado" >
                <b>Edad:</b> {{ $user->fecha_nacimiento }}
            </div>
            <div class="caja-interna_perfil_info letras col-md-6 text-center sombreado" >
                <b>Género:</b> {{ $user->genero }}
            </div>
            <div class="caja-interna_perfil_info letras col-md-6 text-center sombreado" >
                <b>Rol:</b> {{ $user->role['nombre_rol'] }}
            </div>
            <div class="profile-perfil ">

                    @if($user->url_fotoPerfil == null)
                        <img src="{{ asset('images/profile.png') }}" alt=""  class="rounded-circle img-foto-perfil ">

                    @else
                        <img src="{{ asset('images/'. $user->url_fotoPerfil) }}" alt=""  class="rounded-circle img-foto-perfil ">
                    @endif
            </div>

    </div>


    <div class="">
        @if ($user->url_wallpa == null)
            <img class="foto_wallpa_cliente sombreado" src="{{ url('/images/pre-wallpa.jpg') }}" alt="Foto barbero"><br><br>
        @else
            <img class="foto_wallpa_cliente sombreado" src="{{ url('/images/'. $user->url_wallpa) }}" alt="Foto barbero"><br><br>
        @endif
    </div>










    <div class="caja letras sombreado"><br>
        <h1 class="text-center"><b>Interacción |
            <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal2"> ?</div>
            <!-- The Modal para barberos -->
            <div class="modal" id="myModal2">
                <div class="modal-dialog modal-large">
                    <div class="modal-content letras ">

                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title"><b>Interacción</b></h4>
                        <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body text-justify">
                        <h4><p>En esta sección se especifica las interacciones que el cliente tiene con los diferentes barberos.</p></h4>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer ">
                        <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                        </div>

                    </div>
                </div>
            </div>
        </b></h1><br>
        <div class="row">

            <div class="column2-perfil-cliente letras  caja" >
                <h2>Comentarios |
                    <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal3"> ?</div>
                    <!-- The Modal para barberos -->
                    <div class="modal" id="myModal3">
                        <div class="modal-dialog modal-large">
                            <div class="modal-content letras ">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title"><b>Comentarios</b></h4>
                                <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body text-justify">
                                <h4><p>Aquí se pueden encontrar los comentarios hechos por el usuario-cliente a diferentes usuarios-barberos.</p></h4>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer ">
                                <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </h2>
                @if(count($comentarios) > 0)
                    @foreach($comentarios as $comentario)
                        <div class="comentarios letras-negras sombreado" style="overflow-wrap: break-word; word-wrap: break-word; width: 100%;">
                            <b>{{ $comentario->barbero->name." ".$comentario->barbero->apellidos }} </b><br>
                            <p>{{ $comentario->comentario }}</p>
                        </div>
                    @endforeach
                @else
                    <h5 class="letras">No hay comentarios.</h5>
                @endif
            </div>
            <div class="column2-perfil-cliente letras  caja" >
                <h2>Valoraciones |
                    <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal4"> ?</div>
                    <!-- The Modal para barberos -->
                    <div class="modal" id="myModal4">
                        <div class="modal-dialog modal-large">
                            <div class="modal-content letras ">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title"><b>Valoraciones</b></h4>
                                <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body text-justify">
                                <h4><p>Aquí se pueden encontrar las valoraciones hechas por el usuario-cliente a diferentes usuarios-barberos.</p></h4>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer ">
                                <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </h2>
                @if(count($calificacion) > 0)
                    @foreach($calificacion as $calificacion)
                      <div class="comentarios letras-negras sombreado">
                          <b>{{ $comentario->barbero->name." ".$comentario->barbero->apellidos }} </b><br>
                          <div class="valoracion2">
                              @for($i = 1; $i <= 5; $i++)
                                @if($i <= $calificacion->calificacion)
                                  <i class="fas fa-star fa-2x checked"></i>
                                @else
                                  <i class="fas fa-star fa-2x"></i>
                                @endif
                              @endfor
                          </div>
                      </div>
                    @endforeach
                @else
                    <h5 class="letras">No hay calificaciones.</h5>
                @endif
            </div>

        </div>

    </div>
    <br><br>
    @include('partials.footer')
</main><!-- End #main -->

@endsection
