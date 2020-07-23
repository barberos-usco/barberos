@extends('layouts.main-welcome')

@section('title','Index')
    
@section('content')

<section>
    
{{--@if (Route::has('login'))
    <div class="top-right links">
        @auth
            <a href="{{ url('/home') }}">Home</a>
        @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @endauth
    </div>
@endif--}}

        <div class="content">
            <div class="title m-b-md">
                 {!! Html::image('images/BarbApp.png', 'alt text', array('class' => 'imagen-logo')) !!} 
            </div>

            <div class="caja-clara container">
                <div class="row justify-content-center no-opacidad">
                                           
                    
                        
                            
            
                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <h2 class="section-title-welcome">Inicia Sesión</h2></br>
                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control redondeo sombreado @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
            
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control redondeo sombreado @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
            
                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn color-botom">
                                                {{ __('Ingresar') }}
                                            </button></br>
            
                                            <p>¿Aún no tienes cuenta?
                                            <a class="btn btn-link color-registrate " href="/register">
                                                {{ __('Regístrate') }}
                                            </a></p>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        
                    
                </div>
            </div>
        </div>
    
</section>


@endsection

