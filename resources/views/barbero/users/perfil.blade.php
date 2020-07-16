@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Home')



@section('content')

@include('barbero.users.partials.barra-lateral')
<main id="main">

    <div class="caja-oscura_perfil_info row">
        
            <div class="caja-interna_perfil_titulo letras text-center">
              <b>  {{ Auth::user()->name }}  </b>
            </div>
            <div class="caja-interna_perfil_info letras  col-md-6 text-center" >
                <b>Edad:</b> {{ Auth::user()->fecha_nacimiento }}
            </div>
            <div class="caja-interna_perfil_info letras col-md-6 text-center" >
                <b>Género:</b> {{ Auth::user()->genero }}
            </div>
            <div class="caja-interna_perfil_info letras col-md-6 text-center" >
                <b>Rol:</b> {{ Auth::user()->role['nombre_rol'] }}
            </div>
            <div class="profile-perfil">
                <img src="{{ asset('images/profile-img.jpg') }}" alt="" class="img-fluid-perfil rounded-circle">
            </div>
        
    </div>
    <div class="caja-oscura_perfil_especialidad_horario letras">
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









    <iframe class="mapa_google" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15938.151498328249!2d-75.3062321!3d2.948114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1594932655980!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
    
    
    @include('barbero.users.partials.footer')

</main><!-- End #main -->

@endsection