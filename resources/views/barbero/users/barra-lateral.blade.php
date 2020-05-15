
    

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>


<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header">
  <div class="d-flex flex-column">

    <div class="profile">
      <img src="{{ asset('images/profile-img.jpg') }}" alt="" class="img-fluid rounded-circle">
      <h1 class="text-light"><a href="index.html"> {{ Auth::user()->name }}</a></h1>
      
    </div>

    <nav class="nav-menu">
      <ul>
        <li><a href="{{ route('users.index') }}"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
        <li><a href="#about"><i class="bx bx-user"></i> <span>Perfil</span></a></li>
        <li><a href="{{ route('users.edit', Auth::user()->id) }}"><i class="bx bx-book-content"></i> Editar Perfil</a></li>
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
  

