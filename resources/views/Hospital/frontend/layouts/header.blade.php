<style>
    .categories-block {
        margin-right: 0px !important;
    }

    @media(max-width:600px) {
        .cat_text h4 {
            font-size: 14px !important;
        }

        #logo-img {
            /* margin-bottom: -20px !important; */
        }
    }

    @media(min-width:600px) {
        #logo-img {
            width: 100%;
            height: 40px;
            object-fit: cover;
        }

    }

    @media(max-width:576px) {
        .dropdown-item::before {
            transform: rotate(-90deg);
        }

    }

    .navbar-nav li:hover>ul.dropdown-menu {
        display: block;

    }

    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
        top: 0;
        margin-top: -5px;
        left: 100%;
    }

    .dropdown-menu>li>a:hover::after {
        text-decoration: underline;
        transform: rotate(-90deg);
    }

    /*=====here use navbar nav-text color white start =====*/
    .navbar-dark .navbar-nav .nav-link,
    .navbar-dark .navbar-nav .dropdown-menu {
        color: white;
        /* Change this to your desired text color */
    }

    #header.sticky {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    /* .navbar{
    position:sticky!important;
    top:0;
    z-index: 1000;
} */
    /*=====here use navbar nav-text color white end =====*/

    /* .navbar ul li a{
    color:white;
}
.navbar ul li a:hover{
    color:#3078A6;
} */


    @media (max-width: 575px) {
        .backButtonShow {
            display: none;
        }

        /* .backButtonShowSmallDevice {
            display: none;
        } */

        .logoSize {
            width: 160px !important;
            height: auto !important;
            padding-left: 5px !important;
            padding-top: 0px !important;
        }

        .navBarPadding {
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .backButtonShow {
            display: none;
        }

        /* .backButtonShowSmallDevice {
            display: none;
        } */
        .logoSize {
            width: 200px !important;
            height: auto !important;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .backButtonShow {
            display: none;
        }

        /* .backButtonShowSmallDevice {
            display: none;
        } */
        .logoSize {
            width: 200px !important;
            height: auto !important;
        }

        .navBarPadding {
            padding-top: 0px !important;
            padding-bottom: 0px !important;
        }
    }

    @media (min-width: 992px) and (max-width: 1199px) {

        /* .backButtonShow {
            display: none;
        } */
        .backButtonShowSmallDevice {
            display: none;
        }

        .logoSize {
            width: 200px !important;
            height: auto !important;
        }

        .navBarPadding {
            padding-top: 15px !important;
            padding-bottom: 15px !important;
        }

        .site-branding {
            padding-top: 18px;
        }
    }

    @media (min-width: 1200px) and (max-width: 1399px) {

        /* .backButtonShow {
            display: none;
        } */
        .backButtonShowSmallDevice {
            display: none;
        }

        .logoSize {
            width: 290px !important;
            height: auto !important;
            padding-left: 50px !important;
            padding-top: 0px !important;
            padding-right: 20px;
        }

        .navBarPadding {
            padding-top: 15px !important;
            padding-bottom: 15px !important;
        }

        .btnSpace {
            margin: -20px;
        }

        .site-branding {
            padding-top: 22px;
        }

        .searchBarSpace {
            margin: 0px;
        }
    }

    @media (min-width: 1400px) {


        .backButtonShowSmallDevice {
            display: none;
        }

        .logoSize {
            width: 400px !important;
            height: auto !important;
            padding-left: 60px !important;
            padding-top: 0px !important;
        }

        .btnSpace {
            margin: 10px;
        }

        .searchBarSpace {
            margin: 10px;
        }

        /* .navBarPadding {
            padding-top: 15px !important;
            padding-bottom: 15px !important;
        } */
    }
</style>

<header id="masthead" class="header ttm-header-style-01">
    <!-- top_bar -->
    <meta property="og:url" content="https://businesssolution.com.bd/page-url" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Page Title" />
<meta property="og:description" content="Brief description of the page" />
<meta property="og:image" content="https://businesssolution.com.bd/image.jpg" />


    <div class="top_bar" style="display:none!important">
        <div class="container">
            <div class="row">
                <div class="col d-md-flex flex-row">
                    <div class="top_bar_contact_item">Winter-Season Sale Up To <span class="ttm-textcolor-highlight"> 25% OFF </span> Use Coupne Code <div class="coupen_code ttm-textcolor-highlight">“SALEON”</div>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- top_bar end-->
    <style>
        .header_search .header_search_content {

            background-color: #bcb8b8 !important;
            color: white !important;
        }

        ::placeholder {
            color: white !important;
        }

        #search_block_top #search_query_top {
            background-color: #bcb8b8 !important;
            color: white !important;
        }

        .header_search #search_block_top #searchbox {
            background: #bcb8b8 !important;


        }

        element.style {}

        .header_search #search_category {
            background: #bcb8b8 !important;
            color: white;
        }

        .active a {
            color: black !important;
            font-weight: 600 !important;
        }

        nav.menu .mega-menu-item.megamenu-fw {
            position: static;
        }

        .menu-vertical li.parent .megamenu ul.list-unstyled li.title>a {

            width: 200px;

        }

        .cat_menu h4 {
            color: white;
        }

        .cat_menu h4:hover {
            color: white !important;
        }

        nav.menu ul.nav>li>a {
            font-size: 16px !important;
        }

        .product .product-content-box .product-title h2 {
            padding: 0;
            margin: 0;
            font-size: 17px;
            padding-bottom: 0;
            line-height: 24px;
            font-weight: 400;
            -webkit-transition: all 0.3s ease 0s;
            -moz-transition: all 0.3s ease 0s;
            -ms-transition: all 0.3s ease 0s;
            -o-transition: all 0.3s ease 0s;
            transition: all 0.3s ease 0s;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: normal;
            display: block;
            height: 100px !important;

        }

        nav.menu ul.nav>li.mega-menu-item>a.mega-menu-link:after {

            font-size: 18px;
            font-weight: 600 !important;
            color: white !important;
            opacity: 1;

        }

        .categories-block:after {
            padding-right: 10px;
        }

        .cat a:hover {
            color: #193D87 !important;
        }

        @media (max-width: 600px) {
            .menu-mobile ul li a {
                color: black !important;
            }

            .menu-mobile .active a {
                color: black !important;
                font-weight: 600 !important;
            }

            .menu-mobile .active a:hover {
                color: #193D87 !important;
                font-weight: 600 !important;
            }

            .fa-times:before {
                display: none !important;
            }

            .menu-vertical li a.close-side {
                display: none !important;
            }

        }

        /* #navbar{
    position:sticky!important;
    top:0!important;
} */
    </style>
    <!-- header_main -->
    <div class="header_main p-0" style="background-color:white!important;margin-bottom:-15px!important">
        <div class="px-3 py-0">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-6">
                    <!-- site-branding -->
                    <div class="site-branding ">
                        <a class="home-link px-0" href="{{route('hospital.home.index')}}" title="Fixfellow" rel="home">
                            @if(isset($sitesetting->logo))
                            <img id="logo-img" class="img-center logoSize" src="{{asset($sitesetting->logo)}}" alt="logo-img">
                            @endif
                        </a>
                    </div><!-- site-branding end -->
                    <div class="site-branding ml-2 backButtonShow">
                        <a class="btn btn-primary text-black px-2 py-1 fw-bolder align-items-center btnSpace" style="width:250px; " href="{{route('home')}}">
                            << Back to Business Solution</a>
                    </div>
                    <!-- site-branding end -->
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 order-3 text-lg-left text-right mb-4">
                    <div class="header_search pt-3 pb-1"><!-- header_search -->
                        <div class="header_search_content py-0 ">
                            <div id="search_block_top" class="search_block_top searchBarSpace">
                                <form id="searchbox" method="get" class="d-flex" action="{{route('hospital.show.product.by.search.name')}}">
                                    <input class="search_query form-control" type="text" id="search_query_top" name="s" placeholder="Search" value="" required>
                                    <div class="d-flex justify-content-end">
                                        <div class="categories-block">
                                            <select id="search_category" name="search_category" class="form-control" required>
                                                <option value="all"></option>
                                                {{-- @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option></a>

                                                @endforeach --}}

                                            </select>
                                        </div>
                                        <button type="submit" name="submit_search" class="btn btn-default button-search" style="background-color:#0072EF!important;color:white!important"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- header_search end -->
                </div>

                {{-- <div class="col-lg-3 col-9 order-lg-3 order-2 text-lg-left text-right">
                    <!-- header_extra -->
                    <div class="header_extra d-flex flex-row align-items-center justify-content-end" style="display:none!important">
                        <div class="account dropdown" >
                            <div class="d-flex flex-row align-items-center justify-content-start">
                                <div class="account_icon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="account_content">
                                    <div class="account_text"><a href="#">Sign In</a></div>
                                </div>
                            </div>
                            <div class="account_extra dropdown_link" data-toggle="dropdown">Account</div>
                            <aside class="widget_account dropdown_content">
                                <div class="widget_account_content">
                                    <ul>
                                        <li><i class="fa fa-sign-in mr-2"></i><a href="login.html">Login</a></li>
                                        <li><i class="fa fa-sign-in mr-2"></i><a href="register.html">Register</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div><!-- header_extra end -->
                </div> --}}
            </div>

        </div>

    </div><!-- haeder-main end -->
    <!-- site-header-menu -->

    <nav id="header" class="navbar navbar-expand-lg navbar-dark navBarPadding " style="background-color:#0328AF!important;font-size:17px!important; color:green!important;">
        <div class="container-fluid">
            {{-- <a class="navbar-brand" href="#">Logo</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="site-branding ml-2 backButtonShowSmallDevice">
                <a class="btn btn-primary text-black px-2 py-1 fw-bolder align-items-center" style="width:250px; " href="{{route('home')}}">
                    << Back to Business Solution</a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('hospital.home.index')}}"><i class="fa-solid fa-house"></i> Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Product & Service
                        </a>
                        @php
                        $categories=DB::table('hospital_categories')->where('status',1)->get();
                        @endphp
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                            @foreach($categories as $category)
                            @php
                            $subcategories=DB::table('hospital_sub_categories')->where('hospital_category_id',$category->id)->get();
                            @endphp
                            @if(count($subcategories) > 0)
                            <li class="dropdown-submenu">
                                <a class="dropdown-item dropdown-toggle" href="{{route('hospital.show.product.by.category',$category->slug)}}">{{$category->name}}</a>
                                <ul class="dropdown-menu" style="overflow-y:scroll;overflow-x: hidden;height:500px">

                                    @foreach($subcategories as $subcategory)
                                    @php
                                    $subSubCategories=DB::table('hospital_sub_sub_categories')->where('hospital_sub_category_id',$subcategory->id)->get();
                                    @endphp
                                    @if(count($subSubCategories) > 0)
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item dropdown-toggle" href="{{route('hospital.show.product.by.subcategory',$subcategory->slug)}}">{{$subcategory->name}}</a>
                                        <ul class="dropdown-menu">
                                            @foreach($subSubCategories as $subSubCategory)
                                            <li><a class="dropdown-item" href="{{route('hospital.show.product.by.subsubcategory',$subSubCategory->slug)}}">{{$subSubCategory->name}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    @else
                                    <li><a class="dropdown-item" href="{{route('hospital.show.product.by.subcategory',$subcategory->slug)}}">{{$subcategory->name}}</a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </li>
                            @else
                            <li><a class="dropdown-item" href="{{route('hospital.show.product.by.category',$category->slug)}}">{{$category->name}}</a></li>
                            @endif
                            @endforeach
                        </ul>

                    </li>

                    @php
                    $page_categories = App\Models\HospitalPageCategory::where('status',1)->where('slug','quick-link')->first();

                    $pages = App\Models\HospitalPage::where('status',1)->where('hospital_category_id',$page_categories->id)->get();
                    @endphp
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            @foreach($pages as $page)
                            <li><a class="dropdown-item" href="{{route('hospital.page-details',$page->slug)}}">{{$page->name}}</a></li>
                            @endforeach
                            <li><a class="dropdown-item" href="{{route('hospital.team')}}">Management & Team</a></li>
                            <!--<li><a class="dropdown-item" href="{{route('hospital.branches')}}">Our Branches</a></li>-->

                        </ul>


                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('hospital.shop.index')}}">All Products</a>
                    </li>




                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blog & Media
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{route('hospital.blog.index')}}">Blog</a></li>
                            <li><a class="dropdown-item" href="{{route('hospital.gallery')}}">Gallery</a></li>
                            <li><a class="dropdown-item" href="{{route('hospital.video')}}">Video</a></li>
                        </ul>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('hospital.contact.index')}}"><i class="fa-regular fa-address-book"></i> Contact Us</a>
                    </li>

                </ul>


            </div>





        </div>
    </nav>



    <!-- site-header-menu end -->
</header><!--header end-->
<script>
    const header = document.querySelector("#header");
    const sticky = header.offsetTop;

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > sticky) {
            header.classList.add('sticky');
        } else {
            header.classList.remove('sticky');
        }
    });


    function add(slug) {
        let url = "{{ route('hospital.show.product.by.category','slug')}}";
        url = url.replace('slug', slug);
        document.location.href = url;
    }
</script>