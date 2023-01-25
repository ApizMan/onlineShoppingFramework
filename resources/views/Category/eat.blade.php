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
            <a class="nav-link" href="#">All</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Buffet</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Asian</a>
          </li>
          <!-- Navbar dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">More</a>
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Japanese</a></li>
              <li><a class="dropdown-item" href="#">Korean</a></li>
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
                      <h1 class="fw-bolder fs-6">Home / Eat / All</h1>
                  </div>
              </div>
          </header>
          <!-- Section-->
          @foreach ($data_eat as $eat)
          <section class="py-1">
            <div class="container px-4 px-lg-5 mt-1">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; left: 0.5rem">{{$eat->discount}}% OFF</div>
                            <div class="badge bg-success text-white position-absolute" style="top: 2.0rem; left: 0.5rem"><i class="bi bi-star-fill"></i> {{$eat->rate}}</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="{{$eat->picture}}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-1">
                                <div class="text-start">
                                    <!-- Product name-->
                                    <p class="fw-bolder">{{$eat->name}}</p>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">RM{{$eat->pricebefore}}</span>
                                    <span class="text-danger">RM{{$eat->price}}</span>
                                    <!-- Product description-->
                                    <div class="justify-content-start small text-muted mb-2">
                                        <div class="fw-bolder">{{$eat->location}}</div>
                                        <div class="fw-normal">Available in {{$eat->numlocation}} locations</div>
                                        <div class="badge text-dark position-absolute" style="bottom: 0.5rem; right: 0.5rem">{{$eat->numbought}} bought</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
          @endforeach
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>