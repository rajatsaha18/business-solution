@extends('admin.layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Advertise Post</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Advertise Post</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Advertise Post</h3>
                        <a href="{{route('admin.advertise-post.index')}}" class="btn btn-primary float-right" >
                             Back
                        </a>
                    </div>

                    <div class="card-body">
<!--Horizontal Form-->
                    <!--===================================================-->
                    <form class="form-horizontal" action="{{ route('admin.store.company.to.post')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{-- @method('patch') --}}
                        <div class="card-body">
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Business Category')}}<span style="color: red">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Business Category')}}" value="{{$data->business_category}}" id="title" name="business_category" class="form-control" required>
                                    <input type="text" name="id" value="{{$data->id}}" hidden>
                                    <input type="text" name="user_id" value="{{$data->user_id}}" hidden>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label">{{__('Category')}}<span style="color: red">*</span></label>
                                <div class="col-sm-12">
                                    <select name="category_id" class="form-control" id="category_id" required>
                                        <option value="" disabled selected>---select---</option>
                                        @foreach ($categories as $item)
                                            <option value="{{$item->id}}" @php if ($data['category_id'] == $item->id) { echo "selected"; } @endphp>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label">{{__('Sub Category')}}<span style="color: red">*</span></label>
                                <div class="col-sm-12">
                                    <select name="subcategory_id" class="form-control" id="subcategory_id" required>
                                        <option value="" disabled selected>---select---</option>
                                        @foreach ($sub_categories as $item)
                                            <option value="{{$item->id}}" @php if ($data['subcategory_id'] == $item->id) { echo "selected"; } @endphp>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Business Name')}}<span style="color: red">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Business Name')}}" value="{{$data->business_name}}" onkeyup="PermalinkHandler(this.value)" id="title" name="business_name" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="slug">{{__('Slug')}}<span style="color: red">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Slug')}}" id="permalink_s" value="{{$data->slug}}" onkeyup="CustomPermalinkHandler(this.value)" name="slug" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Owner Name')}}<span style="color: red">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Owner Name')}}" name="owner_name" value="{{$data->owner_name}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Phone Number')}}<span style="color: red">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Phone Number')}}" value="{{$data->phone}}" name="phone" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Email')}}<span style="color: red">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Email')}}" name="email" value="{{$data->email}}" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Country')}}<span style="color: red"></span></label>
                                <div class="col-sm-12">
                                    <select name="country_id" id="country_id" class="form-control js-example-basic-single country">
                                        <option value="" selected disabled>--select--</option>
                                        @foreach ($countries as $item)
                                            <option value="{{$item->id}}" {{$item->id ==$data->country?'selected':''}}>{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('State')}}</label>
                                <div class="col-sm-12">
                                    <?php 
                                        $state_name=DB::table('states')->where('id',$data->state)->first();
                                        $city=DB::table('cities')->where('id',$data->city)->first();
                                    ?>
                                    <select name="state_id" class="form-control  state js-example-basic-single" >
                                        <option value="" selected disabled>--select--</option>
                                        {{-- @foreach ($states as $item) --}}
                                            <option value="{{isset($data->state)?$data->state:''}}" selected>{{isset($state_name->name)?$state_name->name:''}}</option>
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('City')}}</label>
                                <div class="col-sm-12">
                                    <select name="city_id"  class="form-control  city js-example-basic-single" >
                                        <option value="" selected disabled>--select--</option>
                                        {{-- @foreach ($cities as $item) --}}
                                            <option value="{{isset($data->city)?$data->city:''}}" selected>{{isset($city->name)?$city->name:''}}</option>
                                        {{-- @endforeach --}}
                                    </select>
                                </div>
                            </div>
                           
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Address')}}<span style="color: red">*</span></label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Address')}}" name="address" value="{{$data->address}}" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Website Link')}}</label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Website Link')}}" name="website" value="{{$data->website}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Facebook')}}</label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Facebook')}}" name="facebook" value="{{$data->facebook}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Google Location')}}</label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Google Location')}}" name="google_location" value="{{$data->google_location}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Meta Title')}}</label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Meta Title')}}" id="name" name="meta_title" value="{{$data->meta_title}}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Meta Description')}}</label>
                                <div class="col-sm-12">
                                    <textarea type="text" placeholder="{{__('Meta Description')}}" id="name" name="meta_description" class="form-control">{{$data->meta_description}}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label" for="name">{{__('Meta Keyword')}}</label>
                                <div class="col-sm-12">
                                    <input type="text" placeholder="{{__('Meta Keyword')}}" id="name" value="{{$data->keywords}}" name="keywords" class="form-control">
                                </div>
                            </div>
                            @if(Auth::user()->role_id == 1)
                            <div class="col-md-12 mt-2">
                                <label class="col-sm-2 control-label">{{__('Status')}}</label>
                                <div class="col-sm-12">
                                    <select name="status" class="form-control" id="status">
                                        <option value="1" @php if ($data['status'] == 1) { echo "selected"; } @endphp>Active</option>
                                        <option value="0" @php if ($data['status'] == 0) { echo "selected"; } @endphp>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            @endif
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Save</button>
                                </div>
                            </div>
                        </div>

                    </form>
                    <!--===================================================-->
                    <!--End Horizontal Form-->
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<script>
    $("#thumbnail_img").spartanMultiImagePicker({
			fieldName:        'thumbnail_img',
			maxCount:         1,
			rowHeight:        '200px',
			groupClassName:   'col-md-4 col-sm-4 col-xs-6',
			maxFileSize:      '',
			dropFileLabel : "Drop Here",
			onExtensionErr : function(index, file){
				console.log(index, file,  'extension err');
				alert('Please only input png or jpg type file')
			},
			onSizeErr : function(index, file){
				console.log(index, file,  'file size too big');
				alert('File size too big');
			}
		});
</script>

<script>
    function PermalinkHandler(str)
    {
         token = $("input[name='_token']").val();
         data = {
                "_token": token,
                "str": str
            };

            $.ajax({
                url: "{{route('admin.slug.create')}}",
                type: "post",
                data:data,
                success: function (response) {
                    $('#permalink_s').val(response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                }
            });

    }

    function CustomPermalinkHandler(title){
        if (/\s/.test(title)) {
            title = title.replace(/\s+/g, '-');
        }
        document.getElementById("perma_link").innerHTML = title;
        document.getElementById("permalink").value=title;
    }
</script>


@endsection
@section('script')
<script>
     let id=document.getElementById('country_id').value;
 if(id!=18){
    $('#district-id').hide();
      $('#thana-id').hide();
 }
</script>
<script>
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
$('.js-example-basic-single').select2();

});
</script>
{{-- <script>
    $(document).on('change', '#country_id', function() {
    if ($(this).val() == "18") {
      $('#district-id').show();
      $('#thana-id').show();
      $('#district-id-select').attr('required', '');
      $('#thana-id-select').attr('required', '');
      
    } else {
      $('#district-id').hide();
      $('#thana-id').hide();
      $('#area-id').hide();
      $('#district-id-select').removeAttr('required');
      $('#thana-id-select').removeAttr('required');
      $('#area-id-select').removeAttr('required');

    }
  });
  </script> --}}
  <script>
    $(document).on('change', '.country', function() {
       let id = $(this).val();
       
       $.ajax({
           method: "GET",
           url:"{{ route('find.state') }}",
           data:{'id':id},
           dataType: 'json', //return data will be json
           success: function(data) {
             //   alert(data)
               $('.state').html('<option value="" selected disabled>--select--</option>');
               for (let i = 0; i < data.length; i++) {
                   $('.state').append('<option value="' + data[i]
                       .id + '">' + (data[i].name) + '</option>');
               }
           },
           error: function() {
           }
       });
   });
</script>
<script>
    $(document).on('change', '.state', function() {
       let id = $(this).val();
       
       $.ajax({
           method: "GET",
           url:"{{ route('find.city') }}",
           data:{'id':id},
           dataType: 'json', //return data will be json
           success: function(data) {
             //   alert(data)
               $('.city').html('<option value="" selected disabled>--select--</option>');
               for (let i = 0; i < data.length; i++) {
                   $('.city').append('<option value="' + data[i]
                       .id + '">' + (data[i].name) + '</option>');
               }
           },
           error: function() {
           }
       });
   });
</script>

@endsection