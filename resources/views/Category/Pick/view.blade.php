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
    </head>
    <body>
        <!-- Product section-->
        <section class="py-3">
            <div class="container px-4 px-lg-5 my-3">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{$data_eat->picture}}" alt="..." /></div>
                    <div class="col-md-6">
                        <span class="small mb-1 text-success"><i class="bi bi-star-fill"></i> {{$data_eat->rate}}</span>
                        <span class="badge text-dark">{{$data_eat->numbought}} bought</span>
                        <h3 class="display-5 fw-bolder">{{$data_eat->name}}</h3>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration-line-through"><span>RM{{$data_eat->pricebefore}}</span></span>
                            <span>RM{{$data_eat->price}}</span>
                            <span class="badge bg-danger text-white">{{$data_eat->discount}}% OFF</span>
                        </div>
                        <ul class="list-unstyled">
                        <li>Fine print:
                            <ul>
                            <li>Valid at {{$data_eat->location}}</li>
                            <li>{{$data_eat->details}}</li>
                            <li>Valid for {{$data_eat->dine}}</li>
                            </ul>
                        </li>
                        <li>Not valid with other offers / promotions / discounts.</li>
                        </ul>
                        <div class="d-flex">
                            <button class="btn btn-outline-dark bg-danger text-white flex-shrink-0 my-2" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                BUY NOW
                            </button>
                        </div>
                        <div class="d-flex">
                            <button class="btn btn-outline-dark bg-white text-dark flex-shrink-0" type="button">
                            <i class="bi bi-bookmark-heart"></i>
                                WISHLIST
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <table class = "table table-hover">
        <!-- Content section-->
        <section class="py-1">
            <div class="container my-1">
                <div class="row justify-content-start">
                    <div class="col-lg-6">
                    <a href="/categories/review"><h2>See Review</h2></a>
                    </div>
                </div>
            </div>
        </section>

        </table>
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
