@extends('layouts.main')

@section('content')

<div class="container">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-registro">
                <div class="card-header-registro letras sombreado"><h2>{{ __('Resetear password') }} |
                    <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal1"> ?</div>
                    <!-- The Modal para barberos -->
                    <div class="modal" id="myModal1">
                        <div class="modal-dialog modal-large">
                        <div class="modal-content letras ">

                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title"><b>Resetear password</b></h4>
                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body text-justify">
                            <h4><p>Esta vista, sólo se puede ingresar con el enlace que llega por correo electrónico, y viene con el token del usuario, es muy seguro y se utiliza para cambiar la password.</p></h4>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer ">
                            <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                            </div>

                        </div>
                        </div>
                    </div>
                </h2>
                </div>

                <div class="card-body-registro letras sombreado">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control sombreado redondeo @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus disabled>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control sombreado redondeo @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control sombreado redondeo" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn color-botom sombreado">
                                    {{ __('Cambiar password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
