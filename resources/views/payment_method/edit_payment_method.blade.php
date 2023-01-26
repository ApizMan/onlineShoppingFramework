@extends('navigation_bar.navigation_bar_back')
@section('content')
    <head>
        <title>Payment Method</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <style>
            .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.226);
            
            }

            .hide{
                display: none;
            }
        </style>
    </head>
    @section('title_page')
    <a href="#">Edit Payment Method</a>
    @endsection
    @section('button')
    <a href="/paymentMethod" class="active">< Back</a>
    @endsection
    <div class="wrapper1">
        <div class="card px-4">
            <div class=" my-3">
                <p class="h8">Edit Your Credit/Debit Card</p>
                <p class="text-muted ">This Payment Method only accept Visa or Master card only.</p>
            </div>
            <!--Form-->
            <form action="/paymentMethod/{{$data_card->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="modal-body">
                    <div class="{{$data_card->CardColor}} mb-4">
                        <div class="d-flex flex-column h-100">
                            <label class="d-block">
                                <div class="d-flex position-relative">
                                    <div>
                                        <input id="cardHolder" value={{$data_card->CardHolderName}} name="CardHolderName" type="text" class="form-control" placeholder="Holder Name" aria-label="Holder Name" aria-describedby="addon-wrapping" required>
                                        {{-- <p class="text-white fw-bold">Sai Kumar</p> --}}
                                        <div class="input">
                                            <img class={{$data_card->CardClass}} src={{$data_card->TypeCard}}
                                        alt="master" class="master" height="70" width="70">
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                                <input id="Card" name="CardNumber" value={{$data_card->CardNumber}} type="text" class="form-control" placeholder="Card Number" aria-label="Card Number" aria-describedby="addon-wrapping" style="width: 60%;" required>
                                {{-- <p class="m-0">5540 2345 3453 2343</p> --}}

                                <input name="ExpiredDate" value={{$data_card->ExpiredDate}} type="text" class="form-control" placeholder="Expired Date" aria-label="Expired Date" aria-describedby="addon-wrapping" style="width: 35%;" required>
                                {{-- <p class="m-0">05/23</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="update" class="btn3 btn-success mb-4" style="color: white;">Update</button>
                    
                </div>
            </form>
            <button type="button" id="back" class="btn2 btn-danger mb-4" style="color: white;"><a href="/paymentMethod" style="text-decoration: none; color:white;">Back</a></button>
        </div>
    </div>
@endsection

