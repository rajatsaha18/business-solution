@extends('Hospital.frontend.layouts.app')
@section('content')

<section class="py-5">
    <div class="container">
        <div class="row">
          @foreach($designs as $item)
            <div class="col-md-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$item->image}}" style="height:200px;" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->name}}</h5>
                      <p class="card-text">{!! Str::limit($item->description,50) !!}</p>
                      <a href="{{route('design.details',['id' => $item->id])}}" class="btn btn-sm" style="background-color:#1FA8DE; color:white">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
            
        </div>
       </div>
</section>
   
@endsection

