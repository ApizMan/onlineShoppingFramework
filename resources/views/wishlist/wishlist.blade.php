@extends('Home.mainpage')
@section('content')
    @section('title_page')
    <a href="#">Wishlist</a>
    @endsection
    @section('button')
    <a href="javascript:history.back()" class="active">< Back</a>
    @endsection
  <div class="wishlist-main-content section-ptb">
  <div class="container">
    <article class="card">
        <header class="card-header"> Wishlist </header>
        <img src="/images/banner_ecommerce.jpg" alt="image" width="650" height="150">
        <div class="container">
        <div class="row">
            
    @if(session('success'))
    <div class="alert alert-primary" role="alert">
    {{session('success')}}
    </div>
        @endif
            <div class="card-body">
                <div class="card">
                    <div class="card-header">Shopping wishlist</div>
                        <a href="" class="" title="">
                            <i class="fa fa-plus" aria-hidden="true"></i></a>
                        <br/> <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th class="plantmore-product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product Name</th>
                                    <th class="plantmore-product-price">Unit Price</th>
                                    <th class="plantmore-product-stock-status">Stock Status</th>
                                    <th class="plantmore-product-add-cart">Add to cart</th>
                                    <th class="plantmore-product-remove">Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @foreach($data_wish as $wish)
                                <tr>
                                
                                              <td><img class="card-img-right" style="width: 65px" src="{{$wish->picture}}" alt="" /></td>
                                              <td>{{$wish->ItemName}}</td>
                                              <td>{{$wish->ItemPrice}}</td>
                                              <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                              <td class="plantmore-product-add-cart"><a href="/cartdata">add to cart</a></td>
                                              <td><a href="wishlist/{{$wish->id}}/delete" style="color: red;" onclick="return confirm('Confrim delete')">Delete</a></td>
                                          </tr>
                                        

                                          
                                          @endforeach
                                          
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </article>
</div> 
@endsection
