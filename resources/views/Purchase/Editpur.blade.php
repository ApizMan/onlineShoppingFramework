
@extends('Home.layout')
@section('content')
<h1>My Orders / Tracking</h1>
                    <form action="" method="POST">
                        {{csrf_field()}}
                        <div >
                            <label  >Order ID</label>
                            <input name="id" type="text"  value="{{$purchase->id}}">
                        </div>
                        <div >
                            <label  >Delivery Estimated Time</label>
                            <input name="delivery" type="text" id="" value="{{$purchase->delivery}}">
                        </div>
                        <div >
                            <label  >Shipping By</label>
                            <input name="ship" type="text"  id="" value="{{$purchase->ship}}">
                        </div>
                        <select name="status"> 
                            <option selected>Status</option>
                            <option value="M" @if($purchase->status =='M') selected @endif>M</option>
                            <option value="F" @if($purchase->status =='F') selected @endif>F</option>
                        </select>
                        <div >
                            <label  >Tracking</label>
                            <input name="track" type="text"  id="" value="{{$purchase->track}}">
                        </div>
                        <div >
                            <label  >Total</label>
                            <input name="total" type="text"  id="" value="{{$purchase->total}}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
@endsection
