{{-- @php
    $navbar_banner = App\AdvertiseBanner::where('advertise_category_id',6)->where('advertise_placement_id',8)->first();
@endphp
    
@if($navbar_banner)
<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 padding-top-bottom-5">
    <a href="{{$navbar_banner->url}}" target="_blank"><img src="{{asset($general_settings->header_banner)}}" alt=""></a>
</div>
@endif --}}