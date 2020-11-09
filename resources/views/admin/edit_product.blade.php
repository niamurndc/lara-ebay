@extends('layouts.admin')

@section('content')

<!-- Section -->
<section>
  <h3>Edit Product</h3>
  <form method="post" action="/admin/edit/product/{{$product->id}}">
    @csrf
    <div class="row gtr-uniform">
      <div class="col-12">
        <input type="text" name="title" id="demo-email" value="{{$product->title}}" placeholder="Produtc Name" />
      </div>
      <!-- Break -->
      <div class="col-12">
        <input type="text" name="attr" id="demo-email" value="{{$product->attr}}" placeholder="Produtc Attribute" />
      </div>
      <!-- Break -->
      <div class="col-6 col-12-xsmall">
        <input type="text" name="price" id="demo-name" value="{{$product->price}}" placeholder="Price" />
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="text" name="quantity" id="demo-email" value="{{$product->quantity}}" placeholder="Quantity" />
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
        <textarea name="description" id="demo-message" placeholder="Enter your message" rows="6">{{$product->description}}</textarea>
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