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
    <form action="/categories/{{$data_review->id}}/update" method="POST">
        {{csrf_field()}}
  <div class="form-group my-5 px-5">
    <label for="exampleFormControlInput1" class="form-label">Name</label>
    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_review->name}}">
  </div>
  <div class="form-group my-5 px-5">
    <label for="exampleFormControlInput1" class="form-label">Rate</label>
    <input name="rate"type="text" class="form-control" id="exampleFormControlInput2" value="{{$data_review->rate}}">
  </div>


    <div class="form-group my-5 px-5">
        <label for="exampleFormControlTextarea1">Address </label>
        <textarea name="Address"class="form-control" id="exampleFormControlTextarea3" rows="3">{{$data_review->review}}</textarea>
        <button type="submit" class="btn btn-primary my-5 px-5">Update</button>
    </div>
    </form>
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