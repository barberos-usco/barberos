@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Perfil')



@section('content')

@include('partials.barra-lateral')
<main id="main">

    <div class="caja-oscura_perfil_info row">

            <div class="caja-interna_perfil_titulo letras text-center sombreado">
              <b>  {{ Auth::user()->name ." ". Auth::user()->apellidos }}  </b>
            </div>
            <div class="caja-interna_perfil_info letras  col-md-6 text-center sombreado" >
                <b>Edad:</b> {{ Auth::user()->fecha_nacimiento }}
            </div>
            <div class="caja-interna_perfil_info letras col-md-6 text-center sombreado" >
                <b>Género:</b> {{ Auth::user()->genero }}
            </div>
            <div class="caja-interna_perfil_info letras col-md-6 text-center sombreado" >
                <b>Rol:</b> {{ Auth::user()->role['nombre_rol'] }}
            </div>
            <div class="profile-perfil sombreado">
                <img src="{{ asset('images/profile-img.jpg') }}" alt="" class="img-fluid-perfil rounded-circle sombreado">
            </div>

    </div>
    <div class="caja-oscura_perfil_especialidad_horario letras sombreado">
            <br>
           <h2>Especialidades</h2>
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
           <h2>Horarios</h2>
           <table class="celda-larga">
               <tr>
                   <td class="tamaño">Lunes</td>
                   <td class="tamaño">8:00 am - 5:30 pm</td>
               </tr>
               <tr>
                   <td class="tamaño">Martes</td>
                   <td class="tamaño">8:00 am - 5:30 pm</td>
               </tr>
               <tr>
                   <td class="tamaño">Miércoles</td>
                   <td class="tamaño">8:00 am - 5:30 pm</td>
               </tr>
               <tr>
                   <td class="tamaño">Jueves</td>
                   <td class="tamaño">8:00 am - 5:30 pm</td>
               </tr>
               <tr>
                   <td class="tamaño">Viérnes</td>
                   <td class="tamaño">8:00 am - 5:30 pm</td>
               </tr>
               <tr>
                   <td class="tamaño">Sábado</td>
                   <td class="tamaño">10:00 am - 3:30 pm</td>
               </tr>
               <tr>
                   <td class="tamaño">Domingo</td>
                   <td class="tamaño">1:00 pm - 4:00 pm</td>
               </tr>
            </table>

    </div>


    <div class="caja-oscura_perfil_foto_ubicacion letras sombreado">
        <img class="foto_local sombreado" src="{{ url('/images/IMG_20200210_183357.jpg') }}" alt="Foto barbero"><br><br>
        <h2>Ubicación</h2><br>
        <iframe class="mapa_google sombreado" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15938.151498328249!2d-75.3062321!3d2.948114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1594932655980!5m2!1ses!2sco"  allowfullscreen="" aria-hidden="true" tabindex="0"></iframe><br><br>
        <h2>Comentarios</h2>
        <div class="comentarios letras-negras btn sombreado" data-toggle="modal" data-target="#myModal">Click para ver los comentarios.</div>
        <!-- The Modal -->
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
                        <div class="comentarios letras-negras sombreado">
                            <b>Andrés: </b><br>
                            Me gustó el pelukeado, buen servicio.
                        </div>
                        <div class="comentarios letras-negras sombreado">
                            <b>Camilo: </b><br>
                            Un patán, me trasquiló, cero estrellas.
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer ">
                    <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div><br>

        <div><br>
            <h2>Valoración</h2>
            <div class="valoracion">
                <center>
                <!-- Estrella 1 -->
                <button>
                    <i class="fas fa-star fa-3x"></i>
                </button>

                <!-- Estrella 2 -->
                <button>
                    <i class="fas fa-star fa-3x"></i>
                </button>

                <!-- Estrella 3 -->
                <button>
                    <i class="fas fa-star fa-3x"></i>
                </button>

                <!-- Estrella 4 -->
                <button>
                    <i class="fas fa-star fa-3x"></i>
                </button>

                <!-- Estrella 5 -->
                <button>
                    <i class="fas fa-star fa-3x"></i>
                </button>
                
                </center>
            </div>
        </div>

        <div class="trabajos"><br>
            <h2>Trabajos</h2>
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
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img class="d-block w-100" src="{{ url('/images/IMG_20200210_183357.jpg') }}" alt="First slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ url('/images/IMG_20200210_183357.jpg') }}" alt="Second slide">
                                  </div>
                                  <div class="carousel-item">
                                    <img class="d-block w-100" src="{{ url('/images/IMG_20200210_183357.jpg') }}" alt="Third slide">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                            </div>
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
        <h2 class="text-center">Servicios por Especialidad</h2><br><br><br>
        <div class="row">
            <div class="column2-perfil letras  " >
                <h3>Peluquería</h3><br>
                <img class="foto_servicio_perfil sombreado" src="{{ url('/images/IMG_20200210_183357.jpg') }}" alt="Foto barbero"><br>
                <p class="mensaje_perfil">Me Destaco en el arte del corte masculino preguntando siempre a mi cliente qué tipo de motilado desea;
                    sugiriendo uno adecuado a su fisionomía, actitud y cantidad de cabello; tomo mi tiempo y siempre dejo
                    a mi cliente satisfecho.</p>
            </div>
            <div class="column2-perfil letras  " >
                <h3>Rasurado</h3><br>
                <img class="foto_servicio_perfil sombreado" src="{{  url('/images/IMG_20200210_183357.jpg') }}" alt="Foto barbero"><br>
                <p class="mensaje_perfil">Utilizo productos para suavizar la piel de mis clientes y la tradicional toalla con agua caliente. Diseño y corte de barba y bigote, recordando que para cada tipo de rostro hay un tipo de corte de barba y de bigote adecuado.</p>
            </div>
            <div class="column2-perfil letras  " >
                <h3>Masajes Faciales</h3><br>
                <img class="foto_servicio_perfil sombreado" src="{{  url('/images/IMG_20200210_183357.jpg')  }}" alt="Foto barbero"><br>
                <p class="mensaje_perfil">Si quieres disminuir los efectos de factores como la contaminación, estrés y el inevitable paso de los años, además de verse atractivos para sus momentos importantes.</p>
            </div>
            <div class="column2-perfil letras  " >
                <h3>Cejas</h3><br>
                <img class="foto_servicio_perfil sombreado" src="{{ url('/images/IMG_20200210_183357.jpg')  }}" alt="Foto barbero"><br>
                <p class="mensaje_perfil">Tengo gran experiencia en la depilación de cejas para hombre, con los mejores productos para que puedas lucirla correctamente, dependiendo de la forma de tu cara.</p>
            </div>
        </div>

    </div>
    <br><br>
</main><!-- End #main -->

@endsection