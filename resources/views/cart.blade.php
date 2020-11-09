@extends('layouts.front')

@section('content')


 <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
   <h2>Your Cart</h2> <a href="/" class="btn btn-danger">Go Home</a>
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Image</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $total = 0; ?>
                      @foreach($carts as $cart)
                      <tr>
                        <td><a href="#"><img height="100px" width="100px" src="/image/{{$cart->product->image}}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">{{$cart->product->title}}</a></td>
                        <td>{{$cart->product->price}}</td>
                        <td>
                          <form action="/cart/edit/{{$cart->id}}" method="POST">
                            @csrf
                            <input class="aa-cart-quantity" type="number" name="amount" value="{{$cart->amount}}">
                            <button class="button danger" type="submit">Update</button>
                          </form>
                        </td>
                        <td>{{$cart->product->price * $cart->amount}}</td>
                        <td><a class="remove" href="/cart/delete/{{$cart->id}}"><fa class="fa fa-close"></fa></a></td>
                        <?php $total = $total + $cart->product->price * $cart->amount; ?>
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
                </div>
             
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Subtotal</th>
                     <td>{{$total}}</td>
                   </tr>
                   <tr>
                     <th>Total</th>
                     <td>{{$total}}</td>
                   </tr>
                 </tbody>
               </table>
               
               <a href="#" class="aa-cart-view-btn">Proced to Checkout</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

@endsection