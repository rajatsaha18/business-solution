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

        <form action="{{route('buyselluser.user.ad.update',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                    <label class="pb-2">Title </label>
                    <input type="text" name="title" value="{{$data->title}}" class="form-control @error('title') is-invalid @enderror" placeholder="Keep it short!"> 
                    @error('title')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                </div>
                <div class="mb-3">
                    <p>Condition</p>
                    <div class="d-flex gap-3">

                        <input type="radio" id="age1" name="conditions" class="@error('condition') is-invalid @enderror" value="New" {{$data_details-> conditions=='New'?'checked':''}}>
                        <label for="age1">New</label><br>
                        <input type="radio" id="age2" name="conditions" class="@error('condition') is-invalid @enderror" value="Used" {{$data_details-> conditions=='Used'?'checked':''}}>
                        <label for="age2">Used</label><br>
                        <input type="radio" id="age3" name="conditions" class="@error('condition') is-invalid @enderror" value="Reconditioned" {{$data_details-> conditions=='Reconditioned'?'checked':''}}>
                        <label for="age3">
                            Reconditioned</label>

                 

                    </div>
                    @error('conditions')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror

                </div>


                <div class="mb-3">

                    <div>
                        <label class="pb-2">Brand</label>
                        <input tyle="text" name="brand" value="{{$data_details->brand}}"  class="form-control @error('brand') is-invalid @enderror" placeholder="Brand">
                        @error('brand')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror

                    </div>


                </div>
                <div class="mb-3">

                    <div>
                        <label class="pb-2">Model</label>
                        <input tyle="text" name="model" value="{{$data_details->model}}" class="form-control @error('model') is-invalid @enderror" placeholder="Model">

                        @error('model')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                    </div>


                </div>
                <div class="mb-3">

                    <div>
                        <label class="pb-2">Trim / Edition (optional)</label>
                        <input tyle="text" name="trim" class="form-control" value="{{$data_details->brand}}" placeholder="What is the trim/edition of your car?">
                       

                    </div>


                </div>
                <div class="mb-3">

                    <div>
                        <label class="pb-2">Year of Manufacture</label>
                        <input type="number" name="year_of_manufacture" value="{{$data_details->year_of_manufacture}}" class="form-control @error('year_of_manufacture') is-invalid @enderror" placeholder="When was your car manufactured ?">
                        @error('year_of_manufacture')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror


                    </div>


                </div>
                <div class="mb-3">

                    <div>
                        <label class="pb-2">Kilometers run (km)</label>
                        <input type="number" name="kilometers_run" value="{{$data_details->kilometers_run}}" class="form-control @error('kilometers_run') is-invalid @enderror" placeholder="What is the mileage ?">
                        @error('kilometers_run')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                    </div>


                </div>
                <div class="mb-3">

                    <div>
                        <label class="pb-2">Engine capacity (cc)</label>
                        <input type="number" name="engine_capacity" value="{{$data_details->engine_capacity}}" class="form-control @error('engine_capacity') is-invalid @enderror" placeholder="What is the engine capacity of your car ?">
                        @error('engine_capacity')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                    </div>


                </div>
                <div class="mb-3">


                    <label class="pb-2">Fuel Type</label>
                    <select name="fuel_type" id="" class="form-select @error('fuel_type') is-invalid @enderror">
                        <option value="">--Select--</option>
                        <option value="Diesel" {{$data_details -> fuel_type=='Diesel'?'selected':''}}>Diesel</option>
                        <option value="Petrol" {{$data_details -> fuel_type=='Petrol'?'selected':''}}>Petrol</option>
                        <option value="CNG" {{$data_details -> fuel_type=='CNG'?'selected':''}}>CNG</option>
                        <option value="Hybrid" {{$data_details -> fuel_type=='Hybrid'?'selected':''}}>Hybrid</option>
                        <option value="Electric" {{$data_details -> fuel_type=='Electric'?'selected':''}}>Electric</option>
                        <option value="Octane" {{$data_details -> fuel_type=='Octane'?'selected':''}}>Octane</option>
                        <option value="LPG" {{$data_details -> fuel_type=='LPG'?'selected':''}}>LPG</option>
                        <option value="other_fuel_type" {{$data_details -> fuel_type=='other_fuel_type'?'selected':''}}>other fuel type</option>


                    </select>
                    @error('fuel_type')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror


                </div>




                <div class="mb-3">
                    <p>Transmission</p>
                    <div class="d-flex gap-3">

                        <input type="radio" id="age4" name="transmission" class="@error('transmission') is-invalid @enderror" value="Manual" {{$data_details-> transmission=='Manual'?'checked':''}}>
                        <label for="age4">Manual</label><br>
                        <input type="radio" id="age5" name="transmission" class="@error('transmission') is-invalid @enderror" value="Automatic" {{$data_details-> transmission=='Automatic'?'checked':''}}>
                        <label for="age5">Automatic</label><br>
                        <input type="radio" id="age6" name="transmission" class="@error('transmission') is-invalid @enderror" value="other_transmission" {{$data_details-> transmission=='other_transmission'?'checked':''}}>
                        <label for="age6">
                            Other Transmission</label>



                    </div>
                    @error('transmission')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">


                    <label class="pb-2">Body Type</label>
                    <select name="body_type" id="" class="form-select @error('body_type') is-invalid @enderror">
                        <option value="">--Select--</option>
                        <option value="Saloon" {{$data_details -> body_type=='Saloon'?'selected':''}}>Saloon</option>
                        <option value="Hatchback" {{$data_details -> body_type=='Hatchback'?'selected':''}}>Hatchback</option>
                        <option value="Estate" {{$data_details -> body_type=='Estate'?'selected':''}}>Estate</option>
                        <option value="Convertible" {{$data_details -> body_type=='Convertible'?'selected':''}}>Convertible</option>
                        <option value="Coupe/Sports" {{$data_details -> body_type=='Coupe/Sports'?'selected':''}}>Coupe/Sports</option>
                        <option value="SUV/4X4" {{$data_details -> body_type=='SUV/4X4'?'selected':''}}>SUV/4X4</option>
                        <option value="MPV" {{$data_details -> body_type=='MPV'?'selected':''}}>MPV</option>



                    </select>
                    @error('body_type')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">

                    <div>
                        <label class="pb-2">Registration year (optional)</label>
                        <input type="number" name="registration_year" value="{{$data_details->registration_year}}" class="form-control" placeholder="When was your car registered ?">
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
                    <label class="pb-2">Description </label>
                    <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror" cols="1" rows="5" placeholder="more details==more responses">{!!  $data->description     !!}</textarea>
                    @error('description')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">

                        <div>
                            <label class="pb-2">Price (Tk)</label>
                            <input type="number" name="rent" value="{{$data->rent}}"  class="form-control @error('rent') is-invalid @enderror" placeholder="How much do you want to sell your car for ?">   
                            @error('rent')
                    <div class="text-danger">* {{ $message }}</div>
                    @enderror  
                        </div>


                    </div>
                <div class="mb-3">
                    <input type="checkbox" id="vehicle1" name="negotiable" value="1" {{$data->negotiable=='1'?'checked':''}}>
                    <label for="vehicle1"> Negotiable</label><br>
                </div>
                <div class="mb-3">
                    
                    <label class="pb-2"> Thumbnail Image</label><br>
                    <img src="{{asset($data->thumbnail_img)}}" style="width:100px" alt=""><br>
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
                    
                    <label class="pb-2">Add Another Phone Number</label><br>
                    <input type="text" name="phone" class="form-control" value="{{$data->phone}}" placeholder="For multiple phone number add(,)between numbers">
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