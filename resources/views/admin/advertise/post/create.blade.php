@extends('admin.layouts.app')

@section('content')
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
        <div class="col-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Advertise Post</h3>
                    <a href="{{route('admin.advertise-post.index')}}" class="btn btn-primary float-right" >
                         Back
                    </a>
                </div>

                <!--Horizontal Form-->
                <!--===================================================-->
                <form class="form-horizontal" action="{{ route('admin.advertise-post.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label">{{__('Category')}}<span style="color: red">*</span></label>
                            <div class="col-sm-12">
                                <select name="category_id" class="form-control" id="category_id" onchange="getSubCat(this.value)" required>
                                    <option value="" disabled selected>---select---</option>
                                    @foreach ($categories as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
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
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Business Name')}}<span style="color: red">*</span></label>
                            <div class="col-sm-12">
                                <input type="text" placeholder="{{__('Business Name')}}" value="{{old('business_name')}}" onkeyup="PermalinkHandler(this.value)" id="title" name="business_name" class="form-control  @error('business_name') is-invalid @enderror" required>
                                @error('business_name')
                                            <div class="text-danger">* {{ $message }}</div>
                                        @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="slug">{{__('Slug')}}<span style="color: red">*</span></label>
                            <div class="col-sm-12">
                                <input type="text" placeholder="{{__('Slug')}}" value="{{old('slug')}}" id="permalink_s" onkeyup="CustomPermalinkHandler(this.value)" name="slug" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Owner Name')}}<span style="color: red"></span></label>
                            <div class="col-sm-12">
                                <input type="text" placeholder="{{__('Owner Name')}}" value="{{old('owner_name')}}" name="owner_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Phone Number')}}<span style="color: red">*</span></label>
                            <div class="col-sm-12">
                                <input type="text" placeholder="{{__('Phone Number')}}" value="{{old('phone')}}" name="phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Email')}}<span style="color: red">*</span></label>
                            <div class="col-sm-12">
                                <input type="text" placeholder="{{__('Email')}}" value="{{old('email')}}" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Country')}}<span style="color: red"></span></label>
                            <div class="col-sm-12">
                                <select name="country_id" id="country_id" class="form-control js-example-basic-single country">
                                    <option value="" selected disabled>--select--</option>
                                    @foreach ($countries as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('State')}}</label>
                            <div class="col-sm-12">
                                <select name="state_id" class="form-control  state js-example-basic-single">
                                    <option value="" selected disabled>--select--</option>
                                    {{-- @foreach ($states as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('City')}}</label>
                            <div class="col-sm-12">
                                <select name="city_id"  class="form-control  city js-example-basic-single">
                                    <option value="" selected disabled>--select--</option>
                                    {{-- @foreach ($cities as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Address')}}<span style="color: red">*</span></label>
                            <div class="col-sm-12">
                                <input type="text" placeholder="{{__('Address')}}" name="address" value="{{old('address')}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Website Link')}}</label>
                            <div class="col-sm-12">
                                <input type="text" placeholder="{{__('Website Link')}}" name="website" value="{{old('website')}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Facebook')}}</label>
                            <div class="col-sm-12">
                                <input type="text" placeholder="{{__('Facebook')}}" value="{{old('facebook')}}" name="facebook" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Google Location')}}</label>
                            <div class="col-sm-12">
                                <input type="text" placeholder="{{__('Google Location')}}" value="{{old('google_location')}}" name="google_location" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Meta Title')}}</label>
                            <div class="col-sm-12">
                                <input type="text" placeholder="{{__('Meta Title')}}" id="name" value="{{old('meta_title')}}" name="meta_title" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Meta Description')}}</label>
                            <div class="col-sm-12">
                                <textarea type="text" placeholder="{{__('Meta Description')}}" id="name" value="{{old('meta_description')}}" name="meta_description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">{{__('Meta Keyword')}}</label>
                            <div class="col-sm-12">
                                <input type="text" placeholder="{{__('Meta Keyword')}}" id="name" value="{{old('keywords')}}" name="keywords" class="form-control">
                            </div>
                        </div>
                        @if(Auth::user()->role_id == 1)
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label">{{__('Status')}}</label>
                            <div class="col-sm-12">
                                <select name="status" class="form-control" id="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inctive</option>
                                </select>
                            </div>
                        </div>
                        @endif

                        <h3 class="mt-4 fw-bolder">Company Details</h3>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">About Company</label>
                            <div class="col-sm-12">
                                <textarea name="about" type="text" class="form-control summernote"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">Founded Date</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="founded_date" placeholder="1989"></input>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">Operating Status</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="operating_status"></input>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">Total Employee</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="total_employee"></input>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">Total Funding Amount</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="total_funding_amount"></input>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">Investment Detail</label>
                            <div class="col-sm-12">
                                <textarea name="investments" type="text" class="form-control summernote"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <label class="col-sm-2 control-label" for="name">Funding Detail</label>
                            <div class="col-sm-12">
                                <textarea name="funding_details" type="text" class="form-control summernote"></textarea>
                            </div>
                        </div>
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
    </section>
</div>

<script type="text/javascript">
    $('#summernote').summernote({
        height: 250
    });

</script>
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

    $( document ).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    //GetSubCat
    var token =  $("input[name=_token]").val();
    function getSubCat(val){
      var datastr = "category_id=" + val  + "&token="+token;
      $.ajax({
        type: "post",
        url: "{{route('admin.shop.advertise-get-sub-category')}}",
        data:datastr,
        cache:false,
        beforeSend: function() {
            // setting a timeout
        },
        success:function (data) {
          $('#subcategory_id').html(data);

        },
        error: function (jqXHR, status, err) {
        //   alert(status);
          console.log(err);
        },
        complete: function () {
          // alert("Complete");
        }
      });
    }

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
    // In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
$('.js-example-basic-single').select2();
});
</script>
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
