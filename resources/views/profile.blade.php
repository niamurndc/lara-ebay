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
                <h4>Your Profile</h4>
                 <form action="/profile/edit" method="post" class="aa-login-form">
                 @csrf
                    <label for="">Name</label>
                      <input type="text" placeholder="Username or email" name="name" value="{{Auth::user()->name}}">
                    <label for="">Email address: {{Auth::user()->email}}</label> <br>

                    <label for="">New Password</label>
                      <input type="password" placeholder="Password" name="passwrod">
                    <button type="submit" class="aa-browse-btn">Update</button>
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