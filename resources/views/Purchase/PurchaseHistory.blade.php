@extends('Home.layout')
@section('content')
<div class="container">
    <article class="card">
        <header class="card-header"> My Orders / Tracking </header>
        <div class="card-body">
            <form action="/update/{{$purchase->id}}" method="POST">
                {{csrf_field()}}
                <h6>Order ID:<input name="delivery" type="text" class="form-control" id="" value="{{ $purchase->id }}" readonly>  </h6>
                <article class="card">
                    <div class="card-body row">
                        <div class="col"> <strong>Estimated Delivery time:</strong> <br><input name="delivery" type="text" class="form-control" id="" value="{{ $purchase->delivery }}" readonly> </div>
                        <div class="col"> <strong>Shipping By:</strong> <br><input name="ship" type="text" class="form-control" id="" value="{{$purchase->ship}}" readonly></div>
                        <div class="col">

                            <strong>Status</strong> <br>
                            <select name="status">
                                <option selected>{{ $purchase->status }}</option>
                                <option value="Delivered" @if($purchase->status =='Delivered') selected @endif>Delivered</option>
                                <option value="Pending" @if($purchase->status =='Pending') selected @endif>Pending</option>
                                <option value="Order Confirmed" @if($purchase->status =='Order Confirmed') selected @endif>Order Confirmed</option>
                                <option value="Picked by the courier" @if($purchase->status =='>Picked by the courier') selected @endif>Picked by the courier</option>
                            </select>
                            <br>
                            <br>
                            <button class="btn btn-warning" type="submit">Update</button>

                        </div>
                        <div class="col"> <strong>Tracking #:</strong> <br><input name="track" type="text" class="form-control" id="" value="{{ $purchase->track }}" readonly></div>
                        <div class="col"> <strong>Total (RM):</strong> <br><input name="total" type="text" class="form-control" id="" value="{{ $purchase->total }}" readonly></div>
                    </div>
                </article>
                <br>
                <a href="PayHist" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back</a>
            </form>
        </div>
    </article>
</div>
@endsection