@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Home')



@section('content')

@include('barbero.users.partials.barra-lateral')
<main id="main">

    <div class="container">
        <img src="{{ asset('/images/Logo.jpg') }}" class="img-fluid  radio_logo sombreado " alt="Responsive image" width="1100" >
        
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


    @include('barbero.users.partials.footer')

</main><!-- End #main -->

@endsection