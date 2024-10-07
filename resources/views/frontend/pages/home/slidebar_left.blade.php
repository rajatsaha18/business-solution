<div class="col-lg-3 widget-area sidebar-left">
    {{-- <aside class="widget widget-text">
        <h3 class="widget-title">Special Offers</h3>
        <div class="ttm_info_widget">
            <span>Handyman Tools</span>
            <div class="title"><h3>Limited Time <strong>Offers!</strong></h3></div>
            <div class="content">
                <p>It’s All Power You Need!</p>
                <h4>Up To <strong>35%</strong> Off!</h4>
            </div>
            <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-skincolor btn-inline" href="#">Shopping Now!</a>
        </div>
    </aside> --}}
    <aside class="widget products top-rated-products">
        <h3 class="widget-title">Featured Products</h3>
        <ul class="product-list-widget product">
           @foreach ($featured_products as $product)
           <li>
            <a href="{{route('home.single.product.show',$product->slug)}}"target="_blank"><img src="{{asset($product->frontend_image)}}" alt=""></a>
            <div class="product-content-box">
                {{-- <div class="star-ratings">
                    <ul class="rating">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                        <li><i class="fa fa-star-o"></i></li>
                    </ul>
                </div> --}}
                <a class="product-title" href="{{route('home.single.product.show',$product->slug)}}"target="_blank">
                    <h2>{{$product->title}}</h2>
                </a>
                {{-- <span class="price">
                    <span class="product-Price-amount">
                        <span class="product-Price-currencySymbol"></span>{{$product->selling_price}}৳
                    </span>
                </span> --}}
            </div>
        </li>
               
           @endforeach
           
        </ul>
    </aside>
    {{-- <aside class="widget widget-testimonial">
        <h3 class="widget-title">Testimonial</h3>
        <!-- wrap-testimonial -->
        <!-- testimonial_slick_slider -->
        <div class="testimonial_slick_slider" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows":false, "dots":true, "autoplay":true, "infinite":true}'>
            <!-- testimonials -->
            <div class="testimonials ttm-testimonial-box-view-style2">
                <div class="testimonial-content">
                    <blockquote class="ttm-testimonial-text">Satisfied customer is the best source of advertise &shy;ment, & I'm one of those custom satisfied.</blockquote>
                    <div class="testimonial-avatar">
                        <div class="testimonial-img">
                            <img class="img-fluid" src="{{asset('frontend/images/')}}/testimonial/01.jpg" alt="testimonial-img">
                        </div>
                         <div class="testimonial-caption">
                            <h5>Leax May</h5>
                            <label>Web Canst</label>
                            <div class="star-ratings">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- testimonials end -->
            <!-- testimonials -->
            <div class="testimonials ttm-testimonial-box-view-style2">
                <div class="testimonial-content">
                    <blockquote class="ttm-testimonial-text">Satisfied customer is the best source of advertise &shy;ment, & I'm one of those custom satisfied.</blockquote>
                    <div class="testimonial-avatar">
                        <div class="testimonial-img">
                            <img class="img-fluid" src="{{asset('frontend/images/')}}/testimonial/02.jpg" alt="testimonial-img">
                        </div>
                        <div class="testimonial-caption">
                            <h5>Alan Sears</h5>
                            <label>Web Canst</label>
                            <div class="star-ratings">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- testimonials end -->
            <!-- testimonials -->
            <div class="testimonials ttm-testimonial-box-view-style2">
                <div class="testimonial-content">
                    <blockquote class="ttm-testimonial-text">Satisfied customer is the best source of advertise &shy;ment, & I'm one of those custom satisfied.</blockquote>
                    <div class="testimonial-avatar">
                        <div class="testimonial-img">
                            <img class="img-fluid" src="{{asset('frontend/images/')}}/testimonial/03.jpg" alt="testimonial-img">
                        </div>
                        <div class="testimonial-caption">
                            <h5>Alex Jones</h5>
                            <label>Web Canst</label>
                            <div class="star-ratings">
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- testimonials end -->
        </div><!-- wrap-testimonial end-->
    </aside> --}}
    {{-- <aside class="widget products top-rated-products">
        <h3 class="widget-title">Featured Products</h3>
        <ul class="product-list-widget product">
            <li>
                <a href="#"><img src="{{asset('frontend/images/')}}/product/pro-front-10.png" alt=""></a>
                <div class="product-content-box">
                    <div class="star-ratings">
                        <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                    <a class="product-title" href="product-layout1.html">
                        <h2>Rotary Hammer</h2>
                    </a>
                    <span class="price">
                        <span class="product-Price-amount">
                            <span class="product-Price-currencySymbol">$</span>80.00
                        </span>
                    </span>
                </div>
            </li>
            <li>
                <a href="#"><img src="{{asset('frontend/images/')}}/product/pro-front-02.png" alt=""></a>
                <div class="product-content-box">
                    <div class="star-ratings">
                        <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                    <a class="product-title" href="product-layout1.html">
                        <h2>Impact Wrench</h2>
                    </a>
                    <span class="price">
                        <ins><span class="product-Price-amount">
                                <span class="product-Price-currencySymbol">$</span>110.00
                            </span>
                        </ins>
                        <del><span class="product-Price-amount">
                                <span class="product-Price-currencySymbol">$</span>123.00
                            </span>
                        </del>
                    </span>
                </div>
            </li>
             <li>
                <a href="#"><img src="{{asset('frontend/images/')}}/product/pro-front-08.png" alt=""></a>
                <div class="product-content-box">
                    <div class="star-ratings">
                        <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                    <a class="product-title" href="product-layout1.html">
                        <h2>Tape Measure</h2>
                    </a>
                    <span class="price">
                        <span class="product-Price-amount">
                            <span class="product-Price-currencySymbol">$</span>24.00
                        </span>
                    </span>
                </div>
            </li>
             <li>
                <a href="#"><img src="{{asset('frontend/images/')}}/product/pro-front-06.png" alt=""></a>
                <div class="product-content-box">
                    <div class="star-ratings">
                        <ul class="rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                    </div>
                    <a class="product-title" href="product-layout1.html">
                        <h2>Circular Saw</h2>
                    </a>
                    <span class="price">
                        <ins><span class="product-Price-amount">
                                <span class="product-Price-currencySymbol">$</span>124.00
                            </span>
                        </ins>
                        <del><span class="product-Price-amount">
                                <span class="product-Price-currencySymbol">$</span>111.00
                            </span>
                        </del>
                    </span>
                </div>
            </li>
        </ul>
    </aside> --}}
    <aside class="widget widget_media_image banner-image">
        @if (isset($banner->banner_six))
        <a href="{{$banner->banner_six_link}}" target="_blank"><img class="img-fluid" src="{{asset($banner->banner_six)}}" style="width:100%;" alt=""></a>       
        @else
        <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

        @endif    </aside>
    <aside class="widget widget_media_image banner-image">
        @if (isset($banner->banner_seven))
        <a href="{{$banner->banner_seven_link}}" target="_blank"><img class="img-fluid" src="{{asset($banner->banner_seven)}}" style="width:100%" alt=""></a>       
        @else
        <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

        @endif    </aside>
</div>