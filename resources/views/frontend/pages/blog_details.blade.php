@extends('frontend.layouts.app')
@section('content')
<style>

    .daohang > li>a{


        color:black!important;

    }
    .fas.fa-search{
        color:black!important
    }

</style>
    <div class="fenbanner mat1">
        <img src="https://www.chison.com/data/watermark/20210603/60b86d4495fd2_.webp" title="News" alt="News">
        <p class="fenbiao">HOT NEWS</p>

    </div>
    <!--  mianbao  -->
    <div class="mianbao mianbao2   zong">
        <a href="/" title="Home">Home</a>
        &gt;
       <a href="{{ route('blog.index') }}">News</a> &gt; <a
            class="comain">{{ $blog->title }}</a>
    </div>



    <!--  main  -->
    <div class="nemain2 zong">
        <div class="nel">
            <h1>{{ $blog->title }}</h1>
            <div class="net">
                <span class="neriqi">{{ Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>

                <div class="clear">
                </div>
            </div>
            <div class="nexiang">
                <h2 style="text-align: justify;">{{ $blog->title }}</h2>
                <p><br /></p>
                 <p>{!! $blog->long_description !!}</p>
            </div>

        </div>
        <div class="ner">
            @foreach ($blogs as $blog)
            <div class="nerlie">
                <div class="nerzi">
                    <a href="{{ route('home.single.blog.show',$blog->slug) }}"
                        class="nera">{{ $blog->title }}</a>
                    <span class="nerriqi">{{ Carbon\Carbon::parse($blog->created_at)->format('M d,Y') }}</span>
                    <p class="nerp">
                        <a href="{{ route('home.single.blog.show',$blog->slug) }}"
                            title="{{ $blog->title }}">{{ $blog->short_description }}</a>
                    </p>
                </div>
            </div>
            @endforeach


        </div>
        <div class="clear">
        </div>
    </div>

@endsection
