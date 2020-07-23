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
            @include('cliente.users.perfil')
        @endif
    </div>
</main>
@endsection
