<img src="{{ asset('/images/Logo.jpg') }}" class="img-fluid  radio_logo sombreado " alt="Responsive image" width="1100" >
<div class="caja">
    

        {!! Form::open(array('url'=>(Auth::user()->role_id === 1) ? 'barberos' : 'home','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
            <div class="form-inline buscador">
                <input class="form-control mr-sm-2 redondeo alargar_buscador" type="search" placeholder="Buscar" aria-label="Search" name="buscar" value="{{$buscar}}">
                <button class="btn color-botom-2 my-2 my-sm-0 redondeo letras" type="submit">Buscar</button>
                <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal1"> ?</div>
                    <!-- The Modal para barberos -->
                    <div class="modal" id="myModal1">
                        <div class="modal-dialog modal-large">
                            <div class="modal-content letras ">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                <h4 class="modal-title"><b>Buscador</b></h4>
                                <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body text-justify">
                                <h4><p>Buscador de barberos, nombre o apellido.</p></h4>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer ">
                                <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>
            </div>
        {{Form::close()}}
        <div class="btn color-manual-barberos redondeo sombreado" data-toggle="modal" data-target="#myModal2"> ?</div>
    <!-- The Modal para barberos -->
    <div class="modal" id="myModal2">
        <div class="modal-dialog modal-large">
            <div class="modal-content letras ">

                <!-- Modal Header -->
                <div class="modal-header">
                <h4 class="modal-title"><b>Barberos</b></h4>
                <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body text-justify">
                <h4><p>Lista de todos los barberos registrados, con foto, nombre, valoración de este y un botón para ver el perfil.</p></h4>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer ">
                <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                </div>

            </div>
        </div>
    </div>





        <div class="row">
                @if ($users)
                    @foreach ($users as $user)

                        <div class="card-home column4" style="">
                            @if ($user->url_fotoPerfil == null) 
                                <img src="{{ asset('images/profile.png') }}" class="img-fluid  radio_logo sombreado tamaño-home "  > 
                            @else
                                <img src="{{ asset('images/'. $user->url_fotoPerfil) }}" class="img-fluid  radio_logo sombreado tamaño-home "  >
                            @endif
                            
                            <div class="card-body">
                                <h5 class="card-title text-center" style="color: #352c23;"><b>{{ $user->name ." " . $user->apellidos  }}</b></h5>
                                <div class="border-top my-3"></div>
                                <p class="card-text"> <div class="valoracion2">

                                    <!-- La idea es porner un foreach para que se haga las estrellas que tenga en la valoracion ;) -->

                                    <!-- Estrella 1 -->

                                        <i class="fas fa-star checked"></i>


                                    <!-- Estrella 2 -->

                                        <i class="fas fa-star checked"></i>


                                    <!-- Estrella 3 -->

                                        <i class="fas fa-star checked"></i>


                                    <!-- Estrella 4 -->

                                        <i class="fas fa-star checked"></i>


                                    <!-- Estrella 5 -->

                                        <i class="fas fa-star "></i>



                                </div></p>
                            </div>
                            <div class="card-footer-home">
                                <a href="{{ route('perfil', $user->id) }}" class="btn color-botom-home text-center" >Perfil</a>
                            </div>
                        </div>
                    @endforeach
                @endif
        </div>
        @if(count($users)<= 0 && $buscar != '')
            <h3 style="color: #900">No existen coincidencias para '{{$buscar}}'</h3>
        @endif
        @if(count($users)<= 0 && $buscar == '')
            <h3 style="color: #900">No hay registros</h3>
        @endif
        
</div>
