@extends('bdshop.frontEnd.layouts2.master')

@section('content')
<div class="container">
    <style>
        .select2-selection__arrow{
            padding-right:48px;
        }
    </style>
    <div class="row margin-bottom-10 ">
        <div class="col-md-2">
            <div class="row">

                <!--ad left-->
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center ">
                    <a href="#"><img src="./img/ad_resgroup.gif" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center ">
                    <a href="#"><img src="./img/ad_greentouchclean.gif" alt="" class="img-left-hp1"></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center">
                    <a href="#"><img src="./img/ad_jj_left_special.gif" alt=""></a>
                </div>
                <div class="clearfix"></div>

                <div class="col-md-12 leftmenu-grid margin-bottom-15">
                    <div
                        class="width-100 bg-ash2  border-radius-top-5  text-center left-menu-heading">
                        <h4>Top Categories</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;"
                            onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($shop_categories as $item)
                            <a href="{{route('info-sc',$item->slug)}}" class="text-center">{{$item->name}}</a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="row margin-top-10">
                <!--ad classic & classic mini-->
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7 margin-bottom-7">
                    <a href="#"><img src="./img/ad_royal.gif" alt=""></a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-right margin-bottom-7">
                    <a href="#"><img src="./img/ad_tigerpestcontrol_homeclassic.gif" alt=""></a>
                </div>
                <!--ad classic & classic mini-->
            </div>

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="mainbody-grid div_style4">
                        <h1 style="color:#008C3F">Advanced Search </h1>

                    </div>
                </div>

                <div class="width-100">
                    <h6>
                        Best Pest Control company Bangladesh, pest control service in bangladesh, pest control
                        company in dhaka, list of pest control company in bangladesh, best pest control service
                        provider in dhaka chittagong sylhet khulna, top pest control company in bangladesh.
                        <p class="text-blue">To add your company in <a href="https://businesssolution.com.bd/">Business Solution</a> Yellow Pages simply <a href="{{route('add-your-company')}}"
                                class="text-bold">click
                                here</a>. For animation banner ad, please <a href="{{route('add-your-company')}}" class="text-bold">click
                                here</a>.</p>
                    </h6>
                </div>

                <div class="margin-bottom-10">

                    <a href="" target="_blank"><img
                            src="https://www.bdtradeinfo.com/public/saimg/ad_bdpestcontrol.gif" alt=""
                            class="width-100"></a>

                </div>
                <div class="row">
                   <div class="card p-5">
                     <form action="{{route('advance.search.result')}}" method="GET">
                        <div class="mb-3  row adv-search">
                            <label class="col-md-4 col-sm-4 text-end">Company/Category/Keywords* : </label>
                            <input class="col-md-8 col-sm-8 w-50 form-control" value="{{$search}}" type="text" name="keyword" class="form-control" required>
                        </div>
                        <div class="mb-3  row adv-search">
                            <label class="col-md-4 col-sm-4 text-end">Country : </label>
                            <select class="form-control  col-md-8 col-sm-8 w-50 country js-example-basic-single" name="country_id" id="country_id" aria-label=".form-select-lg example" required>
                                <option selected disabled>--select--</option>
                                @foreach ($countries as $item)
                                <option value="{{$item->id}} "{{$item->id == $country_id ?'selected':''}}>{{$item->name}}</option>

                                @endforeach
                              </select>
                        </div>
                        <div class="mb-3  row adv-search">
                            <label class="col-md-4 col-sm-4 text-end">State : </label>
                            <select class="form-control  col-md-8 col-sm-8 w-50 state js-example-basic-single" name="state_id" id="state_id" aria-label=".form-select-lg example" required>
                                <option selected disabled>--select--</option>
                                {{-- @foreach ($states as $item) --}}
                                <option value="{{$state_id}}" selected>{{$state_name->name}}</option>

                                {{-- @endforeach --}}
                              </select>
                        </div>
                        <div class="mb-3  row adv-search">
                            <label class="col-md-4 col-sm-4 text-end">Thana : </label>
                            <select class="form-control  col-md-8 col-sm-8 w-50 city js-example-basic-single" name="city_id" id="city_id" aria-label=".form-select-lg example" required>
                                <option selected disabled>--select--</option>
                                {{-- @foreach ($cities as $item) --}}
                                <option value="{{$city_id}}"selected>{{$city_name->name}}</option>

                                {{-- @endforeach --}}
                              </select>
                        </div>
                        <div class="mb-3 d-flex justify-cotent-center">
                            <label class="col-md-4 col-sm-4 text-end" hiddent></label>
                         <button class="btn btn-success btn-sm col-md-8 col-sm-8 w-25">Search</button>
                        </div>
                     </form>
                   </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="mainbody-grid div_style4">
                            <h1 style="color:black">Search results for  <span style="color:#008C3F">{{$search}}|{{$country_name->name}}|{{$state_name->name}}|{{$city_name->name}}</span> </h1>

                        </div>
                    </div>

                    <div class="width-100">
                        <h6>
                            Best Pest Control company Bangladesh, pest control service in bangladesh, pest control
                            company in dhaka, list of pest control company in bangladesh, best pest control service
                            provider in dhaka chittagong sylhet khulna, top pest control company in bangladesh.
                            <p class="text-blue">To add your company in <a href="https://businesssolution.com.bd/">Business Solution</a> Yellow Pages simply <a href="{{route('add-your-company')}}"
                                    class="text-bold">click
                                    here</a>. For animation banner ad, please <a href="#" class="text-bold">click
                                    here</a>.</p>
                        </h6>
                    </div>

                    <div class="margin-bottom-10">

                        <a href="#" target="_blank"><img
                                src="https://www.bdtradeinfo.com/public/saimg/ad_bdpestcontrol.gif" alt=""
                                class="width-100"></a>

                    </div>


                    <div class="row">
                        <div class="col-lg-3 col-md-4 col-sm-3 col-xs-5 mainbody-grid text-center margin-top-10">
                            Records <span class="sub_ttl_yellow">1-25</span> of <span class="sub_ttl_yellow">25</span>
                        </div>
                        <div
                            class="col-lg-2 col-md-4 col-sm-2 col-xs-3 col-lg-offset-2 col-md-offset-0 col-sm-offset-2 col-xs-offset-0 mainbody-grid text-center margin-top-10">
                            <a href="#" target="_blank"><img
                                    src="https://www.bdtradeinfo.com/public/assets/images/icon_citywise.png" alt=""></a>
                            <a href="#" target="_blank"><img
                                    src="https://www.bdtradeinfo.com/public/assets/images/icon_area.png" alt=""></a>
                        </div>
                        <div
                            class="col-lg-3 col-md-4 col-sm-3 col-xs-4 col-lg-offset-2 col-md-offset-0 col-sm-offset-2 col-xs-offset-0 mainbody-grid text-center margin-top-10">
                            Page <span class="sub_ttl_yellow">1</span> of <span class="sub_ttl_yellow">1</span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-md-12 text-center"></div>
                    </div>

                    @foreach ($advertise as $item)
                    <div class="div_style2">
                        <div class="row">
                            <div class="col-md-12 col-xs-12 div_style3">
                                <div
                                    class="width-100 mainbody-grid border-bottom-dashed margin-bottom-15 padding-top-bottom-10">
                                    <div class="row">
                                        <div class="col-md-11 col-xs-10 mainbody-grid">
                                            <h3>
                                                <a class="nav12txt" href="#">
                                                    {{$item->business_name}}
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="col-md-1 col-xs-2 mainbody-grid text-right">
                                            <img src="https://www.bdtradeinfo.com/public/assets/images/icon_silverMember.png"
                                                alt="" class="img-responsive">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-xs-12 mainbody-grid">
                                        <address>
                                            <ul class="location">
                                                <li><i class="fas fa-map-marker-alt normal-icon"></i></li>
                                                <li>
                                                    {{$item->address}}
                                                </li>
                                            </ul>
                                            <div class="clearfix"> </div>
                                            <ul class="location">
                                                <li><i class="fas fa-phone-alt normal-icon"></i></li>
                                                <li>
                                                    {{$item->phone}}
                                                </li>
                                            </ul>
                                            <div class="clearfix"> </div>

                                            <ul class="location">
                                                <li><i class="fas fa-globe-asia normal-icon"></i></li>
                                                <li>
                                                    <a href="{{$item->website}}" target="_blank"
                                                        class="navtxt_normal">{{$item->website}}</a>
                                                </li>
                                            </ul>
                                        </address>
                                    </div>
                                    <div class="col-md-4 col-xs-12 mainbody-grid">
                                        <address>
                                            <ul class="location">
                                                <li><i class="fas fa-user normal-icon"></i></li>
                                                <li>
                                                    {{$item->owner_name}}
                                                </li>
                                            </ul>
                                            <div class="clearfix"> </div>

                                            <ul class="location">
                                                <li><i class="fas fa-envelope normal-icon"></i></li>
                                                <li><a href="{{route('info-send-email',$item->id)}}" class="nav7txt" target="_blank"><strong>Send Email /
                                                            Query</strong></a></li>
                                            </ul>
                                            <ul class="location">
                                                <li>
                                                    @if($item->facebook)
                                                    <a href="{{$item->facebook}}" target="_blank">
                                                        <img src="https://www.bdtradeinfo.com/public/assets/images/facebook.png"
                                                            alt="" width="20" class="margin-right-10">
                                                    </a>
                                                    @endif
                                                </li>
                                            </ul>
                                        </address>
                                    </div>
                                </div>

                                <div class="width-100 mainbody-grid text-justify border-top-dashed">
                                    <p>
                                    <a href="{{route('company.detail',$item->slug)}}" class="btn btn-sm" target="__blank" style="background-color:#001D34;color:white">More Info</a>

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    <div class="col-md-12 text-center"></div>

                    <div class="clearfix"></div>
                    <div class="col-md-12 border-bottom-dashed margin-top-10"></div>




                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="row">

                <!--ad right-->
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ad_products.png" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ha9.png" alt=""></a>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-xs-4 text-center margin-top-bottom-10">
                    <a href="#"><img src="./img/ha2.png" alt=""></a>
                </div>
                <div class="clearfix"></div>
                <!--ad right-->

            </div>
        </div>

    </div>
    <div class="clearfix"></div>
</div>


@endsection
@section('js')
<script>
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
$('.js-example-basic-single').select2();
});
</script>
<script>
    $(document).on('change', '.country', function() {
       let id = $(this).val();

       $.ajax({
           method: "GET",
           url:"{{ route('find.state') }}",
           data:{'id':id},
           dataType: 'json', //return data will be json
           success: function(data) {
             //   alert(data)
               $('.state').html('<option value="" selected disabled>--select--</option>');
               for (let i = 0; i < data.length; i++) {
                   $('.state').append('<option value="' + data[i]
                       .id + '">' + (data[i].name) + '</option>');
               }
           },
           error: function() {
           }
       });
   });
</script>
<script>
    $(document).on('change', '.state', function() {
       let id = $(this).val();

       $.ajax({
           method: "GET",
           url:"{{ route('find.city') }}",
           data:{'id':id},
           dataType: 'json', //return data will be json
           success: function(data) {
             //   alert(data)
               $('.city').html('<option value="" selected disabled>--select--</option>');
               for (let i = 0; i < data.length; i++) {
                   $('.city').append('<option value="' + data[i]
                       .id + '">' + (data[i].name) + '</option>');
               }
           },
           error: function() {
           }
       });
   });
</script>
@endsection
