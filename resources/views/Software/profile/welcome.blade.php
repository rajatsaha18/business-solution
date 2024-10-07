@extends('frontend.layouts.master')
@php
$logo = App\Models\GeneralSetting::first();
@endphp
@section('meta-setup')
<title>{{$logo->meta_title ?? ''}}</title>
<meta content="{{$logo->meta_description ?? ''}}" name="description" />
<meta itemprop="name" content="{{$logo->meta_title ?? ''}}">
<meta itemprop="description" content="{{$logo->meta_description ?? ''}}">
<meta itemprop="keywords" content="{{$logo->meta_keyword ?? ''}}">



@endsection
@section('content')
<!-- Start Hero -->
@include('frontend.layouts.hero')
<!-- End Hero -->
<!-- Business Partner -->
@include('frontend.component.business_partner')
<!-- Business Partner -->
<style>
    /* .text-right p{
        animation: text-right 8s ease-in;
    }

    @keyframes text-right{
	0% {
		transform: translateX(-50%);
	} */
	/* 50% {
		transform: translateX(100%);
	} */
/* } */
</style>
<?php
  $logo=DB::table('general_settings')->first();
  $whatwe=DB::table('home_page_what_we_dos')->first();
  $whowe=DB::table('home_page_who_we_ares')->first();
  $fasts=DB::table('home_fasts')->first();

?>
<!-- Start Section-->
<section class="relative md:py-24 py-16 overflow-hidden">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold mb-12">What We do ?</h3>
            <div class="grid md:grid-cols-12 grid-cols-1  gap-[30px]">
                <div class="md:col-span-6 order-1 md:order-2 ">
                    <div class="lg:ml-8">
                        <img src="{{isset($logo->what_we_do_image) ? asset($logo->what_we_do_image): ''}}" class="shadow rounded-md" alt="">

                    </div>
                </div>

                <div class="md:col-span-6 order-2 md:order-1" data-aos="fade-right">
                    <div class="lg:ml-5" style="text-align:left">


                        <p class="text-slate-400 max-w-xl mb-6">{!! $whatwe->content ?? '' !!}</p>


                    </div>
                </div>
            </div>
        </div><!--end grid-->

        {{-- <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">

            @include('frontend.component.what_we_do')
        </div> --}}
    </div><!--end container-->

    @include('frontend.component.who_we')

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
            <div class="md:col-span-6 order-1 md:order-2">
                <div class="lg:ml-8">
                    <img src="{{asset('frontend/assets/images/')}}/shape-image.png" alt="">
                </div>
            </div>

            <div class="md:col-span-6 order-2 md:order-1" data-aos="fade-right">
                <div class="lg:ml-5">
                    <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Fast & Effective</h6>
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">The Technology Partner to All Your Business Needs</h3>

                    <p class="text-slate-400 max-w-xl mb-6">{!!  $fasts->content ?? '' !!}</p>

                    <a href="{{route('contact-us')}}" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md"><i class="uil uil-notes"></i> Get Started</a>
                </div>
            </div>
        </div>
    </div><!--end container-->
</section><!--end section-->
<!-- End Section-->

<!-- Start -->
<section class="py-20 w-full table relative bg-[url({{asset('frontend/assets/images/')}}/course/c3.jpg')] bg-center bg-no-repeat" style="background-image: url({{asset('frontend/assets/images/')}}/course/c3.jpg);">
    <div class="absolute inset-0 bg-black/70"></div>
    <div class="container relative">
        <div class="grid grid-cols-1 text-center">
            <h3 class="mb-4 md:text-3xl text-2xl text-white font-medium">Sara Software provide full-service digital capabilities.</h3>

            <p class="text-white/70 max-w-xl mx-auto">
                We don’t just provide professional services, we build effective teams, the ones that have your back and drive your business forwards. We bring you an innovative new way to outsource.</p>

            <a href="#!" data-type="youtube" data-id="smDa6hoxLKI" class="lightbox h-20 w-20 rounded-full shadow-lg dark:shadow-gray-800 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-indigo-600 mx-auto mt-10">
                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
            </a>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!-- Start -->
<section class="relative md:py-24 py-16">
    <div class="container">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Users Say</h3>

            <p class="text-slate-400 max-w-xl mx-auto">Our honorable and valuable clients share their values with us. Let’s hear our satisfied clients’ voices.</p>
        </div><!--end grid-->

        <div class="grid grid-cols-1 mt-8">
            <div class="tiny-three-item">
                @include('frontend.component.client_review')
            </div>
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container md:mt-24 mt-16">
        <div class="grid md:grid-cols-12 grid-cols-1 items-center">
            <div class="md:col-span-6">
                <h6 class="text-indigo-600 text-sm font-bold uppercase mb-2">Blogs</h6>
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Reads Our Latest <br> News & Blog</h3>
            </div>
        </div><!--end grid-->

        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 mt-8 gap-[30px]">
            @foreach ($blogs as $item)
            <div class="blog relative border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700 overflow-hidden">
                <img src="{{asset($item->image)}}" alt="" style="height: 285px">

                <div class="content p-6">
                    <a href="{{route('blog-details',$item->slug)}}" class="title h5 text-lg font-medium hover:text-indigo-600 duration-500 ease-in-out">{{$item->title}}</a>
                    <p class="text-slate-400 mt-3">{{$item->short_description}}</p>

                    <div class="mt-4">
                        <a href="{{route('blog-details',$item->slug)}}" class="btn btn-link font-normal hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Read More <i class="uil uil-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->

@endsection
