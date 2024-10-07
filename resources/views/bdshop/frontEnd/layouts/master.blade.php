<!DOCTYPE html>
<html lang="en">

<head>
    @php
    $businessSiteSetting = DB::table('business_home_site_settings')->first();
    @endphp
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    @if(isset($businessSiteSetting->meta_title))
    <title>{{$businessSiteSetting->meta_title}}</title>
    @else
    <title>Business Solution</title>

    @endif
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{isset($businessSiteSetting->meta_description)?$businessSiteSetting->meta_description:''}}">
    <meta name="keywords" content="{{isset($businessSiteSetting->meta_keyword)?$businessSiteSetting->meta_keyword:''}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!--summernote css-->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

    @php
    $general_settings = App\BdGeneralSetting::first();
    $businessSiteSetting = App\Models\BusinessHomeSiteSetting::first();
    @endphp

    @if (isset($businessSiteSetting->favicon))
    <link rel="icon" type="image/x-icon" href="{{asset($businessSiteSetting->favicon)}}">
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


    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script> --}}


    @yield('css')



    {{-- <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href=""> --}}

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

</head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-B6XRXQMN37"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-B6XRXQMN37');
</script>

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

        @media screen and (max-width: 768px) {
            .topnav a.icon {
                float: right;
                display: block;
                margin-top: -45px;
            }

            .hello {
                margin-left: 15px !important;
            }

            .nav-menubar {
                /* margin-left:  */
            }

            .socialLink {
                display: flex !important;
                flex-direction: row;
            }

            .nav-link {
                margin: 5px;
            }

        }

        @media (min-width: 1200px) {
            .navbar-gap {
                margin-left: 250px !important;
            }
        }

        .font_size li a {
            font-size: 18px;

        }

        .navbar {
            background-color: #070175 !important;
        }
    </style>

    <!-- top menu -->
    <!-- TOP NAVIGATION BAR -->

    <!--include header-->
    @include('bdshop.frontEnd.layouts.header');


    <!-- alphabets -->

    @yield('content')

    <!--footer-->
    @include('bdshop.frontEnd.layouts.footer')

    <script>
        var head = ["The Largest business portal in bangladesh -- ", "The site is designed & hosted by -- ", "Powered by -- "];
        var site = ["TradeInfo", "SaraSoftware"];
        var link = ["https://tradeinfo.com.bd/", "https://sarasoftware.com.bd/"];
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
    <!--summernote javascript-->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

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

    <!--summernote-->
    <script>
        $('#summernote').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>


    @yield('js')
    {!! Toastr::message() !!}


</body>

</html>