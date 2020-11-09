@extends('layouts.admin')

@section('content')

<section>
  <h2>Order Details: #{{$order->id}}</h2>
  <a href="/admin/order" class="button primary small">Go back</a>
  <hr>
  <h2>Customer Name: {{$order->name}}</h2>
  <h3>Customer Phone No.: {{$order->phone}}</h3>
  <h3>Customer Email: {{$order->email}}</h3>
  <h3>Total Amount: {{$order->total}}</h3>
  <h3>Order Time: {{$order->created_at}}</h3>
  <hr>
  <h3>Customer Area: {{$order->area}}</h3>
  <h3>Customer Address: {{$order->address}}</h3>

  <h2>Your Product</h2>
  <div class="col-6 col-12-medium">

        <div class="table-wrapper">
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Amount</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>
              @foreach($order->cart as $cart)
              <tr>
                <td>{{$cart->product->title}}</td>
                <td>{{$cart->product->price}}</td>
                <td>{{$cart->amount}}</td>
                <td>{{$cart->product->price * $cart->amount}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>
</section>

@endsection