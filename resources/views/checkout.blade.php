@extends('layouts.front')

@section('content')
 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
   <h2>Checkout</h2>
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form action="/order" method="post">
          @csrf
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    <!-- Coupon section -->
                    <div class="panel panel-default aa-checkout-coupon">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                            Have a Coupon?
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <input type="text" placeholder="Coupon Code" class="aa-coupon-code">
                          <input type="submit" value="Apply Coupon" class="aa-browse-btn">
                        </div>
                      </div>
                    </div>
                    <!-- Billing Details -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                            Your Order Details
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input type="text" name="name" value="{{Auth::user()->name}}">
                              </div>                             
                            </div>                            
                          </div>  
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="email" name="email" value="{{Auth::user()->email}}">
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input type="tel" name="phone" placeholder="Phone*">
                              </div>
                            </div>
                          </div>    
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select name="area">
                                  <option value="">Select Your Area</option>
                                  <option value="1">Betka</option>
                                  <option value="2">Sabalia</option>
                                  <option value="3">Akur Takur Para</option>
                                  <option value="4">Adalot Para</option>
                                  <option value="5">Thana Para</option>
                                  <option value="6">Adi Tangail</option>
                                </select>
                              </div>                             
                            </div>                            
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea cols="8" rows="3" name="address">Address*</textarea>
                              </div>                             
                            </div>                            
                          </div>                                   
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Order Summary</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $total = 0; ?>
                        @foreach($carts as $cart)
                        <tr>
                          <td>{{$cart->product->title}} <strong> x  {{$cart->amount}}</strong></td>
                          <td>{{$cart->product->price * $cart->amount}}</td>
                        </tr>
                        <?php $total = $total + $cart->product->price * $cart->amount; ?>
                        @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Subtotal</th>
                          <td>{{$total}}</td>
                        </tr>
                         <tr>
                          <th>Tax</th>
                          <td>40</td>
                        </tr>
                         <tr>
                          <th>Total</th>
                          <td>{{$all = $total + 40}}</td>
                          <input type="hidden" name="total" value="{{$all}}">
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <h4>Payment Method</h4>
                  <div class="aa-payment-method">                    
                    <label for="cashdelivery"><input type="radio" value="cod" id="cashdelivery" name="payment" checked> Cash on Delivery </label>
                    <label for="paypal"><input type="radio" id="paypal" name="payment"> Via Paypal </label>
                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"  alt="PayPal Acceptance Mark">    
                    <input type="submit" value="Place Order" class="aa-browse-btn">                
                  </div>
                </div>
              </div>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
@endsection