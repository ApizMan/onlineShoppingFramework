<!-- <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>mainpage</title>
    </head>
    <body class="p-3 m-0 border-0 bd-example">

    <div class="d-grid gap-2 d-md-block">
        <ul class="nav justify-content-end">
            <a href="cartdata">
                <li class="nav-item" href="cartdata" role="button">
                    <button type="button" class="btn btn-outline-danger btn-lg">CART</button>
                </li>
            </a>
        </ul>
        <br>
        <form action="profile/9/view" action="get">
            <ul class="nav justify-content-end">
                <a href="profile/9/view">
                    <li class="nav-item" role="button">
                        <button type="button" class="btn btn-outline-danger btn-lg">PROFILE</button>
                    </li>
                </a>
            </ul>
        </form>
        <br>
        <ul class="nav justify-content-end">
            <a href="/paymentMethod">
                <li class="nav-item" href="/paymentMethod" role="button">
                    <button type="button" class="btn btn-outline-danger btn-lg">PAYMENT METHOD</button>
                </li>
            </a>
        </ul>
        <br>
        <ul class="nav justify-content-end">
            <a href="wishlist">
                <li class="nav-item" href="wishlist" role="button">
                    <button type="button" class="btn btn-outline-danger btn-lg">Wishlist</button>
                </li>
            </a>
        </ul>
        <br>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
    
    <script>
        var botmanWidget ={
            aboutText: 'Chating Box',
            introMessage: "Hi! I'm BotMan, Welcome to our page. What can i help you?"
        };
    </script>
  
    <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
      
</html> -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fave</title>


  <!-- Favec -->
  <link href="assets/img/fave.png" rel="icon">
  <link href="assets/img/fave.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1>Fave<span></span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="Home">Home</a></li>
          <li class="dropdown"><a href="#"><span>Category</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Eat</a></li>
              <li><a href="#">Beauty</a></li>
              <li><a href="#">Massage</a></li>
              <li><a href="#">Retail</a></li>
            </ul>
          </li>
          <li><a href="onlineShoppingFramework/profile">Profile</a></li>
          <li class="dropdown"><a href="#"><span>Payment</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="paymentMethod">Payment Method</a></li>
              <li><a href="PayHist">Purchase History</a></li>
            </ul>
          </li>
          <li><a href="onlineShoppingFramework/wishlist/{anynname}">Wishlist</a></li>
          <li><a href="">Message</a></li>
          <li><a href="onlineShoppingFramework/wishlist/{anynname}">Cart</a></li>
          <li>
            @if (Route::has('login'))
            <div>

              @auth
              <a href="{{ url('/Home') }}" class="btn-book-a-table">Log in
              </a>
              @else

              <a href="{{ route('login') }}" class="btn-book-a-table">Log in</a>
          </li>
          <li>
            @if (Route::has('register'))


            <a href="{{ route('register') }}" class="btn-book-a-table">Register</a>
          </li>
          </li>
          @endif

          @endauth
            </div>
           @endif
        </ul>

    </nav><!-- .navbar -->
    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header><!-- End Header -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
    @yield('content')
    </div>
  </section><!-- End Hero Section -->
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Kg Beruas <br>
              Pekan, Pahang - MY<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +1 800 88 2828<br>
              <strong>Email:</strong> fave@ecommerce.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sun :</strong> 24H<br>
              <strong>Maintainance Hours :</strong> 12AM - 1AM
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Fave</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>