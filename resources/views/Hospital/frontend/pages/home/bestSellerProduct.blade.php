<div class="row">
    <div class="col-lg-12">
        <div class="content-sec-head-style">
            <div class="content-area-sec-title">
                <h5>Best Sellers</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <!-- slick_slider -->
       
            
       
        <div class="pro_slick_slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4, "arrows":true, "autoplay":true}'>
            <!-- product -->
            @foreach ($products as $product)
            <div class="product">
                <div class="product-box">
                    <!-- product-box-inner -->
                    <div class="product-box-inner">
                        <div class="product-image-box">
                            <img class="img-fluid pro-image-front" src="{{asset($product->frontend_image)}}" style="height:150px" alt="">
                            <img class="img-fluid pro-image-back" src="{{asset($product->backend_image)}}"  style="height:150px"alt="">
                        </div>
                
                    </div><!-- product-box-inner end -->
                    <div class="product-content-box">
                        <a class="product-title" href="{{route('home.single.product.show',$product->slug)}}"target="_blank">
                            <h2>{{$product->title}}</h2>
                        </a>
                        {{-- <div class="star-ratings">
                            <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                        <span class="price">
                            <span class="product-Price-amount">
                                <span class="product-Price-currencySymbol"></span>{{$product->selling_price}}৳
                            </span>
                        </span> --}}
                    </div>
                </div>
            </div><!-- product end -->
            @endforeach
        </div>
      
    </div>
</div>