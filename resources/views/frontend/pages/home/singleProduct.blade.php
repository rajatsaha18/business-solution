@extends('frontend.layouts.app')
@section('content')
 <!-- page-title -->
 <style>
     @media (max-width: 600px) {

    .head-cat{
        margin-top:60px!important;
    }

    }

 </style>
 <div class="ttm-page-title-row">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center" style="min-height:40px!important;padding-top:30px!important">
                    <div class="page-title-heading">
                        <h1 class="title">Product Details</h1>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span class="mr-1"><i class="ti ti-home"></i></span>
                        <a title="Homepage" href="#">Home</a>
                        <span class="ttm-bread-sep">&nbsp;/&nbsp;</span>
                        <span class="ttm-textcolor-skincolor">Product Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-3 head-cat">
        <h3 class="text-center  pt-4 pb-2" style="color:white;background-color:#193D87">{{$product->title}}</h3>
    <div>
</div><!-- page-title end-->

<!--site-main start-->
<div class="site-main">

<!-- single-product-section -->
<section class="single-product-section layout-1 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="ttm-single-product-details">
                    <div class="ttm-single-product-info clearfix">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 ml-auto mr-auto">
                                <div class="product-gallery easyzoom-product-gallery">
                                    <div class="product-look-views left">
                                        <div class="mt-35 mb-35">
                                            <ul class="thumbnails easyzoom-gallery-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 1, "arrows":true, "infinite":true, "vertical":true}'>
                                               @foreach($product_images as $product_image)

                                               <li>
                                                <a href="{{ URL::to('/') }}/uploads/product_images/{{ $product_image->image }}" data-standard="{{ URL::to('/') }}/uploads/product_images/{{ $product_image->image }}">
                                                    <img class="img-fluid" src="{{ URL::to('/') }}/uploads/product_images/{{ $product_image->image }}" alt="" />
                                                </a>
                                              </li>
                                               @endforeach

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-look-preview-plus right">
                                        <div class="pl-35 res-767-pl-15">
                                            <div class="easyzoom easyzoom--overlay easyzoom--with-thumbnails">
                                                <a href="{{asset($product->frontend_image)}}">
                                                    <img class="img-fluid" src="{{asset($product->frontend_image)}}" style= alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="summary entry-summary pl-30 res-991-pl-0 res-991-pt-40">
                                    <h2 class="product_title entry-title">{{$product->title}}</h2>
                                    <h5 style="font-weight:500">Brand : {{$product->brand}}</h5>
                                     <h5 style="font-weight:500">Origin: {{$product->origin}}</h5>
                                     <h5 style="font-weight:500">Assembly: {{$product->assembly}}</h5>
                                     @if(isset($product->product_catalog))
                                     <div>
                                        <a href="{{asset($product->product_catalog)}}" class="btn text-light fw-bolder" style="background-color:#193D87" download><i class="fa fa-download" aria-hidden="true"></i>
                                            Download Product Catalog</a>
                                    </div>

                                     @endif
                                    <div class="comments-notes clearfix">

                                    <div class="product-details__short-description">{{$product->short_description}}</div>
                                    <div style="margin-top:20px">
                                        <h3>Product Description: </h3>
                                        <p>{!! $product->long_description !!}</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-30 pb-60 res-991-pt-0 res-991-pb-30">
                        <div class="row no-gutters ttm-bgcolor-grey border w-50" style="display:block;margin:0 auto;text-align:center">
                           
                            <div class="col-md-12 col-sm-12">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style3 text-center">
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="themifyicon ti-comments"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Support 24/7 Days</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Hot Line: +{{isset($sitesetting->phone)?$sitesetting->phone:''}}</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>
                    </div>
                    <div class="ttm-tabs tabs-for-single-products" data-effect="fadeIn">
                        <ul class="tabs clearfix">
                            <li class="tab active"><a href="#">Product description</a></li>
                            <li class="tab"><a href="#">Privacy policy</a></li>
                            {{-- <li class="tab"><a href="#">Customer reviews</a></li> --}}
                            <li class="tab"><a href="#">Terms Of Service</a></li>
                        </ul>
                        <div class="content-tab">
                            <!-- content-inner -->
                            <div class="content-inner">
                                <p>{!! $product->long_description !!}</p>

                            </div><!-- content-inner end-->
                            <!-- content-inner -->
                            <div class="content-inner">
                                <p>This privacy policy sets out how Bangladesh BioTech uses and protects any information that you give here when you use this website. We view the protection of your privacy as a very important principle. We are committed to ensuring your privacy here. Your information will only be used in accordance with this privacy statement whenever we ask you to provide any information by which you can be identified while using this website.

You will be required to enter a valid phone number while signing up and placing an order on Bangladesh BioTech. By registering your phone number with us, you consent to be contacted by us via phone calls and/or SMS, in case of any order or delivery-related updates. Bangladesh BioTech will not use your personal information to initiate any promotional phone call or SMS. We store and process your information in computers that are protected by physical as well as reasonable technological security measures.

Bangladesh BioTech may change this privacy policy from time to time if needed by updating this page. Please check this page periodically to ensure that you are happy with our privacy policy.

<p>1. Use of credit/debit cards:

Shopping at Bangladesh BioTech is 100% safe. All Credit card and Debit card payments on Bangladesh BioTech are processed through secure and trusted payment gateways. When you transact here, you pay at the payment page which is incorporated with your respective bank. So, your bank deals with your credit/debit card information. You can be assured that Fabeely offers you the highest standards of security currently available on the internet so as to ensure that your shopping experience is private, safe, and secure.</p>

 <p>2. Links to other websites:

Our website may contain links to other websites of interest. However, once you have used these links to leave our site, you should note that we do not have any control over the other websites. Therefore, we cannot be responsible for the protection and privacy of any information which you provide whilst visiting such sites. We provide security only on our website. </p>

<p>3. Content you submit:

You agree that any information submitted belongs to you or that you have permission to submit them. Content means but is not restricted to text, graphics, photos, logos, audio/video files, etc. You agree to indemnify us from all responsibility and not hold us responsible for displaying any information you submit to us.</p></p>
                            </div><!-- content-inner end-->

                            <div class="content-inner">
                                <p>Welcome to Bangladesh BioTech. We are an online marketplace and these are the terms and conditions governing your access and use of Bangladesh BioTech along with its related sub-domains, sites, services, and other tools. By using the Site, you hereby accept these terms and conditions and represent that you agree to comply with these terms and conditions.
<p>
<strong>SECTION 1 – GENERAL CONDITIONS</strong>
By agreeing to these Terms of Service, you represent that you are at the age of majority in your present State or Province of residence, or that you have given us your consent to allow any of your minor dependents to use this website where you are the age of majority in your State or Province of residence.</p>

You may not use our products for any illegal or unauthorized purpose nor may you in the use of the service, violate any laws in your jurisdiction. You must not transmit any worms or viruses or any code of a destructive nature. A breach or violation of any of the Terms will result in an immediate termination of your Services.

<p><strong>SECTION 2 – PRICING AND PAYMENT METHODS</strong>
All prices are subject to change without notification, and while every effort is made to ensure the accuracy of the prices displayed on Bangladesh BioTech, they are not guaranteed to be accurate. If any price is different from that displayed we will inform you before dispatching the order and you will have the option of continuing with the order or not.</p>
<p>
We are determined to provide the most accurate pricing information on the Site to our users; however, errors may still occur, such as cases when the price of an item is not displayed correctly on the Site. As such, we reserve the right to refuse or cancel any order. In the event that an item is mispriced, we may, at our own discretion, either contact you for instructions or cancel your order and notify you of such cancellation. We shall have the right to refuse or cancel any such orders whether or not the order has been confirmed and your pre-payment processed. If such a cancellation occurs on your prepaid order, our policies for refund will apply.</p>

<p>Choosing the right payment method is essential in order to shop with online stores. Bangladesh BioTech is accepting payments in very easy and convenient ways. The chart of the payment methods of Bangladesh BioTech is given below:</p>

<p><strong>Payment Method Condition</strong>

<strong>Cash on Delivery</strong>: For orders of any amount including delivery charge is applicable for cash on delivery.

<strong>Online Payment</strong>: Applicable for any ordered amount as per company policy.</p>



<p><strong>SECTION 3 – ERRORS</strong>
Occasionally there may be visible information on our website or some Services containing typographical errors, inaccuracies, or omissions that may relate to product descriptions, pricing, promotions, offers, product shipping charges, and availability. We reserve the right to correct any errors, inaccuracies, or omissions, and to change or update information or cancel orders if any information, on our or on any related website, is inaccurate at any time without prior knowledge.</p>
<p>
<strong>SECTION 4 – GOVERNING LAW</strong>

These Terms of Service and any separate agreements whereby we provide you Services shall be governed by and construed and interpreted in accordance with the applicable laws governing eCommerce in Bangladesh. Any and all actionable legal claims or proceedings arising out of, or in connection to this website, must be brought within the jurisdiction of a competent Court in Bangladesh.</p>

<p><strong>SECTION 5 – CHANGES TO TERMS OF SERVICE</strong>
We reserve the right, at our sole discretion, to update, change or replace any part of these Terms of Service by posting updates and changes to our website. It is your responsibility to check our website periodically for changes. Following the updates in eCommerce policies and laws at any respective time, we may change and update our terms and conditions anytime without prior notice.</p></p>
                            </div><!-- content-inner end-->
                        </div>
                    </div>
                </div>

            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- single-product-section end -->


</div><!--site-main end-->

@endsection
