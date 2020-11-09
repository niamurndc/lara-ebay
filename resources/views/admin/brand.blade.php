@extends('layouts.admin')

@section('content')
<!-- Section -->
<section>
  <h2 id="elements">Brand</h2>
  <div class="row gtr-200">
    <div class="col-6 col-12-medium">

      <!-- Form -->
        <h3>Add Brand</h3>

        <form method="post" action="/admin/add/brand">
        @csrf
          <div class="row gtr-uniform">
            <div class="col-12 col-12-xsmall">
              <input type="text" name="title" id="demo-name" value="" placeholder="Brand Name" />
            </div>
            <!-- Break -->
            <div class="col-12">
              <ul class="actions">
                <li><input type="submit" value="Add Brand" class="primary" /></li>
              </ul>
            </div>
          </div>
        </form>
    </div>
    <div class="col-6 col-12-medium">

      <!-- Table -->
        <h3>All Brand</h3>

        <div class="table-wrapper">
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($brands as $brand)
              <tr>
                <td>{{$brand->title}}</td>
                <td><a href="/admin/edit/brand/{{$brand->id}}" class="button small">Edit</a></td>
                <td><a href="/admin/delete/brand/{{$brand->id}}" class="button primary small">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>

  </div>

</section>
@endsection