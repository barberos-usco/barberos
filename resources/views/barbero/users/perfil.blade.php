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
                                <h4><p>Aquí se puede encontrar los datos básicos del usuario-barbero, como su edad, género, rol y una imagen del usuario.</p></h4>
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
                            <h4><p>Se pueden ver las especialidades que tiene el barbero y un rango de precio.</p></h4>
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
                   <td class="tamaño">Peluquería</td>
                   <td class="tamaño">10.000 - 25.000</td>
               </tr>
               <tr>
                   <td class="tamaño">Rasurado</td>
                   <td class="tamaño">10.000 - 25.000</td>
               </tr>
               <tr>
                   <td class="tamaño">Masajes faciales</td>
                   <td class="tamaño">35.000 - 50.000</td>
               </tr>
               <tr>
                   <td class="tamaño">Cejas</td>
                   <td class="tamaño">10.000 - 25.000</td>
               </tr>
               <tr>
                   <td class="tamaño">Repolarización</td>
                   <td class="tamaño">No disponible.</td>
               </tr>
               <tr>
                   <td class="tamaño">Tratamiento Capilar</td>
                   <td class="tamaño">No disponible.</td>
               </tr>
               <tr>
                   <td class="tamaño">Depilación con Cera</td>
                   <td class="tamaño">No disponible.</td>
               </tr>
            </table>
            <br><br><br>
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
                            <h4><p>Se pueden ver los horarios que tiene el barbero.</p></h4>
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
                            <h4><p>Se da la posición más acertada del lugar de trabajo del barbero(a) por medio de Google Maps.</p></h4>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer ">
                            <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>
        </h2><br>
        <iframe class="mapa_google sombreado" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15938.151498328249!2d-75.3062321!3d2.948114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1594932655980!5m2!1ses!2sco"  allowfullscreen="" aria-hidden="true" tabindex="0"></iframe><br><br>
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
                                <h4><p>Para el usuario-barbero, sólo puede ver los comentarios hechos.</p></h4>
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
                                <h4><p>Para el usuario-cliente, puede hacer la acción de crear un nuevo comentario.</p></h4>
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
                                <h4><p>Para el usuario-barbero, sólo puede ver la valoración ya calculada.</p></h4>
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
                                    <h4><p>Para el usuario-cliente, puede hacer la acción de valorar al usuario.</p></h4>
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
                    <input id="radio1" type="radio" name="estrellas" value="5">
                    <label for="radio1"><i class="fas fa-star "></i></label>

                    <input id="radio2" type="radio" name="estrellas" value="4">
                    <label for="radio2"><i class="fas fa-star"></i></label>

                    <input id="radio3" type="radio" name="estrellas" value="3">
                    <label for="radio3"><i class="fas fa-star "></i></label>

                    <input id="radio4" type="radio" name="estrellas" value="2">
                    <label for="radio4"><i class="fas fa-star "></i></label>

                    <input id="radio5" type="radio" name="estrellas" value="1">
                    <label for="radio5"><i class="fas fa-star "></i></label>
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
                                    <h4><p>Se pueden ver las imágenes que el barbero sube en su dashboard o portafolio.</p></h4>
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
                        <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Cerrar</button>
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
                        <h4><p>EL usuario puede observar las especialidades que el barbero ha elegido, con una imagen y descripción.</p></h4>
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
            <div class="column2-perfil letras  " >
                <h3>Peluquería</h3><br>
                <img class="foto_servicio_perfil sombreado" src="{{ url('/images/Peluqueria.png') }}" alt="Peluquería"><br>
                <p class="mensaje_perfil">Me Destaco en el arte del corte masculino preguntando siempre a mi cliente qué tipo de motilado desea;
                    sugiriendo uno adecuado a su fisionomía, actitud y cantidad de cabello; tomo mi tiempo y siempre dejo
                    a mi cliente satisfecho.</p>
            </div>
            <div class="column2-perfil letras  " >
                <h3>Rasurado</h3><br>
                <img class="foto_servicio_perfil sombreado" src="{{  url('/images/Rasurado.png') }}" alt="Rasurado"><br>
                <p class="mensaje_perfil">Utilizo productos para suavizar la piel de mis clientes y la tradicional toalla con agua caliente. Diseño y corte de barba y bigote, recordando que para cada tipo de rostro hay un tipo de corte de barba y de bigote adecuado.</p>
            </div>
            <div class="column2-perfil letras  " >
                <h3>Masajes Faciales</h3><br>
                <img class="foto_servicio_perfil sombreado" src="{{  url('/images/Masaje_Facial.png')  }}" alt="Masajes Faciales"><br>
                <p class="mensaje_perfil">Si quieres disminuir los efectos de factores como la contaminación, estrés y el inevitable paso de los años, además de verse atractivos para sus momentos importantes.</p>
            </div>
            <div class="column2-perfil letras  " >
                <h3>Cejas</h3><br>
                <img class="foto_servicio_perfil sombreado" src="{{ url('/images/Ceja.png')  }}" alt="Cejas"><br>
                <p class="mensaje_perfil">Tengo gran experiencia en la depilación de cejas para hombre, con los mejores productos para que puedas lucirla correctamente, dependiendo de la forma de tu cara.</p>
            </div>
        </div>

    </div>
    <br><br>
    @include('partials.footer')
</main><!-- End #main -->

@endsection