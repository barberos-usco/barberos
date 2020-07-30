@extends('layouts.main')
@section('title','Listar Portafolio')
@section('content')
@include('partials.barra-lateral')
<main id="main">
    <div class="container subcaja3 letras">
        <h1>Cambiar mi password</h1>
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