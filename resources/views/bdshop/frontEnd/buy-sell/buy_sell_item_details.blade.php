
@extends('bdshop.frontEnd.buy-sell.layouts.app')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    #content-wrapper{
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	align-items: center;
}

.column{
	width: 600px;
	padding: 10px;

}
.thumbnail{
	object-fit: cover;
	max-width: 100px;
	max-height: 70px;
	cursor: pointer;
	opacity: 0.5;
	margin: 5px;
	/* border: 2px solid black; */

}

.thumbnail:hover{
	opacity:1;
}

.active{
	opacity: 1;
}
a{
  text-decoration: none;
}

#slide-wrapper{
	/* max-width: 500px; */
	display: flex;
	/* min-height: 100px; */
	align-items: center;
}

#slider{
	width: 440px;
	display: flex;
	flex-wrap: nowrap;
	overflow-x: auto;

}

.arrow{
	width: 30px;
	height: 30px;
	cursor: pointer;
	transition: .3s;
}

.arrow:hover{
	opacity: .5;
	width: 35px;
	height: 35px;
}
@media(max-width:600px){
  .image #featured{
    width:100%!important;
    height:240px;
  }
  #slider{
    width:100%;
  }
}
</style>
<section class="item-detaiils">
        <div class="container">
            <h6 class="pt-2 pb-2">Home > {{$ad->title}}</h6>

            <div class="card shadow p-3">
                <h4>{{$ad->title}}</h4>
                <p>Posted {{ Carbon\Carbon::parse($ad->created_at)->format('d-M-Y' ) }}
</p>
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                       <div class="image" style="background-color:#E7EDEE">
                        <img id="featured" src="{{asset($ad->thumbnail_img)}}" style="width:350px;height:466px;display:block;margin:0 auto" alt="">
                       </div>
                       <div class="d-flex justify-content-center pt-4">
                        <div id="slide-wrapper" >
                          <img id="slideLeft" class="arrow" src="{{asset('buysell/asset/images/arrow-left.png')}}">
          
                          <div id="slider">
                            <img class="thumbnail" src="{{asset($ad->thumbnail_img)}}">
                             @foreach($ad_images as $img)
                             <img class="thumbnail" src="{{asset($img->images)}}">

                             @endforeach
                              
                              
                          </div>
          
                          <img id="slideRight" class="arrow" src="{{asset('buysell/asset/images/arrow-right.png')}}">
                      </div>
                      </div>
                       <h4 class="text-success fw-bolder pt-3">Tk {{$ad->rent}} {{$ad_detail->price_unit}}</h4>
                       <div class="row mt-5">
                        <div class="col-md-6 col-sm-12">
                            <p>Address:  <strong>{{$ad->address}}</strong></p>
                            @if($ad_detail->land_type)
                            <p>Land type: <strong>{{$ad_detail->land_type}}</strong></p>
                            @endif
                            @if($ad_detail->land_size)
                            <p>Land size: <strong>{{$ad_detail->land_size}} {{$ad_detail->land_unit}}</strong></p>
                            @endif
                            @if($ad_detail->house_size)
                            <p>House Size: <strong>{{$ad_detail->house_size}}</strong></p>
                            @endif
                            @if($ad_detail->house_unit)
                            <p>House Unit: <strong>{{$ad_detail->house_unit}} </strong></p>
                            @endif
                            @if($ad_detail->features)
                            <p>Features: <strong>{{$ad_detail->features}} </strong></p>
                            @endif
                            @if($ad_detail->size)
                            <p>Size: <strong>{{$ad_detail->size}} </strong></p>
                            @endif
                            @if($ad_detail->brand)
                            <p>Brand: <strong>{{$ad_detail->brand}} </strong></p>
                            @endif
                            @if($ad_detail->trim)
                            <p>Trim/Edition: <strong>{{$ad_detail->trim}} </strong></p>
                            @endif
                            @if($ad_detail->registration_year)
                            <p>Registration Year: <strong>{{$ad_detail->registration_year}} </strong></p>
                            @endif
                            @if($ad_detail->transmission)
                            <p>Transmission: <strong>{{$ad_detail->transmission}} </strong></p>
                            @endif
                            @if($ad_detail->fuel_type)
                            <p>Fuel Type: <strong>{{$ad_detail->fuel_type}} </strong></p>
                            @endif
                            @if($ad_detail->kilometers_run)
                            <p>Kilometers Run: <strong>{{$ad_detail->kilometers_run}} </strong></p>
                            @endif
                        </div>
                        <div class="col-md-6 col-sm-12">
                        @if($ad_detail->property_type)
                            <p>Property Type: <strong>{{$ad_detail->property_type}} </strong></p>
                            @endif
                            @if($ad_detail->beds)
                            <p>Beds: <strong>{{$ad_detail->beds}} </strong></p>
                            @endif
                            @if($ad_detail->baths)
                            <p>Baths: <strong>{{$ad_detail->baths}} </strong></p>
                            @endif
                            @if($ad_detail->facing)
                            <p>Facing: <strong>{{$ad_detail->facing}} </strong></p>
                            @endif
                            @if($ad_detail->completion_status)
                            <p>Completion Status: <strong>{{$ad_detail->completion_status}} </strong></p>
                            @endif
                            @if($ad_detail->model)
                            <p>Model: <strong>{{$ad_detail->model}} </strong></p>
                            @endif
                            @if($ad_detail->year_of_manufacture)
                            <p>Year of Manufacture: <strong>{{$ad_detail->year_of_manufacture}} </strong></p>
                            @endif
                            @if($ad_detail->conditions)
                            <p>Conditions: <strong>{{$ad_detail->conditions}} </strong></p>
                            @endif
                            @if($ad_detail->body_type)
                            <p>Body Type: <strong>{{$ad_detail->body_type}} </strong></p>
                            @endif
                            @if($ad_detail->engine_capacity)
                            <p>Engine Capacity: <strong>{{$ad_detail->engine_capacity}} </strong></p>
                            @endif
                        </div>
                       </div>
                       <div class="desc">
                        <h4>Description</h4>
                        <p>
                            {!! $ad->description !!}
                        </p>
                       </div>
                    </div>
                    <div class="col-md-5 col-sm-5">
                        <div class="card shadow p-3">
                          <p>For Sale by <strong>{{$ad->user->name}}</strong></p>
                          <hr>
                           <div>
                            <div class="row">
                              <div class="col-md-2 col-sm-2">
                                <h5 class="me-3"><i class="fa fa-phone   bg-success text-warning p-1" style="border-radius: 50%;" aria-hidden="true"></i></h5>

                              </div>
                              <div class="col-md-10 col-sm-12">
                                <h6>Call Seller</h6>
                                <p>{{$ad->user->phone}}</p>

                              </div>
                            </div>
                           </div>
                        </div>


                        <div class="card border-info shadow p-2 mt-4">
                             <h5><i class="fa fa-shield" aria-hidden="true"></i>  Safety Tips</h5>
                             <ul>
                              <li>Don’t go to unfamiliar places alone</li>
                              <li>Don’t make full payment to 3rd parties</li>
                             </ul>
                        </div>
                        <div class="add-image mt-5">
                          <img src="https://i.ibb.co/tPS0GTr/1.png" style="width:300px;height:250px" alt="">
                       </div>
                    </div>
                    
                </div>

            </div>
        </div>
     </section>
  <style>
    .para p{
      line-height: 0.7em;
    }
    @media(max-width:600px){
      .item-ad img{
        width:90px!important;
        height:70px!important;
      }
    }
  </style>
     <section class="similar_ad mt-3 mb-5">
      <div class="container">
        <div class="card p-3 justify-content-center">
          <h4>Similar Ads</h4>
          <hr>
          <div class="row">
            @foreach($ads as $ad)

           
            <div class="col-md-6  col-sm-12 mb-4">
            <a href="{{route('single.ad.detail',$ad->slug)}}">
              <div class="card p-3" style="height:167px">
                <div class="row">
                  <div class="col-md-4 col-4 item-ad">
                      <img src="{{asset($ad->thumbnail_img)}}" style="width:160px;height:120px" alt="">
                  </div>
                  <div class="col-md-8 col-8 para">
                            <h6 class="text-dark">{{$ad->title}}</h6>
                            <p class="text-dark">{{$ad->address}}, {{$ad->subcategory->title}}</p>
                            <p class="text-success fw-bold">Tk {{$ad->rent}}</p>
                            <p class="text-end text-dark" >{{$ad->created_at->diffForHumans()}}</p>
                  </div>
               
              </div>
              </div>
              </a>
            </div>





            @endforeach
           
          </div>
        </div>
      </div>
     </section>
     <section class="footer-ad">
      <div class="container mb-3">
        <img src="https://tpc.googlesyndication.com/simgad/3545812525797588861" style="height:90px;width:100%" alt="">
      </div>
     </section>
     <script type="text/javascript">
      let thumbnails = document.getElementsByClassName('thumbnail')
  
      let activeImages = document.getElementsByClassName('active')
  
      for (var i=0; i < thumbnails.length; i++){
  
        thumbnails[i].addEventListener('mouseover', function(){
          console.log(activeImages)
          
          if (activeImages.length > 0){
            activeImages[0].classList.remove('active')
          }
          
  
          this.classList.add('active')
          document.getElementById('featured').src = this.src
        })
      }
  
  
      let buttonRight = document.getElementById('slideRight');
      let buttonLeft = document.getElementById('slideLeft');
  
      buttonLeft.addEventListener('click', function(){
        document.getElementById('slider').scrollLeft -= 180
      })
  
      buttonRight.addEventListener('click', function(){
        document.getElementById('slider').scrollLeft += 180
      })
  
  
    </script>
    @endsection