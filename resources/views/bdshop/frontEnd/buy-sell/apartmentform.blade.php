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

          <form action="{{route('buyselluser.item.submit')}}" method="post" enctype="multipart/form-data">
            @csrf
                <div class="mb-3">
                <input type="text"  name="item_id" value="{{$item->id}}" hidden>
                    <label class="pb-2">Beds</label>
                    <select name="beds" id="" class="form-select @error('beds') is-invalid @enderror">
                          <option value="">Beds</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="10+">10+</option>

                    </select>
                    @error('beds')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label class="pb-2">Baths</label>
                    <select name="baths" id="" class="form-select @error('baths') is-invalid @enderror">
                          <option value="">Baths</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="10+">10+</option>

                    </select>
                    @error('baths')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                   
                </div>
                <div class="mb-3">
                    <label class="pb-2">Size(sqrt)</label>
                    <input type="number" class="form-control @error('size') is-invalid @enderror" name="size" placeholder="What's the size of the property?">
                    @error('size')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label class="pb-2">Features (optional)</label>
                    <input type="text" class="form-control" name="features">
                </div>
                <div class="mb-3">
                    <label class="pb-2">Facing</label>
                    <select name="facing" id="" class="form-select  @error('size') is-invalid @enderror">
                          <option value="">Facing</option>
                          <option value="South Facing">South Facing</option>
                          <option value="East Facing">East Facing</option>
                          <option value="West Facing">West Facing</option>
                          <option value="North Facing">North Facing</option>
                    </select>
                    @error('facing')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                   
                </div>
                <div class="mb-3">
                <p>Completion Status</p>
                  <div class="d-flex gap-5">
                    <div>
                    <input type="radio" id="age1" name="completion_status" class="@error('completion_status') is-invalid @enderror"  value="Ready">
                    <label for="age1">Ready</label><br>
                    <input type="radio" id="age2" name="completion_status" class="@error('completion_status') is-invalid @enderror" value="Ongoing">
                    <label for="age2">Ongoing</label><br>  
                    </div>
                    <div>
                    <input type="radio" id="age3" name="completion_status"class="@error('completion_status') is-invalid @enderror" value="Upcoming">
                    <label for="age3">Upcoming</label>
                    </div>
                  </div>
                  @error('completion_status')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                </div>
              
                <div class="mb-3">
                    <label class="pb-2">Address </label>
                    <textarea name="address"  class="form-control @error('address') is-invalid @enderror" placeholder="Enter your address"></textarea>
                    @error('address')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label class="pb-2">Title </label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="Keep it short!"> 
                    @error('title')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                </div>
                <div class="mb-3">
                    <label class="pb-2">Description </label>
                    <textarea name="description" id="summernote" class="form-control @error('description') is-invalid @enderror" cols="1" rows="5" placeholder="more details==more responses"></textarea>
                    @error('description')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                 </div>
                 <div class="d-flex gap-3">
                 <div class="mb-3">
                    <label class="pb-2">Rent (TK/month)</label>
                    <input type="number" class="form-control  @error('rent') is-invalid @enderror" name="rent" placeholder="What's the rent of your property?">
                    @error('rent')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                </div>
                <div>
                        <label class="pb-2">Unit</label>
                            <select name="price_unit" id="" class="form-select @error('price_unit') is-invalid @enderror">
                                <option value="">--Select--</option>
                                <option value="total price">total price</option>
                                <option value="per sqrt">per sqrt</option>
                               
                               
                            </select>
                            @error('price_unit')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                        </div>
                 </div>
                 <div class="mb-3">
                    <input type="checkbox" id="vehicle1" name="negotiable" value="1">
                    <label for="vehicle1"> Negotiable</label><br>
                 </div>
                 <div class="mb-3">
                    
                    <label class="pb-2"> Thumbnail Image</label><br>
                    <input type="file" name="thumbnail_img" class="form-control @error('thumbnail_img') is-invalid @enderror">
                    @error('thumbnail_img')
                        <div class="text-danger">* {{ $message }}</div>
                      @enderror
                 </div>
                
                 <div class="mb-3">
                    
                    <label class="pb-2">Add More Images</label><br>
                    <input type="file" name="images[]" class="form-control" multiple>
                 </div>

                 <hr class="mt-5 mb-5">
                 <h5>Contact Details</h5>
                 <h6 class="mt-3">Name</h6>
                  <p>{{$user->name}}</p>

                  <div class="card shadow p-4">
                     <p>Phone Number</p>
                     <p><i class="fa fa-check-circle-o" aria-hidden="true"></i> {{$user->phone}}<hr></p>
                     <div class="mb-3">
                    
                    <label class="pb-2">Add Another Phone Number</label><br>
                    <input type="text" name="phone" class="form-control" placeholder="For multiple phone number add(,)between numbers">
                 </div>
                     
                  </div>
                  <div class="mt-3">
                     <button type="submit" class="btn float-end" style="background-color:#149777;color:white">Post Ad</button>
                  </div>
          </form>

        </div>
    </div>
</section>


@endsection