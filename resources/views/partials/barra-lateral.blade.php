<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      @if(Auth::user()->url_fotoPerfil == null)
                        <img src="{{ asset('images/profile.png') }}" alt="" class="img-fluid rounded-circle " style="width:150px; height:150px;">
                    
                    @else
                    <img src="{{ asset('images/'.Auth::user()->url_fotoPerfil ) }}" alt="" class="img-fluid rounded-circle " style="width:150px; height:170px;">
                    @endif
      
      <h1 class="text-light"><a href="{{ route('perfil', Auth::user()->id) }}"> {{ Auth::user()->name . " " .Auth::user()->apellidos}}</a></h1>

    </div>

    <nav class="nav-menu">
      <ul>
        <li><a href="{{ route('home') }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-home"></i></span> <span>Inicio</span></a></li>
        @if(Auth::user()->role_id === 1)
          <li><a href="{{ route('barberos') }}"><span style="font-size: 1.2em; color: #463125;"><i class="  fas fa-users"></i></span> <span>Barberos</span></a></li>
        @endif
        <li><a href="{{ route('perfil', Auth::user()->id) }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-user-alt"></i></span> <span>Perfil</span></a></li>
        @if(Auth::user()->role_id === 1)
          <li><a href="{{ route('barbero.users.edit', Auth::user()->id) }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-edit"></i></span>Editar Perfil</a></li>
        @else
          <li><a href="{{ route('cliente.users.edit', Auth::user()->id) }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-edit"></i></span>Editar Perfil</a></li>
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





