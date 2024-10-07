@extends('bdshop.frontEnd.layouts.master')

@section('content')
<!--top address bar-->

<div class="container">
    <div class="row margin-bottom-20 margin-top-10">
        <div class="col-md-2">
            <div class="row">
                <div class="clearfix"></div>
                <!--left category menu-->
                <div class="col-md-12 leftmenu-grid">
                    <div class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-10 text-center left-menu-heading">
                        <h4>Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">
                        @foreach ($categories as $item)
                            <a href="{{route('info-sub-category',$item->slug)}}" target="_blank">{{$item->name}}</a>
                        @endforeach


                        {{-- <a href="#">
                            <div class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-15 text-center">
                                <h4>Our Services</h4>
                            </div>
                        </a>

                        <a href="https://www.bdtradeinfo.com/classified-listing">Classified Listing</a>
                        <a href="https://www.bdtradeinfo.com/advertise-with-us">Banner Advertisement</a>
                        <a href="https://www.bdtradeinfo.com/software-service">Software Development</a>
                        <a href="https://www.bdtradeinfo.com/web-development">Website Design & Development</a>
                        <a href="https://www.bdtradeinfo.com/domain-registration">Domain Registration</a>
                        <a href="https://www.bdtradeinfo.com/web-hosting">Web Hosting</a>
                        <a href="https://www.bdtradeinfo.com/mobile-apps">Mobile Apps Development</a>
                        <a href="https://www.bdtradeinfo.com/google-ad-services">Google & Youtube Promotion</a>
                        <a href="https://www.bdtradeinfo.com/facebook-boosting">Facebook Boosting</a>
                        <a href="https://www.bdtradeinfo.com/logo-design">Logo & Graphic Design</a> --}}

                    </div>
                    <script>
                    function myFunction1() {
                        var x = document.getElementById("myTopnav1");
                        if (x.className === "leftnav") {
                            x.className += " responsive";
                        } else {
                            x.className = "leftnav";
                        }
                    }
                    </script>
                </div>

            </div>
        </div>

        <div class="col-md-10">
            <div class="div_style2">
                {{-- <div class="row">
                    <!--ad classic & classic mini-->
                    <!--C-->
                    <div class="ad-classic1 margin-top-10 margin-bottom-10">
                        <a href="https://www.bdtradeinfo.com/goadurl/231" target="_blank"><img src="https://www.bdtradeinfo.com/public/saimg/ad_psebdC.gif" class="img-classic" alt="Power Solution Engineering" title="Power Solution Engineering"></a>
                    </div>
                    <!--C1-->
                    <div class="ad-classic-mini margin-top-10 margin-bottom-10 text-right">
                        <a href="https://www.bdtradeinfo.com/goadurl/298" target="_blank"><img src="https://www.bdtradeinfo.com/public/saimg/ad-195x60px-single.gif" class="img-classic-mini" alt="T-Series Solutions" title="T-Series Solutions"></a>
                    </div>
                </div> --}}
                <div class="skiptarget"><a id="maincontent">-</a></div>
                <div class="row" >
                    <div class="col-md-12 col-xs-12 div_style3">
                        <div class="col-md-12 col-xs-12 mainbody-grid div_style4">
                            <h1 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">{!! $page_details->name !!}</h1>
                            @php
                                $contact = App\InfoContactUs::first();
                            @endphp
                        </div>
                        <div class="main_content2">
                            <p>{!! $page_details->description !!}</p>
                        </div>
                     </div>
                </div>
                <!--ad bottom-->
        <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center margin-top-10">
        </div>
     </div>
    </div>

    </div>
     <div class="clearfix"></div>
    </div>

    <div class="total-ads main-grid-border">
    <div class="container">
    </div>
</div>
@endsection
