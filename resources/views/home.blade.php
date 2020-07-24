@extends('layouts.main')
@section('title','Home')
@section('content')
@include('partials.barra-lateral')
<main id="main">
    <div class="container">
        @if (Auth::user()->role_id === 1 /*Barberos*/)
            @if($ocultarDashboard)
                @include('cliente.dashboard')
            @else
                @include('barbero.dashboard')
            @endif
        @endif
        @if (Auth::user()->role_id === 2 /*Clientes*/)
            @include('cliente.dashboard')
        @endif
    </div>
</main>
@endsection
