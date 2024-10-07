<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta content="telephone=no" name="format-detection" />
    <title>Empex</title>
    <meta name="keywords" content="Empex" />
    <meta name="description" content="Empex" />
    @include('frontend.layouts.head')
    <style>
        body{
            /* line-height:0.1; */
        
        }
        /* .daohang>li{
            padding-bottom:20px;
        } */
    </style>

</head>

<body>


    <!--  nav  -->
    <div class="xnav">
        <div class="nav" id="nav" onClick="doAct(this);">
            <span class="nav1"></span>
            <span class="nav2"></span>
            <span class="nav3"></span>
        </div>
        <div class="smdaohang" id="smdaohang">
            <ul class="topnav">
                <form action="{{ route('show.product.by.search.name') }}" name="productform" method="get" class="fix">
                    <input type="text" placeholder="Search..." class="iptc l" name="s">
                    <i class="iconfont icon-search4"></i>
                    <input type="submit" value="" class="ipsc r">
                </form>
                <li>
                    <a href="{{ route('home.index') }}" title="Home">Home</a>
                </li>
                <li>
                    <a href="{{ route('shop.index') }}" title="Products">Products</a>

                </li>
                <li>
                    <a href="{{ url('page-details/about-us') }}" title="About Us">About Us</a>

                </li>
                <li>
                    <a href="#" title="About Us">Msg From CEO</a>

                </li>
                 <li>
                    <a href="{{ url('team') }}" title="About Us">Our Team</a>

                </li>
                <li>
                    <a href="{{ url('blog') }}"
                        title="Radiology">Blogs</a>
                </li>
                <li>
                    <a href="{{ url('gallery') }}"
                        title="Cardiovascular">Gallery & Recognitions</a>
                </li>
                <li>
                    <a href="{{ url('video') }}"
                        title="Women&#039;s Health">Video's</a>
                </li>

                <li>
                    <a href="{{ route('contact.index') }}" title="Contact Us">Contact Us</a>

                </li>
            </ul>
        </div>
    </div>


    @include('frontend.layouts.header')

    @yield('content')

    @include('frontend.layouts.footer2')
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
 @include('frontend.layouts.script')
 @yield('script')

</body>

</html>
