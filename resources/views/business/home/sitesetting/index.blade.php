@extends('admin.layouts.app')

@section('content')

<section class="py-5">
    <div class="">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h4 class="text-center">SiteSetting</h4>
                <div class="card card-body">
                    <form action="{{route('admin.business.home.create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="col-md-12 mt-2">
                                <label>Logo <span style="color: red">*</span> </label>
                                @if(isset($businessSiteSetting->logo))
                                <img src="{{asset($businessSiteSetting->logo)}}" alt="logo" width="40px">

                                @endif
                                <input type="file" class="form-control" name="logo" placeholder="Name">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>FavIcon <span style="color: red">*</span></label>
                                @if (isset($businessSiteSetting->favicon))
                                <img src="{{asset($businessSiteSetting->favicon)}}" alt="favicon" width="40px">

                                @endif
                                <input type="file" class="form-control" name="favicon">
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>About <span style="color: red">*</span> </label>
                                <textarea class="form-control" name="about" placeholder="About">{{$businessSiteSetting->about}}</textarea>
                            </div>
                            <div class="col-md-12 mt-2">

                                <label>Content</label>
                                <textarea class="form-control" name="content" placeholder="Content">{{$businessSiteSetting->content}}</textarea>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Email <span style="color: red">*</span> </label>
                                <input type="email" class="form-control" value="{{$businessSiteSetting->email}}" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Phone <span style="color: red">*</span> </label>
                                <input type="text" class="form-control" value="{{$businessSiteSetting->phone}}" name="phone" placeholder="Phone">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Address <span style="color: red">*</span> </label>
                                <textarea name="address" id="editor1">{!! $businessSiteSetting->address !!} </textarea>
                                <!-- <input type="text" class="form-control" id="editor1" value="{!! $businessSiteSetting->address !!}" name="address" placeholder="Address"> -->
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Google Map <span style="color: red">*</span></label>
                                <textarea class="form-control" name="google_map" placeholder="Google Map">{{$businessSiteSetting->google_map}}</textarea>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Meta Title <span style="color: red">*</span> </label>
                                <input type="text" class="form-control" value="{{$businessSiteSetting->meta_title}}" name="meta_title" placeholder="Meta Title">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Meta Description <span style="color: red">*</span> </label>
                                <textarea class="form-control" name="meta_description" placeholder="Meta Description">{{$businessSiteSetting->meta_description}}</textarea>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Meta Keyword <span style="color: red">*</span> </label>
                                <input type="text" class="form-control" value="{{$businessSiteSetting->meta_keyword}}" name="meta_keyword" placeholder="Meta Keyword">
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1" selected>Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <button class="btn btn-success" type="submit">Save</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="content">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">SiteSetting</h3>
                    
                </div>
                
                    <div class="card-body">
                        <form action="{{route('admin.business.home.create')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">

    <div class="col-md-12 mt-2">
        <label>About <span style="color: red">*</span> </label>
        <input type="text" class="form-control" name="about" placeholder="About" required>
    </div>
    <div class="col-md-12 mt-2">
        <label>Content</label>
        <input type="text" class="form-control" name="content" placeholder="Content">
    </div>
    <div class="col-md-12 mt-2">
        <label>Google Map <span style="color: red">*</span> </label>
        <input type="text" class="form-control" name="google_map" placeholder="Google Map">
    </div>
    <div class="col-md-12 mt-2">
        <label>Meta Title <span style="color: red">*</span> </label>
        <input type="text" class="form-control" name="meta_title" placeholder="Meta Title" required>
    </div>
    <div class="col-md-12 mt-2">
        <label>Meta Description <span style="color: red">*</span> </label>
        <input type="text" class="form-control" name="meta_description" placeholder="Meta Description" required>
    </div>
    <div class="col-md-12 mt-2">
        <label>Meta Keyword <span style="color: red">*</span> </label>
        <input type="text" class="form-control" name="meta_keyword" placeholder="Meta Keyword" required>
    </div>


    <div class="col-md-12 mt-2">
        <label>Status</label>
        <select name="status" class="form-control">
            <option value="1" selected>Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
</div>
<div class="row mt-2">
    <div class="col-md-12">
        <button class="btn btn-success" type="submit">Save</button>
    </div>
</div>
</form>
</div>


</div>
</div>
</div>
</section> --}}
<script>
    CKEDITOR.replace("editor1");
</script>
@endsection