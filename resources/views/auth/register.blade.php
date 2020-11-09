@extends('layouts.front')

@section('content')


<section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              
              <div class="col-md-6">
                <div class="aa-myaccount-register">                 
                 <h4>Register</h4>
                 <form action="{{route('register')}}" method="post" class="aa-login-form">
                     @csrf
                    <label for="">Your Name<span>*</span></label>
                    <input type="text" placeholder="Name" name="name" value="{{Old('name')}}">
                    <label for="">Email address<span>*</span></label>
                    <input type="text" placeholder="Email" name="email">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="password">
                    <label for="">Confirm Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="password_confirmation">
                    <button type="submit" class="aa-browse-btn">Register</button>                    
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