<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">

  <title>E-visite</title>
  
  <!-- Vendor CSS Files -->
  <link href="{{ asset('E-visite/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('E-visite/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('E-visite/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('E-visite/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('E-visite/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('E-visite/assets/css/sb-admin-2.min.css')}}" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{ asset('E-visite/assets/css/main.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Yummy - v1.3.0
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
       
         <img src="{{ asset('E-visite/assets/img/logo.png')}}" alt=""> 
        <h1>nelleos<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          {{--  ajout des menus ici, pour le moment on désactive  --}}
          {{--  <li><a href="#hero">Accueil</a></li>  --}}
  
        </ul>
      </nav><!-- .navbar -->

      @yield('right')
     

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  

  <main id="main">
    <div class="row container">
      @yield('content')
    </div>
   
  </main>
  
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">

      <div class="row">
        <h4>A propos de moi </h4>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae placeat eveniet odio minus natus alias fuga modi, veniam nulla nisi ab laboriosam dolorum sit vero pariatur amet, voluptas, ad quidem.
          Aperiam praesentium quia repellendus facere enim perferendis sunt ducimus doloremque asperiores, laboriosam voluptas doloribus blanditiis officiis unde quidem dolore. Dolorum atque quisquam sint. Explicabo reiciendis excepturi enim dicta consequuntur at?
          Ea omnis quasi, iusto inventore quos minima velit, soluta quisquam architecto in modi est, similique a nobis provident optio. In velit illo quam magni doloribus consectetur. Corporis maxime iusto quasi.
        </p>
      </div>

     <div class="row">
      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Réseau Sociaux</h4>
        <div class="social-links d-flex">
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
     </div>

     <h4>Liens</h4>
     <div class="row mt-3">
      <div class="col-md-1">
        <img src="{{ asset('E-visite/assets/img/dribble.png')}}" alt="" width="50px"> 
      </div>
      <div class="col-md-11">
        <h4><u>Dribbble</u></h4>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quaerat vel earum nesciunt libero veniam, temporibus ea pariatur nemo sapiente, perferendis incidunt ipsum minus dolor excepturi cum consectetur dolore odit!Quo expedita amet deleniti consectetur, dolorem aspernatur maxime, dicta laudantium non animi neque hic. Eveniet cum ullam rerum, tempora suscipit a in aliquam culpa, aut repudiandae, iusto quibusdam fuga veritatis.
      </div>
     </div>

     <div class="row mt-3">
      <div class="col-md-1">
        <img src="{{ asset('E-visite/assets/img/slack.png')}}" alt="" width="50px"> 
      </div>
      <div class="col-md-11">
        <h4><u>Slack</u></h4>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quaerat vel earum nesciunt libero veniam, temporibus ea pariatur nemo sapiente, perferendis incidunt ipsum minus dolor excepturi cum consectetur dolore odit!Quo expedita amet deleniti consectetur, dolorem aspernatur maxime, dicta laudantium non animi neque hic. Eveniet cum ullam rerum, tempora suscipit a in aliquam culpa, aut repudiandae, iusto quibusdam fuga veritatis.
      </div>
     </div>
        

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Yummy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Karoll POFAGI</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('E-visite/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('E-visite/assets/vendoraos/aos.js') }}"></script>
  <script src="{{ asset('E-visite/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('E-visite/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('E-visite/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('E-visite/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('E-visite/assets/js/main.js') }}"></script>

</body>

</html>