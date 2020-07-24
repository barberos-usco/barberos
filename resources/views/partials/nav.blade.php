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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle comentarios-nav" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right redondeo" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item redondeo" href="{{ route('password.update') }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fa fa-unlock-alt"></i></span>
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
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>