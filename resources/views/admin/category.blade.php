@extends('layouts.admin')

@section('content')
<!-- Section -->
<section>
  <h2 id="elements">Category</h2>
  <div class="row gtr-200">
    <div class="col-6 col-12-medium">

      <!-- Form -->
        <h3>Add Category</h3>

        <form method="post" action="/admin/add/category">
        @csrf
          <div class="row gtr-uniform">
            <div class="col-12 col-12-xsmall">
              <input type="text" name="title" id="demo-name" value="" placeholder="Category Name" />
            </div>
            <!-- Break -->
            <div class="col-12">
              <select name="parent" id="demo-category">
                <option value="0">- Select Parent Category -</option>
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

      <!-- Table -->
        <h3>All Category</h3>

        <div class="table-wrapper">
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Parent</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($cats as $cat)
              <tr>
                <td>{{$cat->title}}</td>
                <td>{{$cat->parent}}</td>
                <td><a href="/admin/edit/cat/{{$cat->id}}" class="button small">Edit</a></td>
                <td><a href="/admin/delete/cat/{{$cat->id}}" class="button primary small">Delete</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>

    </div>

  </div>

</section>
@endsection