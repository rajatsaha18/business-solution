@extends('bdshop.frontEnd.buy-sell.layouts.app')
@section('content')
<style>
    .item-form{
        width:50%;
    }
    .land-form{
        width:75%;
    }
    @media(max-width:600px){
        .item-form{
        width:100%!important;
    }
    .land-form{
        width:100%!important;
    }
    .test{
      text-align: center!important;
    }
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<section class="mx-auto mt-5 land-form">
    <div class="card shadow p-4 mb-3">
        <div class="row">
            <div class="col-md-3 col-sm-3">
            <h5 class="text-start test">Fill in the details</h5>
       
            </div>
            <div class="col-md-6 col-sm-6">

            </div>
            <div class="col-md-3 col-sm-3">
            <h5 class="text-end test"><i class="fa fa-building " style="color:#149777" aria-hidden="true"></i> {{$item->title}}</h5>
            </div>
        </div>
        <hr>
        <div class="w-50 mx-auto mt-3 item-form">

          <form action="{{route('buyselluser.user.ad.update',$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
                    <p>Land Type</p>
                    <div class="d-flex gap-3">
                    <input type="radio" id="age1" name="land_type" class="@error('land_type') is-invalid @enderror" value="Agricultural" {{$data_details-> land_type=='Agricultural'?'checked':''}}>
                    <label for="age1">Agricultural</label><br>
                    <input type="radio" id="age2" name="land_type" class="@error('land_type') is-invalid @enderror" value="Residential" {{$data_details-> land_type=='Residential'?'checked':''}}>
                    <label for="age2">Residential</label><br>  
                    <input type="radio" id="age3" name="land_type" class="@error('land_type') is-invalid @enderror" value="Commercial" {{$data_details-> land_type=='Commercial'?'checked':''}}>
                    <label for="age3">Commercial</label>
                    <input type="radio" id="age4" name="land_type" class="@error('land_type') is-invalid @enderror" value="Other" {{$data_details-> land_type=='Other'?'checked':''}}>
                    <label for="age4">Other</label>

                   
                  </div>
                  @error('land_type')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                </div>
               
                <div class="mb-3">
                    <div class="d-flex gap-3">
                        <div style="width:75%">
                           <label class="pb-2">Land Size</label>
                           <input type="text" value="{{$data_details -> land_size}}"  class="form-control @error('land_size') is-invalid @enderror" name="land_size" placeholder="What's the size of your land?">
                           @error('land_size')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                        </div>
                        <div>
                        <label class="pb-2">Unit</label>
                            <select name="land_unit" id="" class="form-select @error('land_unit') is-invalid @enderror">
                                <option value="">--Select--</option>
                                <option value="katha" {{$data_details->land_unit =='katha'?'selected':''}}>katha</option>
                                <option value="Bigha" {{$data_details->land_unit =='Bigha'?'selected':''}}>Bigha</option>
                                <option value="Acres" {{$data_details->land_unit =='Acres'?'selected':''}}>Acres</option>
                                <option value="Shotok" {{$data_details->land_unit =='Shotok'?'selected':''}}>Shotok</option>
                                <option value="Decimal" {{$data_details->land_unit =='Decimal'?'selected':''}}>Decimal</option>
                               
                            </select>
                            @error('land_unit')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                        </div>
                    </div>
                </div>
               
              
               
                <div class="mb-3">
                    <label class="pb-2">Address </label>
                    <textarea name="address"  class="form-control @error('address') is-invalid @enderror" placeholder="Enter your address">{{$data->address}}</textarea>
                    @error('address')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label class="pb-2">Title </label>
                    <input type="text" value="{{$data->title}}" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Keep it short!"> 
                    @error('title')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label class="pb-2">Description </label>
                    <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror" cols="1" rows="5" placeholder="more details==more responses">{!! $data->description !!}</textarea>
                    @error('description')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                 </div>
                 <div class="mb-3">
                    <div class="d-flex gap-3">
                    <div class="mb-3 w-75">
                        
                        <label class="pb-2">Rent (TK/month)</label>
                        <input type="number" value="{{$data->rent}}" class="form-control @error('rent') is-invalid @enderror" name="rent" placeholder="What's the rent of your property?">
                        @error('rent')
                     <div class="text-danger">* {{ $message }}</div>
                   @enderror
                    
                 </div>
                 <div>
                     <label class="pb-2">Unit</label>
                         <select name="price_unit" id="" class="form-select @error('price_unit') is-invalid @enderror">
                             <option value="">--Select--</option>
                             <option value="total price" {{$data_details -> price_unit =='total price'?'selected':''}}>total price</option>
                             <option value="per khata" {{$data_details -> price_unit =='per khata'?'selected':''}}>per khata</option>
                             <option value="per bigha"{{$data_details -> price_unit =='per bigha'?'selected':''}}>per bigha</option>
                             <option value="per acre" {{$data_details -> price_unit =='per acre'?'selected':''}}>per acre</option>
                             <option value="per shotok" {{$data_details -> price_unit =='per shotok'?'selected':''}}>per shotok</option>
                             <option value="per decimal" {{$data_details -> price_unit =='per decimal'?'selected':''}}>per decimal</option>

                            
                         </select>
                         @error('price_unit')
                     <div class="text-danger">* {{ $message }}</div>
                   @enderror
                 </div>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="checkbox" id="vehicle1" name="negotiable" value="1" {{$data->negotiable=='1'?'checked':''}}>
                    <label for="vehicle1"> Negotiable</label><br>
                 </div>
                 <div class="mb-3">
                    
                    <label class="pb-2"> Thumbnail Image</label><br>
                    <img src="{{asset($data->thumbnail_img)}}" style="width:100px"></img>

                    <input type="file" name="thumbnail_img" class="form-control @error('thumbnail_img') is-invalid @enderror">
                    @error('thumbnail_img')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                 </div>
                
                 <div class="mb-3">
                    
                    <label class="pb-2">Add More Images</label><br>
                    <input type="file" name="images[]" class="form-control" multiple>
                 </div>
                 <div class="row">
                    @foreach($data_images as $item)
                    <div class="col-md-4 col-sm-6 mb-5 card shadow p-2">
                        <img src="{{asset($item->images)}}"  id="delete_image" style="width:150px;height:150px;position:relative"></img>
                        <h6  id="delete_image-{{$item->id}}" delete_id="{{$item->id}}" style="background-color:red;color:white;border-radius:50%;text-align:center;padding:6px;width:30px;position:absolute;top:0;right:0;cursor:pointer">x</h6>

                    </div>
                    @endforeach
                    
                  </div>
                 <hr class="mt-5 mb-5">
                 <h5>Contact Details</h5>
                 <h6 class="mt-3">Name</h6>
                 <p>{{$data->user->name}}</p>
                  <div class="card shadow p-4">
                     <p>Phone Number</p>
                     <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> {{$data->user->phone}}<hr></p>
                     <div class="mb-3">
                    
                    <label class="pb-2">Add Another Phone Number (Optional)</label><br>
                    <input type="text" value="{{$data->phone}}" name="phone" class="form-control" placeholder="For multiple phone number add(,)between numbers">
                 </div>
                     
                  </div>
                  <div class="mt-3">
                     <button type="submit" class="btn float-end" style="background-color:#149777;color:white">Update Ad</button>
                  </div>
          </form>

        </div>
    </div>
</section>


@endsection
@section('js')
<script>
$(document).on("click", 'h6[id^="delete_image"]', function(event) { 

    let id=$(this).attr('delete_id');
    
	var url = "{{ route('buyselluser.user.ad.iamge.delete', ':id') }}";
	url = url.replace(':id', id);
	location.href = url;

});
</script>


@endsection
