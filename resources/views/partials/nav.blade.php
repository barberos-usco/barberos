<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="">
        <div class="container">


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Barra de búsqueda -->


                    <!-- Authentication Linksss -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                            </li>
                        @endif
                        @else
                            <li class="nav-item dropdown  tamaño-espacio-nav">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle comentarios-nav text-center" style="font-size: 13px;" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name . " ". Auth::user()->apellidos}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right redondeo" style="font-size: 13px;" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item redondeo" href="{{ route('barbero.users.password') }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fa fa-unlock-alt"></i></span>
                                        {{ __('Cambiar Contraseña') }}
                                    </a>

                                    <a class="dropdown-item redondeo" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-sign-out-alt"></i></span>
                                        {{ __('Cerrar Sesión') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div class="btn color-manual-nav redondeo sombreado" data-toggle="modal" data-target="#myModal0"> ?</div>
                                <!-- The Modal para barberos -->
                                <div class="modal" id="myModal0">
                                    <div class="modal-dialog modal-large">
                                        <div class="modal-content letras ">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                            <h4 class="modal-title"><b>Barra de navegación</b></h4>
                                            <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body text-justify">
                                              <p>Donde el usuario podrá hacer dos acciones:</p>
                                              <ul>
                                                <li>Podrá hacer cambio de contraseña.</li>
                                                <li>Podrá cerrar sesión.</li>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer ">
                                            <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
