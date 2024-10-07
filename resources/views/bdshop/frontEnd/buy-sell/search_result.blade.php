<style>
  a{
    text-decoration: none;
  }
  .slider-slider{
                    position: relative;
                  }
                  .item-c{
                    position: relative;
                  }
                  .slider-badge{
                    position:absolute;
                    top:0;
                    width:100%;
                    height:100%;
                  }
                  .badge-c{
                    position:absolute;
                    top:0;
                    right:2%;
                  }
                  .badge-cc{
                    position: absolute;
                    top:0;
                    right:2%;
                  }
</style>

<div class="item-card">
@if(count($urgentitems)>0)
@foreach($urgentitems as $item)

<a href="{{route('single.ad.detail',$item->slug)}}">
<div class="card shadow p-2 item-c" style="height:167px">
   <div class="row">
     <div class="col-md-4 col-4 thum-img">
      <img src="{{asset($item->thumbnail_img)}}" style="width:160px;height:120px" alt="">
     </div>
     <div class="col-md-8 col-8">
        <h6 class="text-dark">{{$item->title}}</h6>
        <p class="text-dark">{{$item->address}}, {{$item->subcategory->title}}</p>
        <p class="text-success fw-bold">Tk {{$item->rent}}</p>
        <p class="text-end text-dark">{{$item->created_at->diffForHumans()}}</p>
     </div>
   </div>
   <div class="badge-c">
      <h5 class="badge bg-warning">Urgent</h5>
   </div>
 </div>
 
</a>
 <br>


@endforeach

@endif
</div>
<div class="item-card">
@if(count($topaditems)>0)
@foreach($topaditems as $item)

<a href="{{route('single.ad.detail',$item->slug)}}">
<div class="card shadow p-2 item-c"  style="height:167px">
   <div class="row">
     <div class="col-md-4 col-4 thum-img">
      <img src="{{asset($item->thumbnail_img)}}" style="width:160px;height:120px" alt="">
     </div>
     <div class="col-md-8 col-8">
        <h6 class="text-dark">{{$item->title}}</h6>
        <p class="text-dark">{{$item->address}}, {{$item->subcategory->title}}</p>
        <p class="text-success fw-bold">Tk {{$item->rent}}</p>
        <p class="text-end text-dark">{{$item->created_at->diffForHumans()}}</p>
     </div>
   </div>
   <div class="badge-c">
      <h5 class="badge bg-info text-light">Top Ad</h5>
   </div>
 </div>
</a>
 <br>


@endforeach

@endif
</div>
<div class="item-card">
@if(count($regularitems)>0)
@foreach($regularitems as $item)

<a href="{{route('single.ad.detail',$item->slug)}}">
<div class="card shadow p-2" style="height:167px">
   <div class="row">
     <div class="col-md-4 col-4 thum-img">
      <img src="{{asset($item->thumbnail_img)}}" style="width:160px;height:120px" alt="">
     </div>
     <div class="col-md-8 col-8">
        <h6 class="text-dark">{{$item->title}}</h6>
        <p class="text-dark">{{$item->address}}, {{$item->subcategory->title}}</p>
        <p class="text-success fw-bold">Tk {{$item->rent}}</p>
        <p class="text-end text-dark">{{$item->created_at->diffForHumans()}}</p>
     </div>
   </div>

 </div>
</a>
 <br>


@endforeach

@endif
</div>

