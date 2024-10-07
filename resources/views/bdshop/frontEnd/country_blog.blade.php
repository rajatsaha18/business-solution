@extends('bdshop.frontEnd.layouts2.master')

@section('content')
    <!--top address bar-->

    <div class="container">
        <div class="row margin-bottom-20 margin-top-10">
            <div class="col-md-2">
                <div class="row">
                    <div class="clearfix"></div>
                    <!--left category menu-->
                    <div class="col-md-12 leftmenu-grid">
                        <div
                        class="width-100 bg-ash2 padding-6 border-radius-top-5 margin-top-15 text-center left-menu-heading">
                        <h4>Countries</h4>
                    </div>
                    <div class="width-100 leftnav border-top-dashed" id="myTopnav1">

                        <a href="javascript:void(0);" class="icon margin-top-7-minus" style="text-align: center;"
                            onclick="myFunction1()">View Yellow Pages Categories &nbsp; <h2>☰</h2></a>

                        <a class="nav4txt" style="text-align: center; background-color: #f2f2f2;" href="#">&nbsp;
                            &nbsp;View Yellow Pages Categories</a>

                        @foreach ($countries as $item)
                          <?php
                          $count=count(DB::table('country_blogs')->where('country_id',$item->id)->get());
                          ?>
                        {{-- href="{{route('info-sc',$item->slug)}}" --}}
                            <a class="text-center" href="{{route('get.country.blog',$item->name)}}" target="_blank">{{$item->name}} ({{$count}}) </a>
                        @endforeach


                    </div>
                        <script>
                            function myFunction1() {
                                var x = document.getElementById("myTopnav1");
                                if (x.className === "leftnav") {
                                    x.className += " responsive";
                                } else {
                                    x.className = "leftnav";
                                }
                            }
                        </script>
                    </div>

                </div>
            </div>

            <div class="col-md-8">
                <div class="div_style2">


                    <div class="skiptarget"><a id="maincontent">-</a></div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 div_style3">
                            <div class="col-md-12 col-xs-12 mainbody-grid div_style4">
                                <h1 style="color:#008C3F">{{ $data->name }}</h1>
                                @php
                                    $contact = App\InfoContactUs::first();
                                @endphp
                            </div>
                            <div class="main_content2">
                                <div class="col-md-12 col-sm-12 col-xs-12 margin-top-bottom-10 padding-bottom-5 text-left">
                                    @foreach ($countryblog as $cb)
                                        <div class="card mb-5 countryblogg">
                                            <style>


                                            </style>
                                                <a href="{{route('single.country.blog',$cb->title)}}" target="_blank">
                                                    <img src="{{asset($cb->image)}}" width="90%" height="203.260px"></img>
                                                    <h3 class="ps-3">{{$cb->title}}</h3>
                                                    <p style="color:black!important"></p>
                                                    <h6 class="ms-3 des" style="width:90%!important;font-size:15px!important">{!!  substr(strip_tags($cb->description), 0, 150) !!}<span>....</span> </h6>
                                                </a>

                                        </div>
                                    @endforeach

                                </div>
                                <div class="pagination-block">
                                    <span class="page-numbers current">{{$countryblog->links("pagination::bootstrap-4")}}</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--ad bottom-->
                    <div class="col-md-8 col-md-offset-2 col-xs-12 col-xs-offset-0 text-center margin-top-10">
                    </div>
                </div>
            </div>


        </div>
        <div class="clearfix"></div>
    </div>

    <div class="total-ads main-grid-border">
        <div class="container">
        </div>
    </div>
@endsection
