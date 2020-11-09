@extends('layouts.front')

@section('content')
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>          
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">

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
          </div><!--/.nav-collapse -->
        </div>
      </div>       
    </div>
  </section>
  <!-- / menu -->


<section id="aa-product-details">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="aa-product-details-area">
          <div class="aa-product-details-content">
            <div class="row">
              <!-- Modal view slider -->
              <div class="col-md-5 col-sm-5 col-xs-12">                              
                <div class="aa-product-view-slider">                                
                  <div id="demo-1" class="simpleLens-gallery-container">
                    <div class="simpleLens-container">
                      <div class="simpleLens-big-image-container"><a data-lens-image="/image/{{$product->image}}" class="simpleLens-lens-image"><img width="100%" height="100%" src="/image/{{$product->image}}" class="simpleLens-big-image"></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Modal view content -->
              <div class="col-md-7 col-sm-7 col-xs-12">
                <div class="aa-product-view-content">
                  <h3>{{$product->title}}</h3>
                  <div class="aa-price-block">
                    <span class="aa-product-view-price">{{$product->price}} BDT</span>
                    <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                    <p class="aa-product-avilability">Attribute: <span>{{$product->attr}}</span></p>
                  </div>
                  <p>{{$product->description}}</p>
                  <div class="aa-prod-quantity">
                    <form action="">
                      <select id="" name="">
                        <option selected="1" value="0">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                      </select>
                    </form>
                    <p class="aa-prod-category">
                      Category: <a href="#">{{$product->category->title}}</a>
                    </p>
                    <p class="aa-prod-category">
                      Shop: <a href="#">{{$product->brand->title}}</a>
                    </p>
                  </div>
                  <div class="aa-prod-view-bottom">
                    <a class="aa-add-to-cart-btn" href="#">Add To Cart</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="aa-product-details-bottom">
            <ul class="nav nav-tabs" id="myTab2">               
            </ul>


          </div>
          <!-- Related product -->
          <div class="aa-product-related-item">
            <h3>Related Products</h3>
            <ul class="aa-product-catg aa-related-item-slider">
              <!-- start single product item -->
              @foreach($products as $product)
                  <li>
                    <figure>
                      <a class="aa-product-img" href="/product/{{$product->id}}"><img width="100%" height="300px" src="/image/{{$product->image}}" alt="polo shirt img"></a>
                      <a class="aa-add-card-btn"href="/add-cart/{{$product->id}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">{{$product->title}}</a></h4>
                        <span class="aa-product-price">{{$product->price}}</span>
                      </figcaption>
                    </figure>                         
                    <!-- product badge -->
                    <span class="aa-badge aa-sale" href="#">SALE!</span>
                  </li> 
                @endforeach
            </ul>
            <!-- quick view modal -->                  
            <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">                      
                  <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="row">
                      <!-- Modal view slider -->
                      <div class="col-md-6 col-sm-6 col-xs-12">                              
                        <div class="aa-product-view-slider">                                
                          <div class="simpleLens-gallery-container" id="demo-1">
                            <div class="simpleLens-container">
                                <div class="simpleLens-big-image-container">
                                    <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                        <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                    </a>
                                </div>
                            </div>
                            <div class="simpleLens-thumbnails-container">
                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                    data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                    data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                    <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                </a>                                    
                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                    data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                    data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                    <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                </a>

                                <a href="#" class="simpleLens-thumbnail-wrapper"
                                    data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                    data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                    <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                </a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal view content -->
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="aa-product-view-content">
                          <h3>T-Shirt</h3>
                          <div class="aa-price-block">
                            <span class="aa-product-view-price">$34.99</span>
                            <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                          </div>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                          <h4>Size</h4>
                          <div class="aa-prod-view-size">
                            <a href="#">S</a>
                            <a href="#">M</a>
                            <a href="#">L</a>
                            <a href="#">XL</a>
                          </div>
                          <div class="aa-prod-quantity">
                            <form action="">
                              <select name="" id="">
                                <option value="0" selected="1">1</option>
                                <option value="1">2</option>
                                <option value="2">3</option>
                                <option value="3">4</option>
                                <option value="4">5</option>
                                <option value="5">6</option>
                              </select>
                            </form>
                            <p class="aa-prod-category">
                              Category: <a href="#">Polo T-Shirt</a>
                            </p>
                          </div>
                          <div class="aa-prod-view-bottom">
                            <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                            <a href="#" class="aa-add-to-cart-btn">View Details</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                        
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div>
            <!-- / quick view modal -->   
          </div>  
        </div>
      </div>
    </div>
  </div>
</section>
@endsection