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
        <table class = "table table-hover">
        <!-- Content section-->
        <section class="py-1">
            <div class="container my-1">
                <div class="row justify-content-start">
                    <div class="col-lg-6">
                        <h2>Review</h2>
                        @foreach($data_review as $review)
                        @if($review->eat_id == '1')
                        <span class="lead"><i class="bi bi-person-circle"></i> {{$review->name}}</span>
                        <span class="small mb-1 text-success"><i class="bi bi-star-fill"></i> {{$review->rate}}</span>
                        <p class="mb-0">{{$review->review}}</p>
                        <div ><a class="badge bg-success text-white my-3" href = "/categories/{{$review->id}}/edit">Edit</a>
                        <a class="badge bg-danger text-white my-3" href = "/categories/{{$review->id}}/delete">Delete</a></div>
                        @endif
                        @endforeach
                        <a href="/categories/all"><h4>Go Back</h4></a>
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