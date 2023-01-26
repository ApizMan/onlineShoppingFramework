@extends('category.eat_layout')
@section('location')
/ Asian
@endsection
@section('content')
    <!-- Section-->
    <section class="py-1">
      <div class="container px-4 px-lg-5 mt-1">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
          @foreach($data_eat as $eat)
          @if($eat->category == 'Asian')
              <div class="col mb-5">
                  <div class="card h-100">
                      <!-- Sale badge-->
                      <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; left: 0.5rem">{{$eat->discount}}% OFF</div>
                      <div class="badge bg-success text-white position-absolute" style="top: 2.0rem; left: 0.5rem"><i class="bi bi-star-fill"></i> {{$eat->rate}}</div>
                      <!-- Product image-->
                      <a href="/categories/{{$eat->id}}/view"><img class="card-img-top" src="{{$eat->picture}}" alt="..." /></a>
                      <!-- Product details-->
                      <div class="card-body p-1">
                          <div class="text-start">
                              <!-- Product name-->
                              <p class="fw-bolder">{{$eat->name}}</p>
                              <!-- Product price-->
                              <span class="text-muted text-decoration-line-through">RM{{$eat->pricebefore}}</span>
                              <span class="text-danger">RM{{$eat->price}}</span>
                              <!-- Product description-->
                              <div class="justify-content-start small text-muted mb-2">
                                  <div class="fw-bolder">{{$eat->location}}</div>
                                  <div class="fw-normal">Available in {{$eat->numlocation}} locations</div>
                                  <div class="badge text-dark position-absolute" style="bottom: 0.5rem; right: 0.5rem">{{$eat->numbought}} bought</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              @endif
              @endforeach
          </div>
      </div>
  </section>
@endsection