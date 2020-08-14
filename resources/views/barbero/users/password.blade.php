@extends('layouts.main')
@section('title','Listar Portafolio')
@section('content')
@include('partials.barra-lateral')
<main id="main">
    <div class="container subcaja3 letras">
        <h1>Cambiar mi password | 
            <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal1"> ?</div>
            <!-- The Modal para barberos -->
            <div class="modal" id="myModal1">
                <div class="modal-dialog modal-large">
                    <div class="modal-content letras ">

                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title"><b>Cambiar mi password</b></h4>
                        <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body text-justify">
                        <h4><p>En esta vista, podremos hacer efectivo el cambio de nuestra contraseña, debe suministrar la antigua y repetir dos veces la nueva password.</p></h4>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer ">
                        <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                        </div>

                    </div>
                </div>
            </div>
        </h1>
        @if (Session::has('message'))
            <div class="text-danger">
            {{Session::get('message')}}
            </div>
        @endif
        
        <form method="post" action="{{url('/updatepassword')}}">
            {{csrf_field()}}
            <div class="form-group">
                <label for="mypassword">Introduce tu actual password:</label>
                <input type="password" name="mypassword" class="form-control redondeo">
                <div class="text-danger">{{$errors->first('mypassword')}}</div>
            </div>
            <div class="form-group">
                <label for="password">Introduce tu nuevo password:</label>
                <input type="password" name="password" class="form-control redondeo">
                <div class="text-danger">{{$errors->first('password')}}</div>
            </div>
            <div class="form-group">
                <label for="mypassword">Confirma tu nuevo password:</label>
                <input type="password" name="password_confirmation" class="form-control redondeo">
            </div>
            <button type="submit" class="btn color-botom">Cambiar mi password</button>
        </form>
    </div>
</main>
@stop