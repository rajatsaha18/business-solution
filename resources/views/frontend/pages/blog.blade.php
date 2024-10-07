@extends('frontend.layouts.app')
@section('content')
<style>
    .m5lie{
        width:31%!important;
    }
    .daohang>li>a {


color: black !important;

}

</style>

<div class="fenbanner mat1">
    <img src="{{ asset('frontend_two/fenbanner_.png') }}" title="Company Overview" alt="Company Overview">
    <p class="fenbiao">Blogs</p>

</div>

<!--  main5  -->
<div class="main5">
    <div class="zong">
        <a href="#" class="m1biao">Blogs</a>
        <div class="m5n">

            <div class="clear"></div>

           @foreach ($blogs as $blog)
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
    </div>
</div>





@endsection



