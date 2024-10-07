<!DOCTYPE html>
<html lang="en">

<head>
    @php
    $sitesetting=App\Models\HospitalSiteSetting::first();
    @endphp
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="{{isset($sitesetting->mega_keyword)?$sitesetting->meta_keyword:''}}" />
    <meta name="description" content="{{isset($sitesetting->meta_description)?$sitesetting->mega_description:''}}" />
    <meta name="author" content="https://www.themetechmount.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @if(isset($sitesetting->meta_title))
    <title>{{$sitesetting->meta_title}}</title>

    @else
    <title>Bangladesh BioTech</title>


    @endif
    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset(isset($sitesetting->fav_icon)?$sitesetting->fav_icon:'')}}" />

    <!-- bootstrap -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/')}}/bootstrap.min.css" />


    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/')}}/animate.css" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/')}}/font-awesome.css" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/')}}/themify-icons.css" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/')}}/slick.css">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/')}}/slick-theme.css">

    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/revolution/css/')}}/layers.css">

    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/revolution/css/')}}/settings.css">

    <!-- magnific-popup -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/')}}/magnific-popup.css" />

    <!-- megamenu -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/')}}/megamenu.css">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/')}}/shortcodes.css" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/')}}/main.css" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend3/css/')}}/responsive.css" />
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick.css">
    <link rel="stylesheet" href="https://kenwheeler.github.io/slick/slick/slick-theme.css">

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B6XRXQMN37"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-B6XRXQMN37');
</script>
<style>
    .tox-notification {
        display: none;
    }
</style>

<body>

    <!--page start-->
    <div class="page">

        <!--header start-->
        @include('Hospital.frontend.layouts.header')

        @yield('content')

        @include('Hospital.frontend.layouts.footer')


        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

        <div class="wrap-modal1 js-modal1">
            <div class="overlay-modal1 js-hide-modal1"></div>
            <div class="container">
                <div class="modal1-content">
                    <button class="close js-hide-modal1">
                        <i class="fa fa-close"></i>
                    </button>
                    <div class="row ttm-single-product-details ttm-bgcolor-white">
                        <div class="col-lg-6 col-md-6 col-sm-12 ml-auto mr-auto">
                            <div class="product-gallery easyzoom-product-gallery">
                                <div class="product-look-views left">
                                    <div class="mt-35 mb-35">
                                        <ul class="thumbnails easyzoom-gallery-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":true, "infinite":true, "vertical":true}'>
                                            <li>
                                                <a href="{{asset('frontend3/images/')}}/product/pro-01-plus.png" data-standard="{{asset('frontend3/images/')}}/product/pro-01-plus.png">
                                                    <img class="img-fluid" src="{{asset('frontend3/images/')}}/product/pro-01-plus.png" alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{asset('frontend3/images/')}}/product/pro-02-plus.png" data-standard="{{asset('frontend3/images/')}}/product/pro-02-plus.png">
                                                    <img class="img-fluid" src="{{asset('frontend3/images/')}}/product/pro-02-plus.png" alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{asset('frontend3/images/')}}/product/pro-03-plus.png" data-standard="{{asset('frontend3/images/')}}/product/pro-03-plus.png">
                                                    <img class="img-fluid" src="{{asset('frontend3/images/')}}/product/pro-03-plus.png" alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{asset('frontend3/images/')}}/product/pro-04-plus.png" data-standard="{{asset('frontend3/images/')}}/product/pro-04-plus.png">
                                                    <img class="img-fluid" src="{{asset('frontend3/images/')}}/product/pro-04-plus.png" alt="" />
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{asset('frontend3/images/')}}/product/pro-05-plus.png" data-standard="{{asset('frontend3/images/')}}/product/pro-05-plus.png">
                                                    <img class="img-fluid" src="{{asset('frontend3/images/')}}/product/pro-05-plus.png" alt="" />
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-look-preview-plus right">
                                    <div class="pl-35 res-767-pl-15">
                                        <div class="easyzoom easyzoom-model easyzoom--overlay easyzoom--with-thumbnails">
                                            <a href="{{asset('frontend3/images/')}}/product/pro-01-plus.png">
                                                <img class="img-fluid" src="{{asset('frontend3/images/')}}/product/pro-01-plus.png" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="summary entry-summary pl-30 res-991-pl-0 res-991-pt-40">
                                <h2 class="product_title entry-title">DEWALT 4-Piece T-Shank Jig Saw Blade Case</h2>
                                <div class="share-icons social-links">
                                    <span>Share :</span>
                                    <a href="#"><i class="ti ti-facebook"></i></a>
                                    <a href="#"><i class="ti ti-twitter-alt"></i></a>
                                    <a href="#"><i class="ti ti-google"></i></a>
                                    <a href="#"><i class="ti ti-linkedin"></i></a>
                                </div>
                                <div class="comments-notes clearfix">
                                    &nbsp;&nbsp;<a href="javascript:void(0)" class="review-link" rel="nofollow">(No review)</a>
                                    &nbsp;&nbsp;<a href="javascript:void(0)" class="review-link" rel="nofollow">Write to Review</a>
                                    <div class="product-rating clearfix">
                                        <ul class="star-rating clearfix">
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                            <li><i class="fa fa-star-o"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product_in-stock"><i class="fa fa-check-circle"></i><span> in Stock Only 14 left</span></div>
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
                                <div class="product-details__short-description">Raising a heavy fur muff that covered the whole of her lower arm towards the viewer regor then turned to look out the window</div>
                                <div class="mt-30 mb-35">
                                    <div class="quantity">
                                        <label>Quantity: </label>
                                        <input type="text" value="1" name="quantity-number" class="qty">
                                        <span class="inc quantity-button">+</span>
                                        <span class="dec quantity-button">-</span>
                                    </div>
                                </div>
                                <div class="actions">
                                    <div class="add-to-cart">
                                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="#">Add to cart</a>
                                    </div>
                                </div>
                                <div class="buttons">
                                    <a href="#" rel="nofollow" data-product-id="24006456" data-product-type="simple" class="add_to_wishlist">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                        <span class="wishlist-text">Add to Wish List</span>
                                    </a>
                                    <a href="#" class="compare button" data-product_id="24006456" rel="nofollow">
                                        <i class="fa fa-expand" aria-hidden="true"></i>
                                        <span class="compare-text">Compare</span>
                                    </a>
                                </div>
                                <div id="block-reassurance-1" class="block-reassurance">
                                    <ul>
                                        <li>
                                            <div class="block-reassurance-item">
                                                <i class="fa fa-lock"></i>
                                                <span>Security policy (edit with Customer reassurance module)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="block-reassurance-item">
                                                <i class="fa fa-truck"></i>
                                                <span>Delivery policy (edit with Customer reassurance module)</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="block-reassurance-item">
                                                <i class="fa fa-arrows-h"></i>
                                                <span>Return policy (edit with Customer reassurance module)</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- page end -->


    <!-- Javascript -->
    {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
    <script src="{{asset('frontend3/js/')}}/jquery.min.js"></script>
    <script src="{{asset('frontend3/js/')}}/tether.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    {{-- <script src="{{asset('frontend3/js/')}}/bootstrap.min.js"></script> --}}
    <script src="{{asset('frontend3/js/')}}/jquery.easing.js"></script>
    <script src="{{asset('frontend3/js/')}}/jquery-waypoints.js"></script>
    <script src="{{asset('frontend3/js/')}}/jquery-validate.js"></script>
    <script src="{{asset('frontend3/js/')}}/numinate.min.js"></script>
    <script src="{{asset('frontend3/js/')}}/slick.js"></script>
    <script src="{{asset('frontend3/js/')}}/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('frontend3/js/')}}/price_range_script.js"></script>
    <script src="{{asset('frontend3/js/')}}/easyzoom.js"></script>
    <script src="{{asset('frontend3/js/')}}/main.js"></script>

    <!-- Revolution Slider -->
    <script src="{{asset('frontend3/revolution/js/')}}/jquery.themepunch.tools.min.js"></script>
    <script src="{{asset('frontend3/revolution/js/')}}/jquery.themepunch.revolution.min.js"></script>
    <script src="{{asset('frontend3/revolution/js/')}}/slider.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

    <script src="{{asset('frontend3/revolution/js/')}}/extensions/revolution.extension.actions.min.js"></script>
    <script src="{{asset('frontend3/revolution/js/')}}/extensions/revolution.extension.carousel.min.js"></script>
    <script src="{{asset('frontend3/revolution/js/')}}/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="{{asset('frontend3/revolution/js/')}}/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="{{asset('frontend3/revolution/js/')}}/extensions/revolution.extension.migration.min.js"></script>
    <script src="{{asset('frontend3/revolution/js/')}}/extensions/revolution.extension.navigation.min.js"></script>
    <script src="{{asset('frontend3/revolution/js/')}}/extensions/revolution.extension.parallax.min.js"></script>
    <script src="{{asset('frontend3/revolution/js/')}}/extensions/revolution.extension.slideanims.min.js"></script>
    <!-- Javascript end-->
    <!--<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>-->
    <script type="text/javascript" src="https://kenwheeler.github.io/slick/slick/slick.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
    
    <!--Not Copy Any Content in website code-->
    <script>
        // Disable right-click
        document.addEventListener('contextmenu', function(event) {
            event.preventDefault();
        });

        // Disable text selection
        document.addEventListener('selectstart', function(event) {
            event.preventDefault();
        });

        // Disable cut, copy, and paste
        document.addEventListener('cut', function(event) {
            event.preventDefault();
        });
        document.addEventListener('copy', function(event) {
            event.preventDefault();
        });
        document.addEventListener('paste', function(event) {
            event.preventDefault();
        });
    </script>
    <!--Not Copy Any Content in website code-->
    @yield('script')
</body>

</html>