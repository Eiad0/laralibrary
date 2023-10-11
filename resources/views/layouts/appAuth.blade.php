<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- Favicons -->
 <link href="as/img/favicon.png" rel="icon">
 <link href="as/img/apple-touch-icon.png" rel="apple-touch-icon">

 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

 <!-- Vendor CSS Files -->
 <link href="as/vendor/animate.css/animate.min.css" rel="stylesheet">
 <link href="as/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="as/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
 <link href="as/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
 <link href="as/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
 <link href="as/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

 <!-- Template Main CSS File -->
 <link href="as/css/style.css" rel="stylesheet">
    </head>
    <body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center" style="margin-bottom: 50px">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="{{ route('home') }}">Library</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="as/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="active" href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('home') }}">About</a></li>
          {{-- <li><a href="{{ route('showBooks') }}">Books</a></li> --}}
          <li><a href="{{ route('home') }}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
  @yield('content')
</main><!-- End #main -->
</html>
