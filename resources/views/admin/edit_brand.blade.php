@extends('layouts.admin')

@section('content')
<!-- Section -->
<section>
  <h2 id="elements">Brand</h2>
  <div class="row gtr-200">
    <div class="col-6 col-12-medium">

      <!-- Form -->
        <h3>Edit Brand</h3>

        <form method="post" action="/admin/edit/brand/{{$brand->id}}">
        @csrf
          <div class="row gtr-uniform">
            <div class="col-12 col-12-xsmall">
              <input type="text" name="title" id="demo-name" value="{{$brand->title}}" placeholder="Brand Name" />
            </div>
            <!-- Break -->
            <div class="col-12">
              <ul class="actions">
                <li><input type="submit" value="Add Category" class="primary" /></li>
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