@extends('bdshop.frontEnd.layouts2.master')

@section('content')
    <!--top address bar-->
    <div class="container">
       
        
        <div class="card mb-5">
          <div class="row p-3">
            @foreach ($advertises as $item)
            <div class="col-md-6 col-sm-12">
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
                                                @if (isset($item->website))
                                                @if ((!(substr($item->website, 0, 7) == 'http://')) && (!(substr($item->website, 0, 8) == 'https://')))
                                                <a href="{{'http://'.$item->website}}" target="_blank"
                                                    class="navtxt_normal">{{'http://'.$item->website}}</a>
                                                @else
                                                <a href="{{$item->website}}" target="_blank"
                                                    class="navtxt_normal">{{$item->website}}</a>
                                                @endif
                                                    
                                                @endif
                                            </li>
                                        </ul>
                                    </address>
                                </div>
                                <div class="col-md-4 col-xs-12 mainbody-grid" style="height:140px!important">
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
                            <div class="width-100 row mainbody-grid text-justify border-top-dashed" style="height:80px!important">
                                <div class="col-md-6">
                                    <p>
                                        <img src="https://www.bdtradeinfo.com/public/assets/images/icon_keyword.png"
                                            alt="" height="20" width="20" class="margin-right-15 float-left">
                                            {{$item->keywords}}
                                    </p>
                                </div>
                                <div class="col-md-6 text-end">
                                    <p>Country: {{$name}}</p>
                                </div>
                        
                               
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          </div>
           

        </div>
    </div>
    
@endsection
