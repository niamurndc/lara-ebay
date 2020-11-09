@extends('layouts.admin')

@section('content')
<!-- Section -->
<section>
  <h2 id="elements">Your Profile</h2>
  <div class="row gtr-200">
    <div class="col-6 col-12-medium">

      <!-- Form -->
        <h3>Edit Profile</h3>

        <form method="post" action="/admin/edit/profile/{{Auth::user()->id}}">
        @csrf
          <div class="row gtr-uniform">
            <div class="col-12">
              <label for="">Name</label>
              <input type="text" name="name" id="demo-name" value="{{Auth::user()->name}}" placeholder="Your Name" />
            </div>
            <!-- Break -->
            <div class="col-12">
              <label for="">Email: {{Auth::user()->email}}</label>
            </div>
            <!-- Break -->
            <div class="col-12">
              <label for="">Password</label>
              <input type="password" name="password" id="demo-name" value="" placeholder="Change Passwrod" />
            </div>
            <!-- Break -->
            <div class="col-12">
              <ul class="actions">
                <li><input type="submit" value="Update" class="primary" /></li>
              </ul>
            </div>
          </div>
        </form>
    </div>
    <div class="col-6 col-12-medium">

    </div>

  </div>

</section>
@endsection