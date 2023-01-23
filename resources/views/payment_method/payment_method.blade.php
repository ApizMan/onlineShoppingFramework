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
    <a href="#">Payment Method</a>
    @endsection
    @section('button')
    <a href="/" class="active">< Back</a>
    @endsection
    <div class="wrapper">
        <div class="card px-4">
            <div class=" my-3">
                <p class="h8">Your Credit/Debit Card</p>
                <p class="text-muted ">This Payment Method only accept Visa or Master card only.</p>
            </div>
            @foreach ($data_card as $card)
                <div class="{{$card->CardColor}} mb-3">
                    <div class="d-flex flex-column h-100">
                        <label class="d-block">
                            <div class="d-flex position-relative">
                                <div>
                                    <img src={{$card->TypeCard}} class={{$card->CardClass}}
                                        alt="">
                                    <p class="mt-2 mb-4 text-white fw-bold">{{$card->CardHolderName}}</p>
                                </div>
                                <div class="input">
                                    <button type="button" class="btn btn-outline-light"><i class="fa fa-pen"><a href="paymentMethod/{{$card->id}}/edit" style="text-decoration: none; color:black;"> Edit</a></i></button>
                                    <button type="button" class="btn btn-outline-danger"><i class="fa fa-trash"><a href="paymentMethod/{{$card->id}}/delete" style="text-decoration: none; color:black;" onclick="return confirm('Are You Sure?')"> Delete</a></i></button>
                                </div>
                            </div>
                        </label>
                        <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                            <p>{{$card->CardNumber}}</p>
                            <p>{{$card->ExpiredDate}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

            <button type="button"  class="btn1 mb-4" data-bs-toggle="modal" data-bs-target="#addPaymentMethodModal">
                Add Card
            </button>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="addPaymentMethodModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Debit Card / Credit Card</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!--Form-->
                <form action="/paymentMethod/create" method="POST">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="debit-card card-3 mb-4">
                            <div class="d-flex flex-column h-100">
                                <label class="d-block">
                                    <div class="d-flex position-relative">
                                        <div>
                                            <input type="text" name="CardColor" value="debit-card card-3" hidden>
                                            <input type="text" id="typeCard" name="TypeCard" value="https://www.freepnglogos.com/uploads/visa-inc-logo-png-11.png" hidden>
                                            <input type="text" name="CardClass" id="cardClass" value="visa" hidden>
                                            <input id="cardHolder" name="CardHolderName" type="text" class="form-control" placeholder="Holder Name" aria-label="Holder Name" aria-describedby="addon-wrapping" required>
                                            {{-- <p class="text-white fw-bold">Sai Kumar</p> --}}
                                            <div class="input">
                                                <img id="cardImg" src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-png-transparent-svg-vector-bie-supply-0.png"
                                            alt="master" class="master" height="70" width="70">
                                            </div>
                                        </div>
                                    </div>
                                </label>
                                <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                                    <input id="Card" name="CardNumber" type="text" class="form-control" placeholder="Card Number" aria-label="Card Number" aria-describedby="addon-wrapping" style="width: 60%;" required>
                                    {{-- <p class="m-0">5540 2345 3453 2343</p> --}}
        
                                    <input name="ExpiredDate" type="month" class="form-control" placeholder="Expired Date" aria-label="Expired Date" aria-describedby="addon-wrapping" style="width: 35%;" required>
                                    {{-- <p class="m-0">05/23</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn2 btn-danger mb-4" data-bs-dismiss="modal" style="color: white;">Close</button>
                        <button type="submit" id="submit" class="btn1 btn-primary mb-4" style="color: white;">Save changes</button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var javascript_DOM_methods_are_efficient = false;

        function init() { //initial function
            document.getElementById("submit").addEventListener("click", myCard, false);
        }

        function myCard() {
            var cardImg = document.getElementById("cardImg").src;
            var cardType = document.getElementById("typeCard").value;
            var cardClass = document.getElementById("cardClass").value;


            var typeCard = cardNumber.substring(1);

            switch (cardImg) {
                case '4':
                    document.getElementById("cardImg").src = "https://www.freepnglogos.com/uploads/visa-inc-logo-png-11.png";
                    document.getElementById("typeCard").innerHTML = "https://www.freepnglogos.com/uploads/visa-inc-logo-png-11.png";
                    document.getElementById("cardClass").innerHTML = "visa";
                    break;
            
                case '5':
                    document.getElementById("cardImg").src = "https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-png-transparent-svg-vector-bie-supply-0.png";
                    document.getElementById("typeCard").innerHTML = "https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-png-transparent-svg-vector-bie-supply-0.png";
                    document.getElementById("cardClass").innerHTML = "master";
                    break;
            }
        }

        document.addEventListener( "DOMContentLoaded", init, false );
    </script>
@endsection