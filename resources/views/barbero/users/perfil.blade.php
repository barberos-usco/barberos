@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Perfil')



@section('content')

@include('partials.barra-lateral')
<main id="main">
    <div class="caja-oscura_perfil_info row">
            <div class="caja-interna_perfil_titulo letras text-center sombreado">
              <b>  {{ $user->name ." ". $user->apellidos }}  </b>
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
                                <h6><p>Aquí se puede encontrar los datos básicos del usuario-barbero:
                                <ul>
                                    <li>Su edad.</li>
                                    <li>Género.</li>
                                    <li>Rol en la plataforma</li>
                                    <li>Imagen del usuario.</li>
                                </ul></p></h6>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer ">
                                <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
            <div class="caja-interna_perfil_info letras  col-md-6 text-center sombreado" >
                <b>Edad:</b> {{ $user->fecha_nacimiento }}
            </div>
            <div class="caja-interna_perfil_info letras col-md-6 text-center sombreado" >
                <b>Género:</b> {{ $user->genero }}
            </div>
            <div class="caja-interna_perfil_info letras col-md-6 text-center sombreado" >
                @if( $user->genero == 'Femenino')
                    <b>Rol:</b> Barbera
                @else
                    <b>Rol:</b> {{ $user->role['nombre_rol'] }}
                @endif
            </div>
            <div class="profile-perfil ">

                    @if($user->url_fotoPerfil == null)
                        <img src="{{ asset('images/profile.png') }}" alt=""  class="rounded-circle img-foto-perfil ">

                    @else
                        <img src="{{ asset('images/'. $user->url_fotoPerfil) }}" alt=""  class="rounded-circle img-foto-perfil ">
                    @endif
            </div>

    </div>
    <div class="caja-oscura_perfil_especialidad_horario letras sombreado">
            <br>
           <h2>Especialidades |
                <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal2"> ?</div>
                <!-- The Modal para barberos -->
                <div class="modal" id="myModal2">
                    <div class="modal-dialog modal-large">
                        <div class="modal-content letras ">

                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title"><b>Especialidades</b></h4>
                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-justify">
                            <h6><p>Se pueden ver las especialidades que tiene el barbero y un rango de precio.</p></h6>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer ">
                            <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
           </h2>
           <table class="celda-larga">
             <?php $contador = 1; ?>
             @if(count($servicios) > 0)
                <?php $contador = count($servicios); ?>
               @foreach($servicios as $servicio)
                 <tr>
                   <td class="tamaño">{{ $servicio->especialidad->nombre }}</td>
                   @if($servicio->precio)
                     <td class="tamaño">($) {{ $servicio->precio }}</td>
                   @else
                     <td class="tamaño">No disponible.</td>
                   @endif
                 </tr>
               @endforeach
             @else

             <tr>
               <td class="tamaño">No hay ninguna especialidad.</td>
             </tr>
             @endif

             @for ($i = 1; $i <= (7-(int)$contador); $i++)
             <tr>
               <td class="tamaño">&nbsp;</td>
                 <td class="tamaño">&nbsp;</td>
             </tr>
            @endfor
            </table>

           <h2>Horarios |
                <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal3"> ?</div>
                <!-- The Modal para barberos -->
                <div class="modal" id="myModal3">
                    <div class="modal-dialog modal-large">
                        <div class="modal-content letras ">

                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title"><b>Horarios</b></h4>
                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-justify">
                            <h6><p>Se pueden ver los horarios que tiene el barbero.</p></h6>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer ">
                            <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
           </h2>
           <table class="celda-larga">
               <tr>
                   <td class="tamaño">Lunes</td>
                   <td class="tamaño">{{ $horarios->lunes }}</td>
               </tr>
               <tr>
                   <td class="tamaño">Martes</td>
                   <td class="tamaño">{{ $horarios->martes }}</td>
               </tr>
               <tr>
                   <td class="tamaño">Miércoles</td>
                   <td class="tamaño">{{ $horarios->miercoles }}</td>
               </tr>
               <tr>
                   <td class="tamaño">Jueves</td>
                   <td class="tamaño">{{ $horarios->jueves }}</td>
               </tr>
               <tr>
                   <td class="tamaño">Viérnes</td>
                   <td class="tamaño">{{ $horarios->viernes }}</td>
               </tr>
               <tr>
                   <td class="tamaño">Sábado</td>
                   <td class="tamaño">{{ $horarios->sabado }}</td>
               </tr>
               <tr>
                   <td class="tamaño">Domingo</td>
                   <td class="tamaño">{{ $horarios->domingo }}</td>
               </tr>
            </table>

    </div>


    <div class="caja-oscura_perfil_foto_ubicacion letras sombreado">
        @if ($user->url_wallpa == null)
            <img class="foto_local sombreado" src="{{ url('/images/local-pre.png') }}" alt="Foto barbero"><br><br>
        @else
            <img class="foto_local sombreado" src="{{ url('/images/'. $user->url_wallpa) }}" alt="Foto barbero"><br><br>
        @endif
        <h2>Ubicación |
            <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal4"> ?</div>
                <!-- The Modal para barberos -->
                <div class="modal" id="myModal4">
                    <div class="modal-dialog modal-large">
                        <div class="modal-content letras ">

                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title"><b>Ubicación</b></h4>
                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-justify">
                            <h6><p>Se da la posición más acertada del lugar de trabajo del barbero(a) por medio de Google Maps.</p></h6>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer ">
                            <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
        </h2><br>
        <iframe class="mapa_google sombreado" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=es&amp;q={{ urlencode($user->ubicacion) }}&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><br><br>
        <h2>Comentarios |
            @if(Auth::user()->role_id == 1)
                <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal5"> ?</div>
                    <!-- The Modal para barberos -->
                    <div class="modal" id="myModal5">
                        <div class="modal-dialog modal-large">
                            <div class="modal-content letras ">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title"><b>Comentarios</b></h4>
                                <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body text-justify">
                                <h6><p>Para el usuario-barbero, sólo puede ver los comentarios hechos.</p></h6>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer ">
                                <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                @else
                    <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal5"> ?</div>
                    <!-- The Modal para barberos -->
                    <div class="modal" id="myModal5">
                        <div class="modal-dialog modal-large">
                            <div class="modal-content letras ">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title"><b>Comentarios</b></h4>
                                <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body text-justify">
                                <h6><p>Para el usuario-cliente, puede hacer la acción de crear un nuevo comentario.</p></h6>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer ">
                                <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif

        </h2>
        @if(Auth::user()->role_id == 1)
            <div class="comentarios letras-negras btn sombreado" data-toggle="modal" data-target="#myModal">Click para ver los comentarios.</div>
            <!-- The Modal para barberos -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Comentarios</h4>
                        <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                          @if(count($comentarios) > 0)
                            @foreach($comentarios as $comentario)
                              <div class="comentarios letras-negras sombreado" style="overflow-wrap: break-word;word-wrap: break-word; width: 100%;">
                                <b>{{ $comentario->cliente->name." ".$comentario->cliente->apellidos }}: </b><br>
                                <p>{{ $comentario->comentario }}</p>
                              </div>
                            @endforeach
                          @else
                            <h5 class="letras">No hay comentarios.</h5>
                          @endif
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer ">
                        <button type="button" class="btn color-botom-home sombreado" data-dismiss="modal">Cerrar</button>
                        </div>

                    </div>
                </div>
            </div><br>
        @else
            <div class="comentarios letras-negras btn sombreado" data-toggle="modal" data-target="#myModal">Click para hacer un comentario.</div>
            <!-- The Modal para clientes -->
            <div class="modal" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Comentario</h4>
                        <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                        </div>

                        {!!Form::open(array('url'=>'/comentario','method'=>'POST'))!!}
                        {{Form::token()}}
                        <div class="modal-body">
                            <div class="comentarios letras-negras sombreado"><br>
                              <input type="hidden" readonly="readonly" value="{{$user->id}}" name="user_id">
                                <b>{{ Auth::user()->name }}: </b><br><br>
                                <textarea class="form-control caja-texto" maxlength="150" name="comentario"></textarea>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer ">
                        <button type="button" class="btn color-botom-home sombreado" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn color-botom-home sombreado">Guardar</button>
                        {{Form::Close()}}
                        </div>

                    </div>
                </div>
            </div><br>
        @endif

        <div><br><br>
            @if(Auth::user()->role_id == 1)
                <h2>Valoración del Barbero |
                    <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal6"> ?</div>
                    <!-- The Modal para barberos -->
                    <div class="modal" id="myModal6">
                        <div class="modal-dialog modal-large">
                            <div class="modal-content letras ">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title"><b>Valoración</b></h4>
                                <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body text-justify">
                                <h6><p>Para el usuario-barbero, sólo puede ver la valoración ya calculada.</p></h6>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer ">
                                <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </h2>
                <div class="valoracion">
                    <i class="fas fa-star fa-3x checked"></i>
                    <i class="fas fa-star fa-3x checked"></i>
                    <i class="fas fa-star fa-3x checked"></i>
                    <i class="fas fa-star fa-3x checked"></i>
                    <i class="fas fa-star fa-3x checked"></i>
                </div>
            @else
                <h2>Valoración cliente |
                    <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal6"> ?</div>
                        <!-- The Modal para barberos -->
                        <div class="modal" id="myModal6">
                            <div class="modal-dialog modal-large">
                                <div class="modal-content letras ">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title"><b>Valoración</b></h4>
                                    <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body text-justify">
                                    <h6><p>Para el usuario-cliente, puede hacer la acción de valorar al usuario.</p></h6>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer ">
                                    <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                </h2>
                <div class="valoracion">
                    <div id="puntos_1"></div>
                </div>
            @endif
        </div>

        <div class="trabajos"><br>
            <h2>Trabajos |
                <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal7"> ?</div>
                        <!-- The Modal para barberos -->
                        <div class="modal" id="myModal7">
                            <div class="modal-dialog modal-large">
                                <div class="modal-content letras ">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title"><b>Trabajos</b></h4>
                                    <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body text-justify">
                                    <h6><p>Se pueden ver las imágenes que el barbero sube en su dashboard o portafolio.</p></h6>
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer ">
                                    <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                    </div>

                                </div>
                            </div>
                        </div>
            </h2>
            <div class="comentarios letras-negras btn sombreado" data-toggle="modal" data-target="#myModa2">Click para ver los trabajos.</div>
            <!-- The Modal -->
            <div class="modal" id="myModa2">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title">Trabajos</h4>
                        <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            @if (count($portafolio) > 0)
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    @if ($portafolio)
                                        @foreach ($portafolio as $item)
                                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$sumador}}" class="{{$activo}}"></li>
                                        @endforeach
                                    @endif
                                </ol>
                                <div class="carousel-inner">
                                    @if ($portafolio)
                                        @foreach ($portafolio as $item)
                                            <div class="carousel-item {{$activo}}">
                                            <img class="d-block w-100 portfolio-image" src="{{ url('/images/'.$item->ruta_foto) }}" alt="">
                                            <div class="carousel-caption d-none d-md-block">
                                                <p>{{$item->descripcion}}</p>
                                            </div>
                                            </div>
                                            {{$activo = ''}}
                                        @endforeach
                                    @endif
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                </div>
                            @else
                                <h3 class="letras">No hay imágenes en el portafolio.</h3><br/>
                            @endif
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer ">
                        <button type="button" class="btn color-botom-trabajo sombreado" data-dismiss="modal">Cerrar</button>
                        </div>

                    </div>
                </div>
            </div><br>

        </div>




    </div>




    <div class="caja-perfil letras sombreado">
        <h2 class="text-center">Servicios por Especialidad |
            <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal8"> ?</div>
            <!-- The Modal para barberos -->
            <div class="modal" id="myModal8">
                <div class="modal-dialog modal-large">
                    <div class="modal-content letras ">

                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title"><b>Servicios por Especialidad</b></h4>
                        <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body text-justify">
                        <h6><p>EL usuario puede observar las especialidades que el barbero ha elegido, con una imagen y descripción.</p></h6>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer ">
                        <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                        </div>

                    </div>
                </div>
            </div>
        </h2><br>
        <div class="row">
          @if(count($servicios) > 0)
            @foreach($servicios as $servicio)
              <div class="column2-perfil letras">
                  <h3>{{ $servicio->especialidad->nombre }}</h3><br>
                  @if($servicio->imagen)
                    <img class="foto_servicio_perfil sombreado" src="{{ url('/images/'.$servicio->imagen) }}" alt="{{ $servicio->especialidad->nombre }}"><br>
                  @else
                    <img class="foto_servicio_perfil sombreado" src="{{ url('/images/'.$servicio->especialidad->imagen_default) }}" alt="{{ $servicio->especialidad->nombre }}"><br>
                  @endif

                  @if($servicio->descripcion)
                    <p class="mensaje_perfil">{{$servicio->descripcion}}</p>
                  @else
                    <p class="mensaje_perfil">{{$servicio->especialidad->descripcion_default}}</p>
                  @endif
              </div>
            @endforeach
          @else
            <h3>No hay ninguna especialidad.</h3>
          @endif
    </div>
    <br><br>
    @include('partials.footer')
</main><!-- End #main -->

@endsection
