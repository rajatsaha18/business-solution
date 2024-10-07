@extends('frontend.layouts.app')
@section('content')
<style>
    .daohang>li>a {


        color: black !important;

    }

    .fas.fa-search {
        color: black !important
    }
</style>
    <div class="mianbao  mat1  zong" >
        <a href="{{ route('home.index') }}" title="Home">Home</a>
        &gt;
        <a href="{{ route('shop.index') }}">Products</a> &gt; <a
            href="{{ route('home.single.product.show',$product->slug) }}">{{ $product->title }}</a> &gt;

    </div>



    <!--  main  -->

    <script type="text/javascript" src="/themes/simplebootx/style/js/baguettebox.min.js"></script>
    <div class="wpro">

        <!-- new page -->
        <div class="prmain2 prmain2_newpage">

            <div class="zong">

                <div class="pr2r">

                    <div class="img-scroll2 baguetteBoxOne">
                        <div class="img-list2">
                            <img src="{{ asset($product->frontend_image) }}" title="{{ $product->title }}"
                                alt="{{ $product->title }}">


                            <script>
                                $(".img-list2 iframe").height($(".img-list2 iframe").width() * 582 / 582);
                            </script>

                        </div>

                    </div>

                </div>

                <div class="pr2l">

                    <!--<h1 class="margin-bottom:10px">{{ $product->title }}</h1>-->
                    <span><p style="font-size:40px;font-weight:600;color:#0068B7!important;margin-bottom:10px">{{$product->title}}<p></span>

                    <p class="" style="font-size:25px;font-weight:600">Brand: {{ $product->brand }}</p>
                    <p class="" style="font-size:25px;font-weight:600">Model: {{ $product->origin }}</p>
                    <p class=" " style="font-size:25px;font-weight:600">Assembly: {{ $product->assembly }}</p>

                    <div class="jianjie">
                        <p><span style="font-size: 14px;">{!! $product->long_description !!}</span>
                        </p>



                    </div>
                   <div style="margin-top:20px">
                    @if($product->product_catalog)
                    <a href="{{ asset($product->product_catalog) }}" style="margin-top:10px!important;margin-bottom:10px!important;background-color:#0068B7;color:white;border-radius:10px;padding:10px 10px"  download>Download Product Catalog</a>
                  @endif
                   </div>


                </div>

            </div>

        </div>

        <div class="proshow_new" >
            <div class="zong2">
                <div class="show_form shadow_style">
                    <p class="fo4_text">Contact Us</p>
                    <form class="coxin" method="post" action="{{ route('contact.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="int1 int_left xing">
                            <i class="iconfont icon-contact1"></i>
                            <input type="text" placeholder="Name" name="name" id="name">
                        </div>

                        <div class="int1 int_right xing">
                            <i class="iconfont icon-email1"></i>
                            <input type="text" placeholder="E-mail" name="email" id="emails">
                        </div>
                        <div class="int1 int_left">
                            <i class="iconfont icon-tel1"></i>
                            <input type="text" placeholder="Phone" name="phone">
                            <input type="hidden" name="product_name" value="{{ $product->title }}">
                        </div>
                        <div class="clear"></div>
                        <div class="int1 int_w">
                            <i class="iconfont icon-edit"></i>
                            <textarea placeholder="Your Message" name="message"></textarea>
                        </div>

                        <input type="submit" value="SUBMIT" class="int3">

                    </form>
                </div>
            </div>
            @endsection
