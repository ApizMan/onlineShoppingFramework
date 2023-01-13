@extends('navigation_bar.navigation_bar_back')
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
        <img src="/images/banner_ecommerce.jpg" alt="image" width="700" height="150">
        <div class="container">
        <div class="row">
            
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
                                              <td class="plantmore-product-thumbnail"><a href="#"><img src="assets/images/other/cart-03.jpg" alt=""></a></td>
                                              <td>{{$wish->ItemName}}</td>
                                              <td>{{$wish->ItemPrice}}</td>
                                              <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                              <td class="plantmore-product-add-cart"><a href="/cartdata">add to cart</a></td>
                                              <td class="plantmore-product-remove"><a href="#"><i class="zmdi zmdi-close"></i></a></td>
                                          </tr>
                                          <tr>
                                              <td class="plantmore-product-thumbnail"><a href="#"><img src="assets/images/other/cart-03.jpg" alt=""></a></td>
                                              <td>{{$wish->ItemName}}</td>
                                              <td>{{$wish->ItemPrice}}</td>
                                              <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                              <td class="plantmore-product-add-cart"><a href="/cartdata">add to cart</a></td>
                                              <td class="plantmore-product-remove"><a href="#"><i class="zmdi zmdi-close"></i></a></td>
                                          </tr>
                                          <tr>
                                              <td class="plantmore-product-thumbnail"><a href="#"><img src="assets/images/other/cart-03.jpg" alt=""></a></td>
                                              <td>{{$wish->ItemName}}</td>
                                              <td>{{$wish->ItemPrice}}</td>
                                              <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                              <td class="plantmore-product-add-cart"><a href="/cartdata">add to cart</a></td>
                                              <td class="plantmore-product-remove"><a href="#"><i class="zmdi zmdi-close"></i></a></td>
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
