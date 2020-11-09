@extends('layouts.front')

@section('content')


<section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login</h4>
                 <form action="{{route('login')}}" method="post" class="aa-login-form">
                     @csrf
                  <label for="">Email address<span>*</span></label>
                   <input type="text" placeholder="Email" name="email">
                   <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="aa-browse-btn">Login</button>
                    <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme" name="remember"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>

@endsection