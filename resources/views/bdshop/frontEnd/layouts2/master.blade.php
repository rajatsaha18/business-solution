<!DOCTYPE html>
<html lang="en">

<head>
    @php
    $ssetting=App\Models\SiteSetting::first();
    @endphp
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    @if(isset($ssetting->meta_title))
    <title>{{$ssetting->meta_title}}</title>
    @else
    <title>Business Solution</title>

    @endif
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{isset($ssetting->meta_description)?$ssetting->meta_description:''}}">
    <meta name="keywords" content="{{isset($ssetting->meta_keyword)?$ssetting->meta_keyword:''}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    @php
    $general_settings = App\BdGeneralSetting::first();
    @endphp

    @if (isset($general_settings->favicon))
    <link rel="icon" type="image/x-icon" href="{{asset($general_settings->favicon)}}">
    @endif

    <!-- css -->
    {{-- <link rel="stylesheet" href="{{asset('shopfront/css/')}}/bootstrap-theme.min.css" media="all"> --}}
    <link rel="stylesheet" href="{{asset('shopfront/css/')}}/all.min.css" media="all">
    <link rel="stylesheet" href="{{asset('shopfront/css/')}}/font-awesome.min.css" media="all">
    <link rel="stylesheet" href="{{asset('shopfront/css/')}}/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="{{asset('shopfront/css/')}}/style.min.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @yield('css')
    <!--google adsense code-->
    <!--<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9770250993832701" crossorigin="anonymous"></script>-->
    <!--    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9770250993832701"-->
    <!--     crossorigin="anonymous"></script>-->
    <!-- First Ad Size -->
    <!--<ins class="adsbygoogle"-->
    <!--     style="display:block;width:1200px;height:90px;margin:0 auto"-->
    <!--     data-ad-client="ca-pub-9770250993832701"-->
    <!--     data-ad-slot="5253169634"></ins>-->
    <!--<script>-->
    <!--     (adsbygoogle = window.adsbygoogle || []).push({});-->
    <!--</script>-->
    <style>
        .buttonSize {
            padding: 10px !important;
            font-size: 14px !important;
            font-weight: 600 !important;
            background-color: #00006b;
            color: #fff !important;
            border-radius: 3px !important;
            width: 240px !important;
            % !important;
            height: 40px !important;

        }

        .buttonSize:hover {
            background-color: #fff;
            color: #00006b !important;
            border: 1px solid #00006b !important;
            border-radius: 3px !important;
        }

        .buttonSize:focus {
            background-color: #fff;
            color: #00006b !important;
            border: 1px solid #008C3F !important;
            border-radius: 3px !important;
        }

        .buttonSize:active {
            background-color: #fff;
            color: #00006b !important;
            border: 1px solid #008C3F !important;
            border-radius: 3px !important;


        }
    </style>
</head>

<body>
    <style>
        .select2-container--default .select2-search--dropdown .select2-search__field {
            border: 2px solid red;
            outline: red;
        }

        .select2-container--default .select2-search--dropdown .select2-search__field::after {
            content: '.' attr(data-domain);
        }

        .whatsapp-ico {
            fill: white;
            width: 60px;
            height: 60px;
            padding: 3px;
            background-color: #4dc247;
            border-radius: 50%;
            box-shadow: 2px 2px 6px rgb(0 0 0 / 40%);
            /* box-shadow: 2px 2px 11px rgb(0 0 0 / 70%); */
            position: fixed;
            bottom: 20px;
            left: 20px;
            z-index: 10;
        }

        .nav-link {
            color: white !important;
            font-family: Oswald, Arial, Verdana, Helvetica, sans-serif;
        }

        .navbar-light .navbar-toggler {
            color: rgb(254 254 254) !important;
            border-color: rgb(255 255 255 / 95%) !important;
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");

        }

        .leftnav a {

            border-bottom: 1px solid #008C3F !important;
        }

        @media screen and (max-width: 992px) {
            .topnav a.icon {
                float: right;
                display: block;
                margin-top: -45px;
            }

            .hello {
                margin-left: 15px !important;
            }
        }
    </style>

    <!-- top menu -->
    <!-- TOP NAVIGATION BAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#00006b!important;color:white">
        <div class="container-fluid">
            <a href="{{route('info')}}">
                @if (isset($general_settings->logo))
                <img src="{{asset($general_settings->logo)}}" alt="" style="aspect-ratio: 9/1!important; width: 200px; background: transparent;  ">

                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <!-- <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium me-3" href="{{route('info')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium me-3" href="{{route('add-your-company')}}">Add Company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium me-3" href="{{route('show.package')}}">Add Product</a>
                    </li> -->
                    {{-- <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium me-3" href="{{route('add.buysell.post')}}">Property Buy & Sell</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                      <a class="nav-link fs-6 fw-medium me-3" <a href="{{route('halal.investment.index')}}">Halal Investment</a></a>
                    </li> --}}
                    <!-- <div class="dropdown hello">
                        <h5 class="btn   dropdown-toggle text-light" style="font-family: Oswald, Arial, Verdana, Helvetica, sans-serif;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Business Insights
                        </h5>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item text-dark" href="{{route('founder.stories')}}" target="__blank">Founder Stories</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('founder.startup.interview')}}" target="__blank">Founder Interview</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('business.story')}}" target="__blank">Business News</a></li>
                        </ul>
                    </div> -->
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-medium fs-6" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Business Insights
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark fw-bold" href="{{route('founder.stories')}}" target="__blank">Founder Stories</a></li>
                            <li><a class="dropdown-item text-dark  fw-bold" href="{{route('founder.startup.interview')}}" target="__blank">Founder Interview</a></li>
                            <li><a class="dropdown-item text-dark  fw-bold" href="{{route('business.story')}}" target="__blank">Business News</a></li>
                        </ul>
                    </li> -->

                </ul>





















                <!--  -->
                <div class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium me-3" href="{{route('info')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium me-3" href="{{route('add-your-company')}}">Add Company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium me-3" href="{{route('show.package')}}">Add Product</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium me-3" href="{{route('add.buysell.post')}}">Property Buy & Sell</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                      <a class="nav-link fs-6 fw-medium me-3" <a href="{{route('halal.investment.index')}}">Halal Investment</a></a>
                    </li> --}}
                    <!-- <div class="dropdown hello">
                        <h5 class="btn   dropdown-toggle text-light" style="font-family: Oswald, Arial, Verdana, Helvetica, sans-serif;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Business Insights
                        </h5>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item text-dark" href="{{route('founder.stories')}}" target="__blank">Founder Stories</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('founder.startup.interview')}}" target="__blank">Founder Interview</a></li>
                            <li><a class="dropdown-item text-dark" href="{{route('business.story')}}" target="__blank">Business News</a></li>
                        </ul>
                    </div> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-medium fs-6" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Business Insights
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-dark fw-bold" href="{{route('founder.stories')}}" target="__blank">Founder Stories</a></li>
                            <li><a class="dropdown-item text-dark  fw-bold" href="{{route('founder.startup.interview')}}" target="__blank">Founder Interview</a></li>
                            <li><a class="dropdown-item text-dark  fw-bold" href="{{route('business.story')}}" target="__blank">Business News</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium me-3" href="{{route('info-product')}}">Products/Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium me-3" href="{{route('all.blogs')}}">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6 fw-medium" href="{{route('info-contact')}}">Contact</a>
                    </li>

                </div>
            </div>
        </div>
    </nav>
    <!-- <div class="topnav clearfix" id="myTopnav" style="background-color:#001d34!important">
        <div class="navbar-left">
            <a href="{{route('info')}}">Home</a>

            <a href="{{route('add-your-company')}}">Company Details</a>
            <a href="{{route('show.package')}}">Product Display</a>
            <a href="{{route('add.buysell.post')}}">Property Buy & Sell</a>
            <a href="{{route('halal.investment.index')}}">Halal Investment</a>


            <div class="dropdown hello">
                <h5 class="btn   dropdown-toggle text-light" style="font-family: Oswald, Arial, Verdana, Helvetica, sans-serif;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Business Insights
                </h5>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item text-dark" href="{{route('founder.stories')}}" target="__blank">Founder Stories</a></li>
                    <li><a class="dropdown-item text-dark" href="{{route('founder.startup.interview')}}" target="__blank">Founder Interview</a></li>
                    <li><a class="dropdown-item text-dark" href="{{route('business.story')}}" target="__blank">Business News</a></li>
                </ul>
          </div>
        </div>

        <div class="navbar-right">
            <a href="" class="icon toggle-menu">Menu ☰</a>

            <a href="{{route('info-product')}}">Products/Services</a>
            <a href="{{route('all.blogs')}}">Blogs</a>
            <a href="{{route('info-contact')}}">Contact</a>
        </div>
    </div> -->

    <!-- header -->
    <div id="main">
        <div class="container">
            <div class="row justify-content-between">
                <a class="buttonSize" href="{{route('home')}}">
                    << Back to Business Solution</a>
                        <div class="col-lg-2 col-md-2 col-sm-10 col-xs-10 padding-top-bottom-5 logo">
                            <a href="{{route('info')}}">
                                @if (isset($general_settings->logo))
                                <!-- <img src="{{asset($general_settings->logo)}}" alt="" style="height: 61px;width:171px"> -->

                                @endif
                            </a>

                        </div>
                        @php
                        $navbar_banner = App\AdvertiseBanner::where('advertise_category_id',6)->where('advertise_placement_id',8)->first();
                        @endphp

                        <!-- @if($navbar_banner)
                        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 padding-top-bottom-5">
                            <a href="{{$navbar_banner->url}}" target="_blank"><img src="{{asset($general_settings->header_banner)}}" alt=""></a>
                        </div>
                        @endif -->
            </div>
        </div>
    </div>
    <!-- header -->




    <!-- alphabets -->

    @yield('content')

    <!--footer-->
    <footer>
        <div class="footer-bottom" style="background-color:#00006b!important">
            <div class="container">
                @php
                $categories = App\Models\PageCategory::where('status',1)->orderBy('id','desc')->take(1)->get();
                $pages = App\Models\Page::where('status',1)->orderBy('id','desc')->get();
                $cate = App\Models\PageCategory::where('slug','important-link')->where('status',1)->first();
                $pages = App\Models\Page::where('status',1)->where('category_id',$cate->id)->get();
                @endphp
                <div class="row">
                    @foreach ($categories as $item)
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-bottom-20 padding-top-20 text-left">
                        <div class="padding-bottom-10 margin-bottom-10 border-bottom-gray">
                            <h4 class="text-light fw-bolder">Quick Link</h4>
                        </div>

                        <i class="fa fa-home" aria-hidden="true"></i><a href="{{route('info')}}">Home</a><br>

                        <i class="fab fa-product-hunt"></i>

                        <a href="{{route('info-product')}}">Products/Services</a><br>
                        <i class="fab fa-blogger"></i>
                        <a href="{{route('all.blogs')}}">Blogs</a><br>
                        <i class="fas fa-phone-square-alt"></i>
                        <a href="{{route('info-contact')}}">Contact</a><br>
                    </div>
                    @endforeach
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-bottom-20 padding-top-20 text-left">
                        <div class="padding-bottom-10 margin-bottom-10 border-bottom-gray">
                            <h4 class="text-light fw-bolder">About Us</h4>
                        </div>
                        @php
                        $sitesetting=App\Models\SiteSetting::first();
                        @endphp
                        <div>
                            <p>{{isset($sitesetting->about)?$sitesetting->about:''}}</p>
                        </div>


                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 padding-bottom-20 padding-top-20 text-left">
                        <div class="padding-bottom-10 margin-bottom-10 border-bottom-gray">
                            <h4 class="text-light fw-bolder">Major Sections</h4>
                        </div>
                        {{-- @foreach($pages as $page)

                        <i class="fas fa-chevron-right"></i><a href="{{route('page-details',$page->slug)}}">{{$page->name}}</a><br>


                        @endforeach --}}
                        @if(auth()->user() != null && auth()->user()->role_id==2)
                        <i class="fas fa-chevron-right"></i><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                        </a>
                        <br>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <i class="fas fa-chevron-right"></i><a href="{{route('user.info-profile')}}">My Panel</a><br>
                        @else
                        <i class="fas fa-sign-in-alt"></i><a class="btn btn-light btn-sm ms-2" style="color:black!important;font-weight:600" href="{{route('info-login')}}" target="_blank">Product Advertise Login</a><br>
                        @endif


                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 padding-bottom-20 padding-top-20 text-left">
                        <div class="padding-bottom-10 margin-bottom-10 border-bottom-gray">
                            <h4 class="text-light fw-bolder">Service</h4>
                        </div>
                        {{-- <i class="fas fa-search"></i><a href="#">Our
                            Services</a><br> --}}
                        <i class="fas fa-hand-point-right"></i> <a href="{{route('add-your-company')}}">Add Company</a><br>
                        <i class="fas fa-hand-point-right"></i> <a href="{{route('show.package')}}">Add Product</a><br>
                        {{-- <i class="fas fa-hand-point-right"></i> <a href="{{route('add.buysell.post')}}">Property Buy & Sell</a><br> --}}
                        {{-- <i class="fas fa-hand-point-right"></i> <a href="{{route('halal.investment.index')}}">Halal Investment</a><br>
                        <i class="fas fa-hand-point-right"></i>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fw-medium fs-6" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Business Insights
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item text-dark fw-bolder" href="{{route('founder.stories')}}" target="__blank" style="color: #151515!important;">Founder Stories</a></li>
                                <li><a class="dropdown-item text-dark  fw-bolder" href="{{route('founder.startup.interview')}}" target="__blank" style="color: #151515!important;">Founder Interview</a></li>
                                <li><a class="dropdown-item text-dark  fw-bolder" href="{{route('business.story')}}" target="__blank" style="color: #151515!important;">Business News</a></li>
                            </ul> --}}
                        </li><br><br>
                        <div>
                            <form action="{{ route('newsletter.store.submit') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" style="padding:5px" placeholder="Enter Your Address" required>
                                </div>
                                <div class="d-block mx-auto">
                                    <button type="submit" class="btn btn-light fw-bolder mt-2 mb-2 btn-sm">Subscribe</button>
                                </div>
                            </form>
                        </div>
                        @php
                        $social_links = App\BdSocialLink::first();
                        @endphp
                        <div class="d-flex">
                            <!-- <div class="padding-bottom-10 margin-bottom-10 border-bottom-gray">
                            <h4 class="text-orange">Social Links</h4>
                        </div> -->
                            <a href="{{isset($social_links->facebook)?$social_links->facebook:''}}" target="_blank"><i class="fa-brands fa-square-facebook fs-4 text-white "></i></a>
                            <a href="{{isset($social_links->linkdin)?$social_links->linkdin:''}}" target="_blank"><i class="fa-brands fa-linkedin fs-4 text-white "></i></a>
                            <a href="{{isset($social_links->youtube)?$social_links->youtube:''}}" target="_blank"><i class="fa-brands fa-square-youtube fs-4 text-white "></i></a>
                            <a href="{{isset($social_links->youtube)?$social_links->twitter:''}}" target="_blank"><i class="fa-brands fa-square-x-twitter fs-4 text-white "></i></a>

                        </div>
                        <!-- <br> -->
                        <!-- <a href="#">TOP</a> -->
                        <br>


                        <div class="padding-bottom-10 margin-bottom-10 border-bottom-gray"></div>

                    </div>


                </div>
            </div>
        </div>
        <!-- Messenger Chat Plugin Code -->
        <div id="fb-root"></div>

        <!-- Your Chat Plugin code -->
        <div id="fb-customer-chat" class="fb-customerchat">
        </div>

        <script>
            var chatbox = document.getElementById('fb-customer-chat');
            chatbox.setAttribute("page_id", "101540249407042");
            chatbox.setAttribute("attribution", "biz_inbox");
        </script>

        <!-- Your SDK code -->
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true,
                    version: 'v15.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div style="float:left!important">
            <a href="https://wa.link/e2dy59" target="_blank">
                <svg viewBox="0 0 32 32" class="whatsapp-ico">
                    <path d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z" fill-rule="evenodd">
                    </path>
                </svg>
            </a>
        </div>
        <div class="footer-end pt-3 pb-3  text-light" style="background-color:#00006b">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <a href="#" class="text-light">© 2021-<script>
                                document.write(new Date().getFullYear())
                            </script></a>
                        <a href="{{route('home')}}" class="fw-bolder fs-6" style="color:white">Business Solution</a>
                        <small class="text-lighter">All Rights Reserved</small>
                    </div>
                    <!-- <div class="col-md-6 col-sm-12 text-center">
                        <div>
                            <span id="head" class="text-light "></span><a href="" id="changetext" target="__blank"><span id="site" class="fs-6 fw-bolder" style="color:#008C3F"> </span></a>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </footer>
    <script>
        var head = ["The Largest business portal in bangladesh -- ", "The site is designed & hosted by -- ", "Powered by -- "];
        var site = ["TradeInfo", "SaraSoftware", "TradeInfo"];
        var link = ["https://tradeinfo.com.bd/", "https://sarasoftware.com.bd/", "https://tradeinfo.com.bd/"];
        var counter = 0;
        var elem_one = document.getElementById("head");
        var elem_two = document.getElementById("site");
        var elem_three = document.getElementById("changetext");

        var inst = setInterval(change, 2000);

        function change() {
            elem_one.innerHTML = head[counter];
            elem_two.innerHTML = site[counter];
            elem_three.href = link[counter];
            elem_three.setAttribute("target", "__blank");
            counter++;
            if (counter >= head.length) {
                counter = 0;
                // clearInterval(inst); // uncomment this if you want to stop refreshing after one cycle
            }
        }
    </script>
    <!--footer-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <script src="{{asset('shopfront/js/')}}/bootstrap.min.js"></script>
    <script src="{{asset('shopfront/js/')}}/jquery-3.6.1.min.js"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- <script src="{{asset('shopfront/js/')}}/bootstrap.bundle.min.js"></script> --}}
    @if( request()->is('category/*') || request()->is('search') || request()->is('company/*') || request()->is('advance-search-result') || request()->is('country-post/*')|| request()->is('all-companies')|| request()->is('company-detail/*'))

    @else
    <script src="{{asset('shopfront/js/')}}/all.min.js"></script>
    @endif
    <script src="{{asset('shopfront/js/')}}/main.js"></script>
    <script src="{{asset('massage/toastr/toastr.js')}}"></script>
    
    <!--Not Copy Any Content in website code-->
   
    <!--Not Copy Any Content in website code-->


    @yield('js')
    {!! Toastr::message() !!}


</body>

</html>