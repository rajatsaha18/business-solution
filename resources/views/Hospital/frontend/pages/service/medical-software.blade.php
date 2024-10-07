@extends('Hospital.frontend.layouts.app')
@section('content')

<section class="py-5">
    <div class="container">
        <div class="row">
            {{-- <div class="col-md-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://media.istockphoto.com/id/1401460590/photo/businessman-working-on-laptop-with-document-management-icon.webp?b=1&s=170667a&w=0&k=20&c=4H439mT0eE_ltwbhV6MNmDNnkyzIVM-D1DQ3qvbI6eE=" style="height:200px;" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">title 1</h5>
                      <p class="card-text">lorem ipsum</p>
                      <a href="" class="btn btn-sm" style="background-color:#1FA8DE; color:white">Read More</a>
                    </div>
                  </div>
            </div> --}}
          @foreach($software as $item)
            <div class="col-md-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$item->image}}" style="height:200px;" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{$item->name}}</h5>
                      <p class="card-text">{!! Str::limit($item->description,50) !!}</p>
                      <a href="{{route('software.details',['id' => $item->id])}}" class="btn btn-sm" style="background-color:#1FA8DE; color:white">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
            
        </div>
       </div>
</section>
   
@endsection

