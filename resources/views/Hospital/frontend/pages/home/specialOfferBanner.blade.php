<div class="row">
    <div class="col-sm-6">
        <!-- banner-image -->
        <div class="banner-image mb-30">
            @if (isset($banner->banner_four))
            <a href="{{$banner->banner_four_link}}"target="_blank"><img class="img-fluid" src="{{asset($banner->banner_four)}}" style="width:822px;height:251.323px" alt=""></a>
            @else
            <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

            @endif        </div><!-- banner-image end -->
    </div>
    <div class="col-sm-6">
        <!-- banner-image -->
        <div class="banner-image mb-30">
            @if (isset($banner->banner_five))
            <a href="{{$banner->banner_five_link}}"target="_blank"><img class="img-fluid" src="{{asset($banner->banner_five)}}" style="width:822px; height:251.323px" alt=""></a>
            @else
            <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

            @endif        </div><!-- banner-image end -->
    </div>
</div>
