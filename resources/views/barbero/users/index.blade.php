@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Home')



@section('content')

@include('partials.barra-lateral')
<main id="main">

    <div class="container">
        <img src="{{ asset('/images/Logo.jpg') }}" class="img-fluid  radio_logo sombreado " alt="Responsive image" width="1100" >
        @if (Auth::user()->role_id === 1)
            <h3>Barberos!</h3>
        @endif
        @if (Auth::user()->role_id === 2)
            <h3>Clientes!</h3>
        @endif
        <div class="caja">
            <div class="container colum3">

                <!-- Colocar tarjetas acá -->

            </div>
        </div>

    </div>

    <section id="cards">

        @if ($users)
          @foreach ($users as $user)

          @endforeach
        @endif

    </section>
</main><!-- End #main -->
@endsection