@extends('Purchase.purchase_layout')
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

            <div id="body-fave" class="position-absolute top-50 start-50 translate-middle">

                <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
                    <div class="rounded" style="border: 1px outset black;background-color: lightblue;text-align: center;width: 300px;height: 40px;">
                        Profile Name
                    </div>
                    <div class="rounded" style="border: 1px outset black;background-color: lightblue;text-align: center;width: 300px;height: 40px;">
                        <input name="ProfileName" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->ProfileName}}" readonly>
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
                    <div class="rounded"style="border: 1px outset black;background-color: lightblue;text-align: center;width: 300px;height: 40px;">
                        Email
                    </div>
                    <div class="rounded"style="border: 1px outset black;background-color: lightblue;text-align: center;width: 300px;height: 40px;">
                        <input name="Email" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->Email}}" readonly>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
                    <div class="rounded" style="border: 1px outset black;background-color: lightblue;text-align: center;width: 300px;height: 60px;">
                        Address
                    </div>
                    <div class="rounded" style="border: 1px outset black;background-color: lightblue;width: 300px;height: 60px;">
                        <textarea style="background-color: white;text-align:;" name="Address" disabled="disabled" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data_user->Address}}</textarea>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
                    <div class="rounded" style="border: 1px outset black;background-color: lightblue;text-align: center;width: 300px;height: 40px;">
                        Phone Number
                    </div>
                    <div class="rounded" style="border: 1px outset black;background-color: lightblue;text-align: center;width: 300px;height: 40px;">
                        <input name="ProfileName" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->PhoneNumber}}" readonly>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
                    <div class="rounded" style="border: 1px outset black;background-color: lightblue;text-align: center;width: 300px;height: 40px;">
                        Gender
                    </div>
                    <div class="rounded" style="border: 1px outset black;background-color: lightblue;text-align: center;width: 300px;height: 40px;">
                        <input name="ProfileName" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->Gender}}" readonly>
                    </div>
                </div>

                <div style="display: grid; grid-template-columns: 1fr 1fr; place-items: center;">
                    <div class="rounded" style="border: 1px outset black;background-color: lightblue;text-align: center;width: 300px;height: 40px;">
                        Birthday
                    </div>
                    <div class="rounded" style="border: 1px outset black;background-color: lightblue;text-align: center;width: 300px;height: 40px;">
                        <input name="ProfileName" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->Birthday}}" readonly>
                    </div>
                </div>

                <div style="display: flex; justify-content: center; align-items: center;">
                    
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Edit User Profile
                    </button>
                </div >

            </div>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User Profile</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            @if(session('success'))
                                <div class="alert alert-primary" role="alert">
                                    {{session('success')}}
                                </div>
                            @endif

                            <div class="row justify-content-md-center">
                                <h1>Edit User Information</h1>
                                    <form action="/profile/9/update" method="post">
                                            {!! csrf_field() !!}
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Profile Name</label>
                                                <input name="ProfileName" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->ProfileName}}">
                                            </div>
                                                    
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                <input name="Email" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->Email}}">
                                            </div>
                                                    
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                                <textarea name="Address" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$data_user->Address}}</textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
                                                <input name="PhoneNumber" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->PhoneNumber}}">
                                            </div>
                                                    
                                            <div>
                                                <label for="exampleFormControlInput1" class="form-label">Gender</label>
                                                <select name="Gender" class="form-select" aria-label="Default select example">
                                                    <option selected>Choose Gender</option>
                                                    <option value="Male" @if($data_user->Gender == 'Male') selected @endif >Male</option>
                                                    <option value="Female" @if($data_user->Gender == 'Female') selected @endif >Female</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Birthday</label>
                                                <input name="Birthday" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_user->Birthday}}">
                                            </div>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                    </form>
                            </div>
                        </div>
                    </div>
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