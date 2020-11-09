@extends('layouts.admin')

@section('content')
<!-- Section -->
<section>
  <h2 id="elements">Category</h2>
  <div class="row gtr-200">
    <div class="col-6 col-12-medium">

      <!-- Form -->
        <h3>Edit Category</h3>

        <form method="post" action="/admin/edit/cat/{{$cate->id}}">
        @csrf
          <div class="row gtr-uniform">
            <div class="col-12 col-12-xsmall">
              <input type="text" name="title" id="demo-name" value="{{$cate->title}}" placeholder="Category Name" />
            </div>
            <!-- Break -->
            <div class="col-12">
              <select name="parent" id="demo-category">
                <option value="0">-Select parent Category-</option>
                @foreach($cats as $cat)
                <option value="{{$cat->id}}">{{$cat->title}}</option>
                @endforeach
              </select>
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