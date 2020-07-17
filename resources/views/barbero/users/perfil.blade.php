@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Home')



@section('content')

@include('barbero.users.partials.barra-lateral')
<main id="main">

    <div class="caja-oscura_perfil_info row">
        
            <div class="caja-interna_perfil_titulo letras text-center sombreado">
              <b>  {{ Auth::user()->name }}  </b>
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
                   <td class="tamaño">10.000 - 25.000</td>
               </tr>
               <tr>
                   <td class="tamaño">Cejas</td>
                   <td class="tamaño">10.000 - 25.000</td>
               </tr>
            </table>
            <br><br><br>
           <h2>Horarios</h2>
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
                   <td class="tamaño">10.000 - 25.000</td>
               </tr>
               <tr>
                   <td class="tamaño">Cejas</td>
                   <td class="tamaño">10.000 - 25.000</td>
               </tr>
            </table>
        
    </div>


    <div class="caja-oscura_perfil_foto_ubicacion letras sombreado">
        <img class="foto_local sombreado" src="{{ url('/images/'.$user->foto['ruta_foto']) }}" alt="Foto barbero"><br><br>
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
                    <div class="modal-footer">
                    <button type="button" class="btn color-botom-2 sombreado" data-dismiss="modal">Cerrar</button>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>




    <div class="caja-oscura_perfil_especialidad_horario letras sombreado">
        
    </div>
    <br><br>
    @include('barbero.users.partials.footer')

</main><!-- End #main -->

@endsection