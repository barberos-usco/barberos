@extends('layouts.main')
@section('title','Listar Portafolio')
@section('content')
@include('partials.barra-lateral')
<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
              <h3 class="letras">Portafolio |  <a href=""><button class="btn color-botom">Agregar</button></a></h3>
            </div>
          </div><br/>

          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-condensed table-hover">
                  <thead>
                    <th class="letras" style="text-align:center;">Imagen</th>
                    <th class="letras">Descripción</th>
                    <th class="letras" style="text-align:center;">Estado</th>
                    <th class="letras">Opciones</th>
                  </thead>
                  @foreach($portafolio as $item)
                  <tr>
                    <td>
                        <div align="center">
                          <img src="{{url('/images/'.$item->ruta_foto)}}" height="100px" width="100px" class="img-thumbnail">
                        </div>
                    </td>
                    <td class="letras">{{ $item->descripcion }}</td>
                    @if($item->activo == '1')
                    <td>
                        <div align="center">
                          <img src="{{url('img/activo.png')}}" alt="Activo" title="Activo">
                        </div>
                    </td>
                    @else
                    <td>
                        <div align="center">
                          <img src="{{url('img/inactivo.png')}}" alt="Inactivo" title="Inactivo">
                        </div>
                    </td>
                    @endif
                    <td>
                      <a href=""><button class="btn color-botom-home">Editar</button></a>
                      <div class="letras btn color-botom sombreado" data-toggle="modal" data-target="#myModa2">Eliminar</div>
                      <!-- The Modal -->
                      <div class="modal" id="myModa2">
                        <div class="modal-dialog letras">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title">Eliminar</h4>
                                <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                  ¿Seguro que desea eliminar esta imagen?
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer ">
                                <button type="button" class="btn color-botom-home sombreado" data-dismiss="modal">Cerrar</button>
                                <a href="" data-target="#modal-delete-{{$item->id}}" data-toggle="modal"><button class="btn color-botom-home">Eliminar</button></a>
                                </div>

                            </div>
                        </div>
                      </div><br>
                    </td>
                  </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
    </div>
</main>
@endsection



            
