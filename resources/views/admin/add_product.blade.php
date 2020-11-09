@extends('layouts.admin')

@section('content')

<!-- Section -->
<section>
  <h3>Add Product</h3>
  <form method="post" action="/admin/add/product" enctype="multipart/form-data">
    @csrf
    <div class="row gtr-uniform">
      <div class="col-12">
        <input type="text" name="title" id="demo-email" value="" placeholder="Produtc Name" />
      </div>
      <!-- Break -->
      <div class="col-12">
        <input type="text" name="attr" id="demo-email" value="" placeholder="Produtc Attribute" />
      </div>
      <!-- Break -->
      <div class="col-6 col-12-xsmall">
        <input type="text" name="price" id="demo-name" value="" placeholder="Price" />
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="text" name="quantity" id="demo-email" value="" placeholder="Quantity" />
      </div>
      <!-- Break -->
      <div class="col-12">
        <input type="file" name="image" value="" placeholder="Upload Product image" />
      </div>
      <!-- Break -->
      <div class="col-6 col-12-small">
        <select name="offer" id="demo-category">
          <option value="0">Offer</option>
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select>
      </div>
      <div class="col-6 col-12-small">
        <select name="popular" id="demo-category">
          <option value="0">Popular</option>
          <option value="0">No</option>
          <option value="1">Yes</option>
        </select>
      </div>
      <!-- Break -->
      <div class="col-12">
        <select name="category" id="demo-category">
          <option value="">- Category -</option>
          @foreach($cats as $cat)
            <option value="{{$cat->id}}">{{$cat->title}}</option>
          @endforeach
        </select>
      </div>
      <!-- Break -->
      <div class="col-12">
        <select name="brand" id="demo-category">
          <option value="">- Brand -</option>
          @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->title}}</option>
          @endforeach
        </select>
      </div>
      <!-- Break -->
      <div class="col-12">
        <textarea name="description" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
      </div>
      <!-- Break -->
      <div class="col-12">
        <ul class="actions">
          <li><input type="submit" value="Add Product" class="primary" /></li>
        </ul>
      </div>
    </div>
  </form>
</section>
          
@endsection