@extends('layouts.admin')

@section('content')

<section>
  <a href="/admin/add_product" class="button primary" style="margin-bottom: 20px;">Add Product</a>
  <h3>All Products</h3>

  <div class="table-wrapper">
    <table>
      <thead>
        <tr>
          <th>Name</th>
          <th>Description</th>
          <th>Image</th>
          <th>Category</th>
          <th>Brand</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{$product->title}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->attr}}</td>
          <td>{{$product->category->title}}</td>
          <td>{{$product->brand->title}}</td>
          <td>{{$product->price}}</td>
          <td>{{$product->quantity}}</td>
          <td><a href="/admin/edit/product/{{$product->id}}" class="button small">Edit</a></td>
          <td><a href="/admin/delete/product/{{$product->id}}" class="button primary small">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <!-- pagination -->
  <ul class="pagination">
    <li><span class="button disabled">Prev</span></li>
    <li><a href="#" class="page active">1</a></li>
    <li><a href="#" class="page">2</a></li>
    <li><a href="#" class="page">3</a></li>
    <li><span>&hellip;</span></li>
    <li><a href="#" class="page">8</a></li>
    <li><a href="#" class="page">9</a></li>
    <li><a href="#" class="page">10</a></li>
    <li><a href="#" class="button">Next</a></li>
  </ul>
</section>  

@endsection