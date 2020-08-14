@extends('layouts.main')
@section('title','Agregar Portafolio')
@section('content')
@include('partials.barra-lateral')
<main id="main">
    <div class="container caja">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <h3 class="letras">Editar Portafolio | <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal1"> ?</div>
            <!-- The Modal para barberos -->
            <div class="modal" id="myModal1">
                <div class="modal-dialog modal-large">
                    <div class="modal-content letras ">

                        <!-- Modal Header -->
                        <div class="modal-header">
                        <h4 class="modal-title"><b>Editar Portafolio</b></h4>
                        <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body text-justify">
                          <h4><p>En esta vista, el usuario-barbero podrá editar la imágen que ha subido, el estado de ésta (activo muestra la imagen o inactivo no muestra la imagen en el portafolio) y la descripción corta menor a 200 carácteres, o si no quiere editar, dar en 'Atrás' y se sale.</p></h4>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer ">
                        <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                        </div>

                    </div>
                </div>
            </div></h3>
          @if (count($errors)>0)
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{$error}}</li>
            @endforeach
            </ul>
          </div>
          @endif
        </div>
      </div>

          {!!Form::model($portafolio,['method'=>'PATCH','route'=>['portafolio.update',$portafolio->id],'files'=>'true']) !!}
            {{Form::token()}}
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <label for="imagen" class="letras">Imagen</label>
                  <input type="file" name="imagen" class="form-control sombreado redondeo" value="{{$portafolio->ruta_foto}}">
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="estado" class="letras">Estado</label>
                    <select name="estado" class="form-control selectpicker sombreado redondeo" data-live-search="true">
                        @if($portafolio->activo === 1)
                          <option value="1">Activo</option>
                          <option value="2">Inactivo</option>
                        @else
                          <option value="2">Inactivo</option>
                          <option value="1">Activo</option>
                        @endif
                    </select>
                </div>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label for="descripcion" class="letras">Descripción</label>
                  <input type="text" name="descripcion" maxlength="40" value="{{$portafolio->descripcion}}" class="form-control sombreado redondeo" placeholder="Descripción...">
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group">
                  <button class="btn color-botom" type="submit">Guardar</button>
                  <button class="btn color-botom" type="reset">Limpiar</button>
                  <a href="{{ redirect('HomeController@index')}}"><button class="btn color-botom">Atrás</button></a>
                </div>
              </div>

            </div>
      {!!Form::close()!!}

    </div>
</main>
@endsection
