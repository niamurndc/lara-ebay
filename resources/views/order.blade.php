@extends('layouts.front')

@section('content')


 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
   <h2>Your Orders</h2> <a href="/" class="btn btn-danger">Go Home</a>
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Products</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $total = 0; ?>
                      @foreach($orders as $order)
                      <tr>
                        <td>{{$order->created_at}}</td>
                        <td>{{$order->name}}</td>
                        <td>{{$order->phone}}</td>
                        <td>@foreach($order->cart as $cart) <b>{{$cart->product->title}} x {{$cart->amount}} = {{$cart->product->price * $cart->amount}}</b> @endforeach</td>
                        <td>{{$order->total}}</td>
                        <td>{{$order->status}}</td>
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
   </div>
 </section>
 <!-- / Cart view section -->

@endsection