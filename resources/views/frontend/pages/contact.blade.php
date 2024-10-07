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





        <!--  banner  -->
        <div class="fenbanner mat1">
            <picture>
                <source type="image/webp" srcset="{{asset('frontend_two/fenbanner_.png')}}">
                <img src="{{asset('frontend_two/fenbanner_.png')}}" title="" alt="">
            </picture>
            <p class="fenbiao">Contact Us</p>
            <div class="mianbao mianbao3 zong">
                <a href="{{ route('home.index') }}" title="Home">Home</a>
                &gt;
                <span class="comain">Contact Us</span>
            </div>
        </div>
        <!--  mianbao  -->
        <div class="mianbao mianbao4 zong">
            <a href="{{ route('home.index') }}" title="Home">Home</a>
            &gt;
            <span class="comain">Contact Us</span>
        </div>

        <!--  main1  -->
        <div class="comain">
            <div class="zong">
                <div class="cor">
                    <form class="coxin" method='post' action="{{ route('contact.store') }}"
                        enctype='multipart/form-data'>
                        @csrf

                        <div class="int1 xing">
                            <i class="iconfont icon-contact1"></i>
                            <input type="text" placeholder="Name" name="name" id="name">
                        </div>

                        <div class="int1 xing">
                            <i class="iconfont icon-email1"></i>
                            <input type="text" placeholder="E-mail" name="email" id="emaila">
                        </div>

                        <div class="int1 xing">
                            <i class="iconfont icon-tel1"></i>
                            <input type="text" placeholder="Tel" name="phone" id="tela">
                        </div>
                        <div class="int1">
                            <i class="iconfont icon-edit"></i>
                            <textarea placeholder="Your Message" name="message"></textarea>
                        </div>

                        <input type="submit" value="SUBMIT" class="int3">

                    </form>
                    <p class="cotu">
                        <picture>
                            <source type="image/webp" srcset="https://www.chison.com/themes/simplebootx/style/images/cotu.webp">
                            <img src="https://www.chison.com/themes/simplebootx/style/images/cotu.webp">
                        </picture>
                    </p>
                </div>
                <div class="col">
                    <p class="cobiao">
                        Empex
                    </p>
                    <p class="cop">
                        Contact us now! You will get a fast reply, with all the details you need.
                    </p>
                    <div class="colie">
                        <p class="coa">
                            <em class="iconfont icon-address1"></em>Contact Address:
                        </p>
                        <div class="cop2">
                            <p>
                                {!! $sitesetting->address ??'' !!}
                            </p>
                        </div>
                    </div>
                    <div class="colie">
                        <p class="coa">
                            <em class="iconfont icon-tel1"></em>Telephone:
                        </p>
                        <div class="cop2">
                            <p>
                                {{ $sitesetting->phone ??'' }}
                            </p>
                        </div>
                    </div>

                    <div class="colie">
                        <p class="coa">
                            <em class="iconfont icon-email1"></em>E-mail:
                        </p>
                        <div class="cop2">
                            <p>
                                For Support:<a href="mailto:{{ $sitesetting->email ??'' }}" style="word-break:break-all"
                                    rel="nofollow">{{ $sitesetting->email ??'' }}</a>
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!--  ditu  -->
        <div class="ditu zong">
            <iframe
                src="{{ $sitesetting->google_map ??'' }}"
                width="1400" height="497" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>


@endsection
