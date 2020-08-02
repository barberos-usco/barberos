@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Perfil')



@section('content')

@include('partials.barra-lateral')
<main id="main">

    <div class="caja-oscura_perfil_info_cliente row">

            <div class="caja-interna_perfil_titulo letras text-center sombreado">
              <b>  {{ $user->name ." ". $user->apellidos }}  </b>
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
        <h1 class="text-center"><b>Interacción</b></h1><br>
        <div class="row">

            <div class="column2-perfil-cliente letras  caja" >
                <h2>Comentarios</h2>
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
                <h2>Valoraciones</h2>
                <div class="comentarios letras-negras sombreado">
                    <b>Andrés: </b><br>
                    <div class="valoracion2">
                        <i class="fas fa-star fa-2x checked"></i>
                        <i class="fas fa-star fa-2x checked"></i>
                        <i class="fas fa-star fa-2x checked"></i>
                        <i class="fas fa-star fa-2x checked"></i>
                        <i class="fas fa-star fa-2x "></i>
                    </div>
                </div>
                <div class="comentarios letras-negras sombreado">
                    <b>Camilo: </b><br>
                    <div class="valoracion2">
                        <i class="fas fa-star fa-2x checked"></i>
                        <i class="fas fa-star fa-2x checked"></i>
                        <i class="fas fa-star fa-2x checked"></i>
                        <i class="fas fa-star fa-2x checked"></i>
                        <i class="fas fa-star fa-2x "></i>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <br><br>
    @include('partials.footer')
</main><!-- End #main -->

@endsection