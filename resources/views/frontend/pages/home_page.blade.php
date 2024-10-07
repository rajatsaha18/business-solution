@extends('frontend.layouts.app')
@section('content')
<style>
    .m5lie{
        width:31%!important;
    }
    .banner-img{
        height:700px!important;
    }
</style>
 <!--  banner  -->
 <div class="banner1" style="position:relative; height:0px; padding-bottom:41.77%;">
    <div class="slide" id="lun2" style="position:absolute; width:100%; height:100%; left:0px; top:0px;">
        <div class="carouse" style="height: 514px;">

            @foreach($sliders as $index => $slider)
            <div class="slideItem itemIndex{{ $index }}"
                style="left: {{ $index * 1230 }}px;">

                <picture>
                    <source type="image/webp" media="(min-width: 480px)" srcset="{{ asset($slider->image) }}">
                    <source type="image/webp" media="(max-width: 479px)" srcset="{{ asset($slider->image) }}">
                    <img class="banner-img" src="{{ asset($slider->image) }}" >
                </picture>
            </div>
            @endforeach

            <a class="carousel-control left Next"></a>
            <a class="carousel-control right Previous"></a>
        </div>
        <div class="dotList">
            <ul>
                @foreach($sliders as $index => $slider)
                <li class="dot{{ $index === 2 ? ' active' : '' }}" dotindex="{{ $index }}"></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<!--  main2  -->
<div class="main2 zong">
    <a href="https://www.chison.com/products/" class="m1biao">PRODUCTS</a>
    <div class="img-scroll">
        <span class="prev iconfont icon-left7"></span>
        <span class="next iconfont icon-right7"></span>
        <div class="img-list">
            <ul>
                @foreach($products as $product)
                <li>
                    <div class="m2lie">
                        <h2>
                            <a href="{{ route('home.single.product.show',$product->slug) }}" class="m2a"
                                title="Cart-based Ultrasound">{{ $product->title }}</a>
                        </h2>
                        <a href="{{ route('home.single.product.show',$product->slug) }}" class="m2mor">View More</a>
                        <a href="{{ route('home.single.product.show',$product->slug) }}" class="m2tu"
                            style="position: relative;overflow: hidden;padding-top: 100%;">
                            <img src="{{ asset($product->frontend_image) }}"
                                title="{{ $product->title }}" alt="{{ $product->title }}"
                                style="position: absolute;top: 0;left: 0;right: 0;width: 100%;height: 100%;">
                        </a>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>


<div class="main2 zong" style="margin-bottom:20px!important;">
    <h2 class="text-center" style="font-weight: bold; font-size:50px;margin-bottom:80px!important;">Latest News</h2>
    <div class="img-scroll">
        <span class="prev iconfont icon-left7"></span>
        <span class="next iconfont icon-right7"></span>
        <div class="img-list">
            <ul>
                @foreach($latestNews as $blog)
                <li>
                    <div class="m2lie">
                        <div class="card" style="">
                    <img src="{{asset($blog->image)}}" class="card-img-top" alt="category-image" style="height:280px;">
                    <div class="card-body text-center">
                      <a href="{{route('home.single.news.show',$blog->slug)}}"><h5 class="card-title" style="font-size: 20px;margin-top:10px;">{{$blog->title}}</h5></a>

                      <a href="#" class="btn btn-info" style="font-size: 16px; margin-top:10px;">View More</a>
                      <span class="m5riqi">{{ Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                    </div>
        </div>
                    </div>
                </li>
                @endforeach

            </ul>
        </div>
    </div>
</div>


<!--  main4  -->


<!--  main5  -->
{{-- <div class="main5">
    <div class="zong">
        <a href="https://www.chison.com/news/" class="m1biao">HOT NEWS</a>
        <div class="img-scroll">
        <span class="prev iconfont icon-left7"></span>
        <span class="next iconfont icon-right7"></span>
        <div class="img-list">
        <ul>
        <li>
        <div class="m5n">

            <div class="clear"></div>

           @foreach ($latestNews as $blog)
                <div class="m5lie ">
                <a href="{{ route('home.single.blog.show',$blog->slug) }}"
                    class="m5tu">
                    <picture>
                        <source type="image/webp"
                            srcset="{{ asset($blog->image) }}">
                        <img data-original="{{ asset($blog->image) }}"
                            title="{{ $blog->title }}"
                            alt="{{ $blog->title }}" class="nlazy">
                    </picture>
                </a>
                <div class="m5zi">
                    <a href="{{ route('home.single.blog.show',$blog->slug) }}"
                        class="m5a" title="{{ $blog->title }}">{{ $blog->title }}</a>
                    <p class="m5p">
                        <a href="{{ route('home.single.blog.show',$blog->slug) }}"
                            title="{{ $blog->title }}">{{ $blog->short_description }}</a>
                    </p>
                    <span class="m5riqi">{{ Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                </div>
            </div>
           @endforeach
        </div>
        </li>
        </ul>
        
        </div>
        
        </div>
        
    </div>
</div> --}}





@endsection



