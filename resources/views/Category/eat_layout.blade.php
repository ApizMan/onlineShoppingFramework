<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="" />
        <!-- Bootstrap icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"/>
        <style>          
          .topnav {
            overflow: hidden;
            background-color: #333;
          }
          
          .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
          }
          
          .topnav a:hover {
            background-color: #ddd;
            color: black;
          }
          
          .topnav a.active {
            background-color: #e16c89;
            color: white;
          }
          </style>
      </head>
    <body>
      @if(session('success'))
      <div class="alert alert-primary" role="alert">
      {{session('success')}}
      </div>
    @endif
    <div class="topnav">
      @if (Auth::check())
        <a class="active" href="/dashboard"> < Back</a>
      @else
        <a class="active" href="/"> < Back</a>
      @endif
    </div>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-light text-dark">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarCenteredExample"
      aria-controls="navbarCenteredExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div
      class="collapse navbar-collapse justify-content-center"
      id="navbarCenteredExample"
    >
      <!-- Left links -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item">
          <a href="/categories/all" role="button" class="btn btn-light" >All</a>
        </li>
        <li class="nav-item">
        <a href="/categories/buffet" role="button" class="btn btn-light" >Buffet</a>
        </li>
        <li class="nav-item">
        <a href="/categories/asian" role="button" class="btn btn-light" >Asian</a>
        </li>
        <!-- Navbar dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu">
            <li><a href="/categories/japanese" role="button"class="btn btn-white" >Japanese</a></li>
            <li><a href="/categories/korean" role="button" class="btn btn-white" >Korean</a></li>
          </ul>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
        <!-- Header-->
        <header class="bg-gradient-light py-1">
            <div class="container px-1 px-lg-5 mt-3">
                <div class="text-start text-dark">
                    <span class="fw-bolder fs-6">Home</h1>
                    <span class="fw-bolder fs-6"> @yield('location')</h1>
                </div>
            </div>
        </header>
        <!-- Section-->
        @yield('content')
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>