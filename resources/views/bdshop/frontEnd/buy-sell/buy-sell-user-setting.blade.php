@extends('bdshop.frontEnd.buy-sell.layouts.app')
@section('content')

<section class="hero_buy_sell mt-4 ">
        <div class="container">
            <div class="card shadow p-3 mb-5" style="padding-bottom:50px!important">
                 <div class="row">
                    <div class="col-md-3 col-sm-12">
                    <h4>Account</h4>
                        <hr class="">
                        <a href="{{route('buyselluser.dashboard')}}">My Account</a>
                        <hr class="">
                        <a href="{{route('buyselluser.user.myads')}}">My Ads</a>
                        <hr class="">
                        <a href="{{route('buyselluser.buysell.user.setting')}}">Settings</a>
                    </div>
                    <div class="col-md-9 col-sm-12 setting">
                       <h4>Settings</h4>
                       <hr>
                       <h5>Change Details</h5>
                       <div class="mt-5">
                         
                           <form action="{{route('buyselluser.buysell.user.update',$user->id)}}" method="POST">
                            @csrf
                              <div class="mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="number"  class="form-control w-25" name="phone" value="{{$user->phone}}">
                                
                              </div>
                              <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text"  class="form-control w-25" name="name" value="{{$user->name}}">
                                
                              </div>
                              <div class="d-flex gap-4">
                                <div class="mb-3">
                                    <label class="form-label">Location</label>
                                    <select class="form-select division" name="division">
                                        <option value="" selected>Division</option>
                                         @foreach($divisions as $item)
                                         <option value="{{$item->id}}"{{$item->id == $user->division ?'selected':''}}>{{$item->name}}</option>

                                         @endforeach
                                      </select>
                                    
                                  </div>
                                  <div class="mb-3">
                                    <label class="form-label">Sub Location</label>
                                    <select class="form-select district" name="district">
                                    <option value="" selected>District</option>
                                         @foreach($districts as $item)
                                         <option value="{{$item->id}}" {{$item->id == $user->district ?'selected':''}}>{{$item->name}}</option>

                                         @endforeach
                                       
                                      </select>
                                    
                                  </div>
                              </div>
                              <button type="submit" class="btn shadow" style="background-color: #b7b7b7;color:black;font-weight:600">Update Details</button>
                           </form>
                           <hr class="mt-4 mb-4">
                           <div class="w-50 d-flex gap-4">
                            <a href="#"class="btn shadow" style="background-color: #b7b7b7;color:black;font-weight:600">Delete Account</a>
                           <div>
                           <a href="{{route('logout')}}" class="btn" style="background-color:#f15d5d;color:black;font-weight:600" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
                        </a>
                        <br>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                           </div>


                           </div>
                        
                       </div>
                    </div>
                 </div>
            </div>
        </div>
     </section>



@endsection
@section('js')
<script>
    $(document).on('change', '.division', function() {
       let id = $(this).val();

       $.ajax({
           method: "GET",
           url:"{{ route('find.district') }}",
           data:{'id':id},
           dataType: 'json', //return data will be json
           success: function(data) {
             //   alert(data)
               $('.district').html('<option value="" selected disabled>--District--</option>');
               for (let i = 0; i < data.length; i++) {
                   $('.district').append('<option value="' + data[i]
                       .id + '">' + (data[i].name) + '</option>');
               }
           },
           error: function() {
           }
       });
   });
</script>


@endsection