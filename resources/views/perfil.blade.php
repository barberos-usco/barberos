@extends('layouts.main')
@section('title','Perfil')
@section('content')
@include('partials.barra-lateral')
<main id="main">
    <div class="container">
        @if (Auth::user()->role_id === 1 /*Barberos*/)
            @include('barbero.users.perfil')
        @endif
        @if (Auth::user()->role_id === 2 /*Clientes*/)
            @if($user->role_id == 1 /* CLientes que ven barberos*/)
                @include('barbero.users.perfil')
            @else
                @include('cliente.users.perfil' /*Cliente ve su propio perfil*/)
            @endif
        @endif
    </div>
    
</main>
@endsection
