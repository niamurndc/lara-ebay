@extends('layouts.admin')

@section('content')
<!-- Section -->
<section>
  <h2 id="elements">Site Settings</h2>
  <div class="row gtr-200">
    <div class="col-6 col-12-medium">

      <!-- Form -->
        <h3>Edit Settings</h3>

        <form method="post" action="/admin/edit/setting">
        @csrf
          <div class="row gtr-uniform">
            <div class="col-12">
              <label for="">Shipping Cost</label>
              <input type="text" name="name" id="demo-name" value="" placeholder="Your Name" />
            </div>
            <!-- Break -->
            <div class="col-12">
              <label for="">Flat Rate</label>
              <input type="text" name="password" id="demo-name" value="" placeholder="Change Passwrod" />
            </div>
            <!-- Break -->
            <div class="col-12">
              <label for="">Cupon</label>
              <input type="text" name="password" id="demo-name" value="" placeholder="Change Passwrod" />
            </div>
            <!-- Break -->
            <div class="col-12">
              <label for="">Discount Rate</label>
              <input type="text" name="password" id="demo-name" value="" placeholder="Change Passwrod" />
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