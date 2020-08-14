@extends('layouts.main')

{{-- @include('barbero.users.barra-lateral') --}}
@section('title','Iniciar Sesión')



@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-registro ">
                <div class="card-header-registro letras sombreado"><h2>{{ __('Iniciar Sesión') }}
                    <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal1"> ?</div>
                    <!-- The Modal para barberos -->
                    <div class="modal" id="myModal1">
                        <div class="modal-dialog modal-large">
                            <div class="modal-content letras ">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title"><b>Iniciar Sesión</b></h4>
                                <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body text-justify">
                                <h4><p>Esta es la segunda vista, más sobria, para iniciar sesión, tiene los mismos campos.</p></h4>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer ">
                                <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </h2></div>

                <div class="card-body-registro letras sombreado">
                    <form method="POST" action="{{ route('login') }}">
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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control redondeo sombreado  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar mi cuenta') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn color-botom sombreado">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn " href="{{ route('password.request') }}">
                                        {{ __('Olvidé mi contrseña') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
