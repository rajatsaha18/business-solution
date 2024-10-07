@extends('admin.layouts.app')
@section('title')
<title>{{ config('app.name', 'Laravel') }} | Site Setting</title>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Site Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Site Setting</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Site Image</h1>
                        <form action="{{route('admin.site-setting.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label>Logo <span style="color: red">*</span> </label>
                                    @if(isset($general_setting->logo))
                                    <img src="{{asset($general_setting->logo)}}" alt="logo" width="40px">

                                    @endif
                                    <input type="file" class="form-control" name="logo" placeholder="Name">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>FavIcon <span style="color: red">*</span></label>
                                    @if (isset($general_setting->favicon))
                                    <img src="{{asset($general_setting->favicon)}}" alt="favicon" width="40px">

                                    @endif
                                    <input type="file" class="form-control" name="favicon">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Admin Logo <span style="color: red">*</span></label>
                                    @if (isset($general_setting->admin_logo))
                                    <img src="{{asset($general_setting->admin_logo)}}" alt="admin logo" width="40px">

                                    @endif
                                    <input type="file" class="form-control" name="admin_logo">
                                </div>

                                <div class="col-md-12 mt-2">
                                    <label>Header Banner <span style="color: red">*</span></label>
                                    @if (isset($general_setting->header_banner))
                                    <img src="{{asset($general_setting->header_banner)}}" alt="Header Banner" width="40px">

                                    @endif
                                    <input type="file" class="form-control" name="header_banner">
                                </div>

                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="card-body">
                        <h1>Site Setting</h1>
                        <form action="{{route('admin.sitesettingupdate')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 mt-2">
                                    <label>About</label>
                                    <textarea class="form-control" name="about">{{isset($sitesetting->about)?$sitesetting->about:''}}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Content</label>
                                    <textarea class="form-control" name="content">{{isset($sitesetting->content)?$sitesetting->content:''}}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Google Map</label>
                                    <textarea class="form-control" name="google_map">{{isset($sitesetting->google_map)?$sitesetting->google_map:''}}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Title</label>
                                    <input type="text" value="{{isset($sitesetting->meta_title)?$sitesetting->meta_title:''}}" class="form-control" name="meta_title">
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" name="meta_description">{{isset($sitesetting->meta_description)?$sitesetting->meta_description:''}}</textarea>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Meta Keyword</label>
                                    <input type="text" value="{{isset($sitesetting->meta_keyword)?$sitesetting->meta_keyword:''}}" class="form-control" name="meta_keyword">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="card-body">
                        <h1>Social Account Setting</h1>
                        <form action="{{route('admin.social-link.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12 mt-2">
                                    <label>Facebook <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="facebook" value="{{$social->facebook ?? ''}}" placeholder="Facebook link" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Youtube <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" value="{{$social->youtube ?? ''}}" name="youtube" placeholder="Youtube" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Linkdin <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" value="{{$social->linkdin ?? ''}}" name="linkdin" placeholder="linkdin" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Twitter <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" value="{{$social->twitter ?? ''}}" name="twitter" placeholder="Twitter" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <h1>Contact Page Info</h1>
                        <form action="{{route('admin.shop-save-contact')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="col-md-12 mt-2">
                                    <label>Company Name <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" name="company_name" value="{{$info->company_name ?? ''}}" placeholder="Company Name" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Address <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" value="{{$info->address ?? ''}}" name="address" placeholder="Address" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Phone <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" value="{{$info->phone ?? ''}}" name="phone" placeholder="Phone" required>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <label>Email <span style="color: red">*</span> </label>
                                    <input type="text" class="form-control" value="{{$info->email ?? ''}}" name="email" placeholder="Email" required>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <button class="btn btn-success" type="submit">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->
@endsection