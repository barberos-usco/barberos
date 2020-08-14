<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      @if(Auth::user()->url_fotoPerfil == null)
                        <img src="{{ asset('images/profile.png') }}" alt="" class="img-fluid rounded-circle " style="width:140px; height:170px;">
                    
                    @else
                    <img src="{{ asset('images/'.Auth::user()->url_fotoPerfil ) }}" alt="" class="img-fluid rounded-circle " style="width:140px; height:170px;">
                    @endif
      
      <h1 class="text-light"><a href="{{ route('perfil', Auth::user()->id) }}"> {{ Auth::user()->name . " " .Auth::user()->apellidos}}</a> <div class="btn color-manual redondeo sombreado" data-toggle="modal" data-target="#myModal01"> ?</div>
        <!-- The Modal para barberos -->
        <div class="modal" id="myModal01">
            <div class="modal-dialog modal-large">
                <div class="modal-content letras ">

                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title"><b>Usuario</b></h4>
                    <button type="button" class="close blanco-close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body text-justify">
                      <h4><p>Ya iniciado sesión, se puede observar el nombre del mismo y la imagen de perfil.</p></h4>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer ">
                    <button type="button" class="btn color-botom-home-inline sombreado" data-dismiss="modal">Cerrar</button>
                    </div>

                </div>
            </div>
        </div></h1>

    </div>

    <nav class="nav-menu">
      <ul>
        <li><a href="{{ route('home') }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-home"></i></span> <span>Inicio</span></a>
        @if(Auth::user()->role_id == 1)
          <div class="btn color-manual-Inicio redondeo sombreado" data-toggle="modal" data-target="#myModal02"> ?</div>
          
        @else
          <div class="btn color-manual-Inicio redondeo sombreado" data-toggle="modal" data-target="#myModal002"> ?</div>
        @endif</li>
        @if(Auth::user()->role_id === 1)
          <li><a href="{{ route('barberos') }}"><span style="font-size: 1.2em; color: #463125;"><i class="  fas fa-users"></i></span> <span>Barberos</span></a>
            @if(Auth::user()->role_id == 1)
              <div class="btn color-manual-Inicio redondeo sombreado" data-toggle="modal" data-target="#myModal03"> ?</div>
            @endif
          </li>
        @endif
        <li><a href="{{ route('perfil', Auth::user()->id) }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-user-alt"></i></span> <span>Perfil</span></a>
          @if(Auth::user()->role_id == 1)
            <div class="btn color-manual-Inicio redondeo sombreado" data-toggle="modal" data-target="#myModal04"> ?</div>
            
          @else
            <div class="btn color-manual-Inicio redondeo sombreado" data-toggle="modal" data-target="#myModal004"> ?</div>
          @endif
        </li>
        @if(Auth::user()->role_id === 1)
          <li><a href="{{ route('barbero.users.edit', Auth::user()->id) }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-edit"></i></span>Editar Perfil</a>
            @if(Auth::user()->role_id == 1)
              <div class="btn color-manual-Inicio redondeo sombreado" data-toggle="modal" data-target="#myModal05"> ?</div>
            @endif
          </li>
        @else
          <li><a href="{{ route('cliente.users.edit', Auth::user()->id) }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-edit"></i></span>Editar Perfil</a>
            @if(Auth::user()->role_id == 2)
              <div class="btn color-manual-Inicio redondeo sombreado" data-toggle="modal" data-target="#myModal005"> ?</div>
            @endif
          </li>
        @endif
        
        
      </ul>
    </nav><!-- .nav-menu -->
    <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  </div>
</header><!-- End Header -->
<!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Byakoxx</span></strong>
        </div>
        <div class="credits">

          Desarrollado por:  <a href="#">Helmer Torres</a>
        </div>
      </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>





