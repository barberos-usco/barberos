@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Restablecer Contraseña')



@section('content')
@guest
                        @if (Route::has('register'))
                            
                        @endif
                        @else
            @include('partials.barra-lateral')
            <main id="main"> 
        
@endguest
<div class="container">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-registro ">
                <div class="card-header-registro letras sombreado"><h2>{{ __('Cambiar Contraseña') }}</h2></div>

                <div class="card-body-registro letras sombreado">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control redondeo sombreado  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn color-botom sombreado">
                                    {{ __('Enviar enlace de restablecimiento al correo') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@guest
    @if (Route::has('register'))
              
    @endif
        @include('barbero.users.partials.footer')
        </main>             
    @else
@endguest

@endsection
