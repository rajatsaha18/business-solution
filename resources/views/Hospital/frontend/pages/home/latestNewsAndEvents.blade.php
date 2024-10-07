@inject('carbon', 'Carbon\Carbon')
<div class="row mb-35 res-991-mb-15">
    <div class="col-lg-12">
        <div class="content-sec-head-style">
            <div class="content-area-sec-title">
                <h5>Our Latest News & Events</h5>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <!-- slick_slider -->

        <div class="slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 3, "arrows":false, "autoplay":true}'>
            <!-- featured-imagebox-post -->
            @foreach ($blogs as $blog)
            <div class="featured-imagebox featured-imagebox-post ttm-box-view-top-image">
                <div class="ttm-post-featured-outer">
                    <div class="ttm-post-thumbnail featured-thumbnail">
                        <img class="img-fluid" src="{{asset($blog->image)}}" style="width:100%;height:159px"alt="">
                        <div class="ttm-box-post-date">
                            <span class="ttm-entry-date">
                                <?php

                                $date=$blog->created_at->todatestring();

                                 ?>
                                <time class="entry-date" datetime="{{$date}}">{{$carbon::parse($date)->format('d')}}<span class="entry-month">{{$carbon::parse($date)->format('M')}}</span></time>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="featured-content featured-content-post">
                    <div class="post-meta" style="height:50px">
                        <span class="ttm-meta-line byline"><i class="fa fa-user"></i>{{$blog->author_name}}</span>

                        <span class="ttm-meta-line tag-link"><i class="fa fa-tag"></i>{{$blog->category->name}}</span>
                    </div>
                    <div class="post-title featured-title">
                        <h5 style="height:140px"><a href="{{route('home.single.blog.show',$blog->slug)}}" target="_blank">{{$blog->title}}</a></h5>
                    </div>
                </div>
            </div><!-- featured-imagebox-post end -->
            @endforeach
        </div>


       <!-- slick_slider end -->
    </div>
</div>
