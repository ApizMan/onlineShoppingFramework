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
    </style>
</head>
<div class="wrapper">
    <div class="card px-4">
        <div class=" my-3">
            <p class="h8">Card number</p>
            <p class="text-muted ">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>

        <div class="debit-card mb-3">
            <div class="d-flex flex-column h-100">
                <label class="d-block">
                    <div class="d-flex position-relative">
                        <div>
                            <img src="https://www.freepnglogos.com/uploads/visa-inc-logo-png-11.png" class="visa"
                                alt="">
                            <p class="mt-2 mb-4 text-white fw-bold">Sai Kumar</p>
                        </div>
                        <div class="input">
                            <input type="radio" name="card" id="check">
                        </div>
                    </div>
                </label>
                <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                    <p>4989 1237 1234 4532</p>
                    <p>01/24</p>
                </div>
            </div>
        </div>
        <div class="debit-card card-2 mb-4">
            <div class="d-flex flex-column h-100">
                <label class="d-block">
                    <div class="d-flex position-relative">
                        <div>
                            <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-png-transparent-svg-vector-bie-supply-0.png"
                                alt="master" class="master">
                            <p class="text-white fw-bold">Sai Kumar</p>
                        </div>
                        <div class="input">
                            <input type="radio" name="card" id="check">
                        </div>
                    </div>
                </label>
                <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                    <p class="m-0">5540 2345 3453 2343</p>
                    <p class="m-0">05/23</p>
                </div>
            </div>
        </div>
        <button type="button"  class="btn mb-4" data-bs-toggle="modal" data-bs-target="#addPaymentMethodModal">
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
            <div class="modal-body">
                <div class="debit-card card-3 mb-4">
                    <div class="d-flex flex-column h-100">
                        <label class="d-block">
                            <div class="d-flex position-relative">
                                <div>
                                    <input type="text" class="form-control" placeholder="Card Holder" aria-label="Card Holder" aria-describedby="addon-wrapping">
                                    {{-- <p class="text-white fw-bold">Sai Kumar</p> --}}
                                    <div class="input">
                                        <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-png-transparent-svg-vector-bie-supply-0.png"
                                    alt="master" class="master" height="70" width="70">
                                    </div>
                                </div>
                            </div>
                        </label>
                        <div class="mt-auto fw-bold d-flex align-items-center justify-content-between">
                            <input type="text" class="form-control" placeholder="Card Number" aria-label="Card Number" aria-describedby="addon-wrapping" style="width: 70%;">
                            {{-- <p class="m-0">5540 2345 3453 2343</p> --}}

                            <input type="text" class="form-control" placeholder="Expired Date" aria-label="Expired Date" aria-describedby="addon-wrapping" style="width: 20%;">
                            {{-- <p class="m-0">05/23</p> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn mb-4" data-bs-dismiss="modal" style="color: red;">Close</button>
            <button type="button" class="btn mb-4" >Save changes</button>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection