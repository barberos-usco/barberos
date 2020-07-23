<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="{{ asset('images/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="{{ route('barbero.users.index') }}"> {{ Auth::user()->name }}</a></h1>
      
    </div>

    <nav class="nav-menu">
      <ul>
        <li><a href="{{ route('home') }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-home"></i></span> <span>Inicio</span></a></li>
        
        <li><a href="{{ route('perfil') }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-user-alt"></i></span> <span>Perfil</span></a></li>
        <li><a href="{{ route('barbero.users.edit', Auth::user()->id) }}"><span style="font-size: 1.2em; color: #463125;"><i class="	fas fa-edit"></i></span>Editar Perfil</a></li>
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

    



