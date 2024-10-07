@extends('admin.layouts.app')
@section('title')
<title>{{ config('app.name', 'Laravel') }} | Home Page Setup</title>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Home Page Setup</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Home Page Setup</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-10 offset-md-1">
                <div class="card">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-edit"></i>
                                Home Page Setup
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-5 col-sm-3">
                                    <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="vert-tabs-home-tab" data-toggle="pill" href="#vert-tabs-home" role="tab" aria-controls="vert-tabs-home" aria-selected="false">Webiste Image</a>
                                        <a class="nav-link" id="vert-tabs-profile-tab" data-toggle="pill" href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile" aria-selected="false">Footer</a>
                                        <a class="nav-link" id="vert-tabs-social-tab" data-toggle="pill" href="#vert-tabs-social" role="tab" aria-controls="vert-tabs-social" aria-selected="false">Social</a>
                                        <a class="nav-link" id="vert-tabs-contact-tab" data-toggle="pill" href="#vert-tabs-contact" role="tab" aria-controls="vert-tabs-contact" aria-selected="false">Contact</a>
                                        <a class="nav-link" id="vert-tabs-meta-tab" data-toggle="pill" href="#vert-tabs-meta" role="tab" aria-controls="vert-tabs-meta" aria-selected="false">Website Seo</a>
                                    </div>
                                </div>
                                <div class="col-7 col-sm-9">
                                    <div class="tab-content" id="vert-tabs-tabContent">
                                        <div class="tab-pane active show text-left fade" id="vert-tabs-home" role="tabpanel" aria-labelledby="vert-tabs-home-tab">
                                            <form action="{{route('admin.home-setup.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-12 mt-2">
                                                        <label>Logo <span style="color: red">*</span> </label>
                                                        @if(!empty($setting->logo))
                                                        <img src="{{asset($setting->logo)}}" alt="Logo" width="80px">
                                                        @endif
                                                        <input type="file" class="form-control" name="logo">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Dark Logo <span style="color: red">*</span> </label>
                                                        @if(!empty($setting->dark_logo))
                                                        <img src="{{asset($setting->dark_logo)}}" alt="Logo" width="80px">
                                                        @endif
                                                        <input type="file" class="form-control" name="dark_logo">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Favicon</label>
                                                        @if(!empty($setting->favicon))
                                                        <img src="{{asset($setting->favicon)}}" alt="favicon" width="40px">
                                                        @endif
                                                        <input type="file" class="form-control" name="favicon">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <label>Head Text </label>
                                                    <textarea type="text" name="head_text" class="form-control">{{$setting->head_text ?? ''}}</textarea>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <label>What We Do Description</label>
                                                    <textarea type="text" name="what_we_do" id="summernote" class="form-control">{{$setting->what_we_do ?? ''}}</textarea>
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <label>What We Do Video Link </label><br>
                                                    {{-- @dd($setting) --}}
                                                    @if(!empty($setting->what_we_do_image))
                                                    @php
                                                    $youtube = $setting->what_we_do_image
                                                    @endphp

                                                    <iframe height="100px" width="300px" src="https://www.youtube.com/embed/{{$youtube}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    @endif
                                                    <input type="text" class="form-control" name="what_we_do_image">
                                                </div>
                                                <div class="col-md-12 mt-2">
                                                    <label>Hero Section banner home page </label>
                                                    @if(!empty($setting->hero_banner))
                                                    <img src="{{asset($setting->hero_banner)}}" alt="Logo" width="80px">
                                                    @endif
                                                    <input type="file" class="form-control" name="hero_banner">
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-success" type="submit">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="vert-tabs-profile" role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                            <form action="{{route('admin.footer-abouts.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-12 mt-2">
                                                        <label>About </label>
                                                        {{-- @dd($setting->about) --}}
                                                        <input type="text" class="form-control" value="{{$footer_about->about ?? ''}}" name="about">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Copy Right </label>
                                                        <input type="text" class="form-control" value="{{$footer_about->copyright ?? ''}}" name="copyright">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-success" type="submit">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="vert-tabs-social" role="tabpanel" aria-labelledby="vert-tabs-social-tab">
                                            <form action="{{route('admin.social.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-12 mt-2">
                                                        <label>Facebook </label>
                                                        <input type="text" class="form-control" placeholder="Facebook" value="{{$social->facebook ?? ''}}" name="facebook">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Youtube</label>
                                                        <input type="text" class="form-control" placeholder="Youtube" value="{{$social->youtube ?? ''}}" name="youtube">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Twitter </label>
                                                        <input type="text" class="form-control" placeholder="Twitter" value="{{$social->twitter ?? ''}}" name="twitter">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Dribble</label>
                                                        <input type="text" class="form-control" placeholder="Dribble" value="{{$social->dribble ?? ''}}" name="dribble">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Benance </label>
                                                        <input type="text" class="form-control" placeholder="Benance" value="{{$social->benance ?? ''}}" name="benance">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Linkedin</label>
                                                        <input type="text" class="form-control" placeholder="Linkedin" value="{{$social->linkdin ?? ''}}" name="linkdin">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Email</label>
                                                        <input type="text" class="form-control" placeholder="Email" value="{{$social->email ?? ''}}" name="email">
                                                    </div>
                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-success" type="submit">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="vert-tabs-contact" role="tabpanel" aria-labelledby="vert-tabs-contact-tab">
                                            <form action="{{route('admin.contact.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-12 mt-2">
                                                        <label>Phone Text</label>
                                                        <input type="text" class="form-control" placeholder="Phone Text" value="{{$setting->phone_text ?? ''}}" name="phone_text">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Phone Number</label>
                                                        <input type="text" class="form-control" placeholder="Phone Number" value="{{$setting->phone_number ?? ''}}" name="phone_number">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Email Text</label>
                                                        <input type="text" class="form-control" placeholder="Email Text" value="{{$setting->email_text ?? ''}}" name="email_text">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Email Address</label>
                                                        <input type="email" class="form-control" placeholder="Email Address" value="{{$setting->email_address ?? ''}}" name="email_address">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Location </label>
                                                        <input type="text" class="form-control" placeholder="Location" value="{{$setting->location ?? ''}}" name="location">
                                                    </div>

                                                </div>
                                                <div class="row mt-2">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-success" type="submit">Update</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="vert-tabs-meta" role="tabpanel" aria-labelledby="vert-tabs-meta-tab">
                                            <form action="{{route('admin.seo-setting.store')}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">

                                                    <div class="col-md-12 mt-2">
                                                        <label>Meta Title</label>
                                                        <input type="text" class="form-control" placeholder="Meta Title" value="{{$setting->meta_title ?? ''}}" name="meta_title">
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Meta Description</label>
                                                        <textarea type="text" class="form-control" placeholder="Meta Description" name="meta_description">{!! $setting->meta_description ?? ''!!}</textarea>
                                                    </div>
                                                    <div class="col-md-12 mt-2">
                                                        <label>Meta Keyword</label>
                                                        <input type="text" class="form-control" placeholder="Meta Keyword" value="{{$setting->meta_keyword ?? ''}}" name="meta_keyword">
                                                        <span style="color:red">use comma(,) for separate</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

// <script>
    
//     CKEDITOR.replace('editor');
// </script>
<!-- /.content-wrapper -->
@endsection