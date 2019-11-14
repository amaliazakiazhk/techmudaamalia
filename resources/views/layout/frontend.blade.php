<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="Icon" type="img/png" href="{{ asset('/bootstrap')}}/img/daun.png">
  <title>CLOVERLEAF</title>

  <!-- Custom fonts for this theme -->
  <link href="{{ asset('bootstrap')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="{{ asset('bootstrap')}}/css/freelancer.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">CLOVERLEAF <sup>  <img src="{{ asset('/bootstrap')}}/img/daun.png" height="35" width="35"></sup></a>
     
      
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/">HOME</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/front/program">PROGRAM</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/tentang">TENTANG</a>

              <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/front"> DONATUR</a>
        
            <li><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/auths/login">{{ __('Login') }}</a>
          </li>

         @if(Auth::check() && Auth::user()->role === 'member')
           <li><a href="/logout" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
           <br>
           
           &nbsp

           <br>
           <p> <font color="white" size="2" align="left">Selamat Datang &nbsp{{auth()->user()->name}}</font></p>
           
         @endif
         
        </ul>

           
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-5" src="{{ asset('bootstrap')}}/img/clover.png" alt="">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase mb-0">Ayo Mulai Kebaikan!</h1>

      <!-- Icon Divider -->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">Spread Hope - Spread Love  </p>

    </div>
  </header>

  <!-- Portfolio Section -->
  <!-- About Section -->
  <!-- Contact Section -->

     
      <!-- Contact Section Form -->
     
     @yield('content')

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Our Friend</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
           <img src="{{ asset('/bootstrap')}}/img/plan.png">
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <img src="{{ asset('/bootstrap')}}/img/kerja.png">
         
          </a>
           <a class="btn btn-outline-light btn-social mx-1" href="#">
            <img src="{{ asset('/bootstrap')}}/img/max.png">
         
          </a>
           <a class="btn btn-outline-light btn-social mx-1" href="#">
            <img src="{{ asset('/bootstrap')}}/img/stt.png">
         
          </a>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Let's Be Heroes</h4>
          <a class="btn btn-outline-light btn-social mx-1" href="#">
            <i class="fab fa-fw fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social mx-1" href="https://api.whatsapp.com/send?phone=088213057592&text=Halo%20Admin%20Saya%20Mau%20Jadi%20Pahlawan%20CloverLeaf">
            <i class="fab fa-fw fa-whatsapp"></i>
          </a>
           <a class="btn btn-outline-light btn-social mx-1" href=" https://www.instagram.com/cloverleafdotcom/">
            <i class="fab fa-fw fa-instagram"></i>
          </a>
         
        </div>

        <!-- Footer About Text -->
        <div class="col-lg-4">
          <h4 class="text-uppercase mb-4">CloverLeaf</h4>
          <p class="lead mb-0"> 'Four-Leaf Clover : Love And Magic ' 
            <br>Mulai Kebaikan Sekarang</p>
        </div>

      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>
        <img src="{{ asset('/bootstrap')}}/img/fff.png" width="90" height="90">

        &copy; 2019
      </small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('bootstrap')}}/vendor/jquery/jquery.min.js"></script>
  <script src="{{ asset('bootstrap')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('bootstrap')}}/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="{{ asset('bootstrap')}}/js/jqBootstrapValidation.js"></script>
  <script src="{{ asset('bootstrap')}}/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('bootstrap')}}/js/freelancer.min.js"></script>

</body>

</html>