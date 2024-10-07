@extends('frontend.layouts.app')
@section('content')
<style>

    .daohang > li>a{

        color:black!important;

    }
    .fas.fa-search{
        color:black!important
    }
    .banner{
        height:700px!important;
    }

</style>
    <div class="fenbanner mat1">
        <img src="{{asset('/')}}uploads/investor/banner.jpg" class="banner" title="News" alt="News">
        <p class="fenbiao">HOT NEWS</p>
    </div>
    <!--  mianbao  -->
    <div class="mianbao mianbao2 zong">
        <a href="/" title="Home">Home</a>
        &gt;
       <a href="{{ route('blog.index') }}">News</a> &gt; <a
            class="comain">ABCD</a>
    </div>



    <!--  main  -->
    <div class="nemain2 zong">
        <div class="nel">
            <h1>Company Title</h1>
            <div class="net">
                <span class="neriqi"></span>

                <div class="clear">
                </div>
            </div>
            <div class="nexiang">
                <h2 style="text-align: justify;">Title 2</h2>
                <p><br /></p>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

        </div>
        <div class="ner">
          
            <div class="nerlie">
                <div class="nerzi">
                    <a href=""
                        class="nera"></a>
                    <span class="nerriqi"></span>
                    <p class="nerp">
                        <a href=""
                            title=""></a>
                    </p>
                </div>
            </div>

        </div>
        <div class="clear">
        </div>
    </div>

@endsection
