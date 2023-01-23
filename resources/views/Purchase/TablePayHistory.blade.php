@extends('Home.layout')
@section('content')
<div class="container">
  <article class="card">
    <header class="card-header"> Purchase History </header>
    <div class="container">
      <div class="row">
        <div class="card">
            <table class="table">
              <thead>
                <tr>
                
                  <th>Order ID</th>
                  <th>Delivery Estimated Time</th>
                  <th>Shipping By</th>
                  <th>Status </th>
                  <th>Tracking </th>
                  <th>Total </th>
                  <th>Activity</th>
                </tr>
              </thead>
              <tbody>
              @foreach($purchase as $data_pur)
                <tr>
                  <td>{{ $data_pur->id }}</td>
                  <td>{{ $data_pur->delivery }}</td>
                  <td>{{ $data_pur->ship }}</td>
                  <td>{{ $data_pur->status }}</td>
                  <td>{{ $data_pur->track }}</td>
                  <td>{{ $data_pur->total }}</td>
                  <td><a href="PayHist/{{$data_pur->id}}">View</a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </article>
</div>
@endsection