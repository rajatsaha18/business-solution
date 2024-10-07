<!--footer start-->
<style>
    .footer .social-icons li>a {
        padding: 0px 5px 0px 5px;

        border-radius: 80%;
    }

    .res-email {
        margin-left: -150px !important
    }

    .footer.ttm-bg.ttm-bgimage-yes>.ttm-bg-layer {

        background: #0b520b26;
    }

    .widget-title {
        border-color: #0328AF;
    }

    @media(max-width:600px) {
        .res-email {
            margin-left: 0px !important
        }

        .footer .widget .widget-title:after {
            left: 30%;
        }
    }
    .contact_text
    {
        font-size:22px!important;
    }
</style>
<footer class="footer widget-footer ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey ttm-textcolor-white clearfix" style="background-color:#0328AF">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="first-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <!-- @if (isset($sitesetting->logo))
                    <img id="footer-logo-img" class="img-center mb-3" src="{{ asset($sitesetting->logo) }}"
                        style="width:70%;height:35px;"alt="">
                   @endif -->
                    <h3 class="widget-title" style="margin-top:30px">About Us</h3>
                    <div class="textwidget widget-text">
                        <p class="pb-10 text-light">{{ isset($sitesetting->about_us) ? $sitesetting->about_us : '' }}</p>
                    </div>

                </div>
                <div class="col-md-4 col-sm-12">
                    @php
                    $page_categories = App\Models\HospitalPageCategory::where('status',1)->take(2)->get();
                    $pages = App\Models\HospitalPage::where('status',1)->get();
                    @endphp
                    <div class="row">
                        @foreach ($page_categories as $items)
                        @php
                        $pages = App\Models\HospitalPage::where('hospital_category_id',$items->id)->where('status',1)->get();
                        @endphp
                        <div class="col-sm-12 col-md-12">
                            <div class="widget widget_nav_menu clearfix" style="text-align: left!important;">
                                <h3 class="contact_text">{{$items->name}}</h3>
                                <ul class="menu-footer-quick-links">
                                    <li><a href="{{route('hospital.blog.index')}}">Our Latest Blogs</a>
                                    </li>
                                    @foreach ($pages as $item)
                                    @if($items->slug == 'our-sister-concerns')
                                    <li><a href="{{$item->link}}" target="_blank">{{ $item->name}}</a>
                                    </li>
                                    @else
                                    <li><a href="{{route('hospital.page-details',$item->slug)}}">{{ $item->name}}</a>
                                    </li>


                                    @endif
                                    @endforeach

                                    </li>


                                </ul>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="widget widget_nav_menu clearfix">
                        <h3 class="contact_text mb-3" style="text-align: left!important;">Contact Information</h3>


                        <ul class="widget_info_text mb-4" style="text-align: left!important;">
                            <li style="text-align: left!important;"><i class="fa fa-map-marker"></i>
                                <span class="text-light">{{ isset($sitesetting->address) ? $sitesetting->address : '' }}</span>
                            </li>

                        </ul>
                        <!-- <div>

                            <ul class="widget_info_text mb-4 text-center">
                                <li class=""><i class="fa-regular fa-envelope"></i>
                                    @if(isset($sitesetting->email))

                                    @if(!str_contains($sitesetting->email,','))

                                <li class="res-email"> <span class="text-light mx-4">{{ isset($sitesetting->email) ? $sitesetting->email : '' }}</span></li>

                                @else
                                @php
                                $emails=explode(",",$sitesetting->email);
                                @endphp
                                @foreach($emails as $email)
                                <li><span class="text-light"> {{$email}}</span></li>


                                @endforeach
                                @endif

                                @endif
                                </li>

                            </ul>
                        </div> -->
                        <ul class="widget_info_text mb-4" style="text-align: left!important;">
                            <li style="text-align: left!important;"><i class="fa-regular fa-envelope" style="font-size:medium;"></i>
                                <span class="text-light">{{ isset($sitesetting->email) ? $sitesetting->email : '' }}</span>
                            </li>
                        </ul>
                        <ul class="widget_info_text mb-4" style="text-align: left!important;">
                            <li style="text-align: left!important;"><i class="fa fa-phone"></i>
                                <span class="text-light">{{ isset($sitesetting->phone) ? $sitesetting->phone : '' }}</span>
                            </li>
                        </ul>

                        <div class="col-md-12 col-sm-12 widget-area">
                            <div class="social-icons social-hover widget">
                                <ul class="list-inline">
                                    <li class="social-facebook"><a class="tooltip-top" href="{{ isset($sitesetting->facebook) ? $sitesetting->facebook : '' }}" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top" href="{{ isset($sitesetting->twitter) ? $sitesetting->twitter : '' }}" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-gplus"><a class="tooltip-top" href="{{ isset($sitesetting->google) ? $sitesetting->google : '' }}" data-tooltip="Google+"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a class="tooltip-top" href="{{ isset($sitesetting->linkedin) ? $sitesetting->linkedin : '' }}" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
    <div class="col-12 text-center pb-4">
        <div>
            <span>Business Solution All Rights Reserved</span>
        </div>
    </div>
    <!--<div class="col-12 text-center pb-4">-->
    <!--    <div>-->
    <!--        <span id="head" class="text-light fw-bolder" style="font-size:15px!important"></span><a href="" id="changetext" target="__blank"><span id="site" class="fs-6 fw-bolder" style="color:#FFD200;font-size:18px;font-weight:600"> </span></a>-->
    <!--    </div>-->
    <!--</div>-->
</footer>
<script>
    // var head = ["Designed & hosted by -- ", "Powered by -- ", "Powered by -- "];
    // var site = ["SaraSoftware", "TradeInfo", "Business Solution"];
    // var link = ["https://sarasoftware.com.bd/", "https://tradeinfo.com.bd/", "https://businesssolution.com.bd/home"];
    // var counter = 0;
    // var elem_one = document.getElementById("head");
    // var elem_two = document.getElementById("site");
    // var elem_three = document.getElementById("changetext");

    // var inst = setInterval(change, 2000);

    // function change() {
    //     elem_one.innerHTML = head[counter];
    //     elem_two.innerHTML = site[counter];
    //     elem_three.href = link[counter];
    //     elem_three.setAttribute("target", "__blank");
    //     counter++;
    //     if (counter >= head.length) {
    //         counter = 0;
    //         // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
    //     }
    // }
</script>
<!--footer end-->