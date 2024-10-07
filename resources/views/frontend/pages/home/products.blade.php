<div class="content-inner">
    <div class="products row">
        <!-- product -->
        @foreach ($products as $product)
        <a href="{{route('home.single.product.show',$product->slug)}}" target="_blank">
            <div class="product col-md-3 col-sm-6 col-xs-12">
                <div class="product-box">
                    <!-- product-box-inner -->
                    <div class="product-box-inner">
                        <div class="product-image-box">
                            <img class="img-fluid pro-image-front" src="{{asset($product->frontend_image)}}" style="height:150px" alt="">
                            <img class="img-fluid pro-image-back" src="{{asset($product->backend_image)}}"  style="height:150px"alt="">
                        </div>

                    </div><!-- product-box-inner end -->
                    <div class="product-content-box">
                        <a class="product-title" href="{{route('home.single.product.show',$product->slug)}}" target="_blank">
                            <h2>{{$product->title}}</h2>
                        </a>

                    </div>
                </div>
            </div><!-- product end -->

        </a>
        @endforeach
        <!-- product -->

    </div>
</div>
