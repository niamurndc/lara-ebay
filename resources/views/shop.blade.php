@extends('layouts.front')

@section('content')
<section id="aa-product-category">
    <div class="container-flued" style="margin: 1em 6em;">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="">
                    <option value="1" selected="Default">Default</option>
                    <option value="2">Name</option>
                    <option value="3">Price</option>
                    <option value="4">Date</option>
                  </select>

                  <label for="">Show</label>
                  <select name="">
                    <option value="1" selected="12">12</option>
                    <option value="2">24</option>
                    <option value="3">36</option>
                  </select>
                </form>
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
                @foreach($products as $product)
                  <li>
                    <figure>
                      <a class="aa-product-img" href="/product/{{$product->id}}"><img width="100%" height="300px" src="/image/{{$product->image}}" alt="polo shirt img"></a>
                      <a class="aa-add-card-btn"href="/add-cart/{{$product->id}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">{{$product->title}}</a></h4>
                        <span class="aa-product-price">{{$product->price}}</span>
                        <p class="aa-product-descrip">{{$product->description}}</p>
                      </figcaption>
                    </figure>                         
                    <!-- product badge -->
                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                  </li> 
                @endforeach                                       
              </ul> 
            </div>
            <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Category</h3>
              <ul class="aa-catg-nav">
              @foreach($cats as $cat)
                <li><a href="index.html">{{$cat->title}} <span class="caret"></a>
                    @if($cat->subcat != [])
                      <ul class="dropdown-menu">
                        @foreach($cat->subcat as $subcate)
                        <li><a href="#">{{$subcate->title}}</a></li>
                        @endforeach                                     
                      </ul>
                    @endif
                </li>
              @endforeach
              </ul>
            </div>

            <!-- single sidebar -->
            <div class="aa-sidebar-widget">
              <h3>Brand</h3>
              <ul class="aa-catg-nav">
                <li><a href="#">Men</a></li>
                <li><a href="">Women</a></li>
                <li><a href="">Kids</a></li>
                <li><a href="">Electornics</a></li>
                <li><a href="">Sports</a></li>
              </ul>
            </div>
          </aside>
        </div>
       
      </div>
    </div>
  </section>
@endsection