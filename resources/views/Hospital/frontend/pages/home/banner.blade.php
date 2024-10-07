{{-- <!-- banner-top-section -->
<section class="banner-top-section pt-10 res-991-pt-0 clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <!-- banner-image -->
                <div class="banner-image pt-30">
                    @if (isset($banner->banner_one))
                    <a href="{{$banner->banner_one_link}}" target="_blank"><img class="img-fluid" src="{{asset($banner->banner_one)}}" style="width:822px;height:251.323px" alt=""></a>
                    @else
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                    @endif                </div><!-- banner-image end -->
            </div>
            <div class="col-sm-6">
                <!-- banner-image -->
                <div class="banner-image pt-30">
                    @if (isset($banner->banner_two))
                    <a href="{{$banner->banner_two_link}}" target="_blank"><img class="img-fluid" src="{{asset($banner->banner_two)}}" style="width:822px;height:251.323px" alt=""></a>
                    @else
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                    @endif                </div><!-- banner-image end -->
            </div>
        </div><!-- row end -->
    </div>
</section>
<!-- banner-top-section end --> --}}
