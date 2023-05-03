@extends('navigation_bar.navigation_bar_back')
@section('content')
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <title>User Profile</title>
        <style>            
            .vertical-center {
              margin: 0;
              position: absolute;
              top: 20%;
              -ms-transform: translateY(-50%);
              transform: translateY(-50%);
            }

            body {
                background-color: rgb(230, 180, 195);
                margin: 0;
                font-family: Arial, Helvetica, sans-serif;
            }

            .container{
                min-height: 70vh;
                margin-block: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: white;
                padding: 10px 20px;
            }

            .roundedTitle{
                background-color: rgb(230, 180, 195);
            }

            .roundedDetail{
                background-color: rgb(224, 198, 206);
            }
            </style>
    </head>
    @section('title_page')
        <a href="#">User Profile</a>
    @endsection

    <div class="container-fluid" style="background-color: white;">
        <div style="margin: auto; font-size: xx-large">
            
        </div>
    </div>
    

    <div class="vertical-center" style="background-color: white;">
        <a href="">
            <button type="button" class="btn btn-primary btn-lg">Edit User Profile</button>
        </a>
    </div>

    <div id="body-fave" class="position-absolute top-50 start-50 translate-middle" style="background-color: white;">

        <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
            <div class="roundedTitle" style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                Profile Name
            </div>
            <div class="roundedDetail" style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                unknow
            </div>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
            <div class="roundedTitle"style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                Email
            </div>
            <div class="roundedDetail"style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                unknow
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
            <div class="roundedTitle" style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                Address
            </div>
            <div class="roundedDetail" style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                unknow
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
            <div class="roundedTitle" style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                Phone Number
            </div>
            <div class="roundedDetail" style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                unknow
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
            <div class="roundedTitle" style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                Gender
            </div>
            <div class="roundedDetail" style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                unknow
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
            <div class="roundedTitle" style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                Birthday
            </div>
            <div class="roundedDetail" style="border: 1px outset black;text-align: center;width: 300px;height: 40px;">
                unknow
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

@endsection