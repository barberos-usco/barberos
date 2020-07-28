@extends('layouts.main')
@section('title','Editar')
@section('content')
@include('partials.barra-lateral')
<main id="main">
    <div class="container">
        @if (Auth::user()->role_id === 1 /*Barberos*/)
            @include('barbero.users.edit')
        @endif
        @if (Auth::user()->role_id === 2 /*Clientes*/)
            @include('cliente.users.edit')
        @endif
    </div>
</main>
@endsection
