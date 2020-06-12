<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Selabí</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

        <h1 class="logo"><a href="/">Selabí</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        <nav class="nav-menu d-none d-lg-block">

            <ul>
            <li class="active"><a href="/">Inicio</a></li>
            <li><a href="/servicios/">Servicios</a></li>
            <li><a href="/contacto/">Contactános</a></li>

            </ul>

        </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->
    <main id="main">
    <!-- Contenido Principal -->
    @yield('content')
        <!-- /Fin del contenido principal -->
    </main>
     <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Selabí</h3>
              <p>
                Av. Antogasta Nro. 1026<br>
                El Alto, BOLIVIA<br><br>
                <strong>Teléfono:</strong> +591 70628482<br>
                <strong>Email:</strong> alvarolp1@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/alvaro.selabi" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="https://api.whatsapp.com/send?phone=59170628482&text=Hola%2C%20estoy%20interesado%20en%20tus%20servicios" class="whatsapp" target="_blank"><i class="icofont-brand-whatsapp"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Enlaces Utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Nosotros</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Servicios</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nuestro Servicios</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño Web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Desarrollo de Sistemas Web</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Gestion de producto</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Diseño Grafico</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Selabí</span></strong>. Derechos Reservados
      </div>
      <div class="credits">
        Diseñado por: <a href="">Alvaro Aruquipa</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
     <!-- Vendor JS Files -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/venobox/venobox.min.js"></script>
  <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
</body>
</html>