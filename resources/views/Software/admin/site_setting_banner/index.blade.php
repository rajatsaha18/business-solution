@extends('admin.layouts.app')
@section('title')
<title>{{ config('app.name', 'Laravel') }} | Site Setting Banners</title>
@endsection
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Site Banner's</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Site Banner's</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-10 offset-md-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Site Banner's</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{route('admin.site-setting-banner.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-md-12 mt-2">
                                <label>Old About Banner</label><br>
                                @if (isset($data->about_banner))
                                <img src="{{asset($data->about_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif

                            </div>

                            <div class="col-md-12 mt-2">
                                <label>About Page Banner</label>
                                <input type="file" class="form-control" name="about_banner">
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Old Portfolio Banner</label><br>
                                @if (isset($data->portfolio_banner))
                                <img src="{{asset($data->portfolio_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Portfolio page Banner</label>
                                <input type="file" class="form-control" name="portfolio_banner">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Old Service Banner</label><br>
                                @if (isset($data->services_banner ))
                                <img src="{{asset($data->services_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Service Page Banner</label>
                                <input type="file" class="form-control" name="services_banner">
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Old Pricing Banner</label><br>
                                @if (isset($data->pricing_banner))
                                <img src="{{asset($data->pricing_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Pricing page Banner</label>
                                <input type="file" class="form-control" name="pricing_banner">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label>Old Team Banner</label><br>
                                @if (isset($data->team_banner))
                                <img src="{{asset($data->team_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Team page Banner</label>
                                <input type="file" class="form-control" name="team_banner">
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Old Career Banner</label><br>
                                @if (isset($data->career_banner))
                                <img src="{{asset($data->career_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Career Banner</label>
                                <input type="file" class="form-control" name="career_banner">
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Old Contact Banner</label><br>
                                @if (isset($data->contact_banner))
                                <img src="{{asset($data->contact_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Contact Page Banner</label>
                                <input type="file" class="form-control" name="contact_banner">
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Old Product Banner</label><br>
                                @if (isset($data->product_banner))
                                <img src="{{asset($data->product_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Product Page Banner</label>
                                <input type="file" class="form-control" name="product_banner">
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Old Blog Banner</label><br>
                                @if (isset($data->blog_banner))
                                <img src="{{asset($data->blog_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Blog Page Banner</label>
                                <input type="file" class="form-control" name="blog_banner">
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Old Blog Details Banner</label><br>
                                @if (isset($data->blog_details_banner))
                                <img src="{{asset($data->blog_details_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Blog Details Banner</label>
                                <input type="file" class="form-control" name="blog_details_banner">
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Old Terms Banner</label><br>
                                @if (isset($data->terms_banner))
                                <img src="{{asset($data->terms_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Terms Banner</label>
                                <input type="file" class="form-control" name="terms_banner">
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Old Privacy Banner</label><br>
                                @if (isset($data->privacy_banner))
                                <img src="{{asset($data->privacy_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Privacy Banner</label>
                                <input type="file" class="form-control" name="privacy_banner">
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Old Business About Banner</label><br>
                                @if (isset($data->business_about_banner))
                                <img src="{{asset($data->business_about_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Business About Banner</label>
                                <input type="file" class="form-control" name="business_about_banner">
                            </div>

                            <div class="col-md-12 mt-2">
                                <label>Old Business Gallery Banner</label><br>
                                @if (isset($data->business_gallery_banner))
                                <img src="{{asset($data->business_gallery_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Business Gallery Banner</label>
                                <input type="file" class="form-control" name="business_gallery_banner">
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Old Business Contact Banner</label><br>
                                @if (isset($data->business_contact_banner))
                                <img src="{{asset($data->business_contact_banner)}}" style="width:750px;hight:350px;object-fit:contain"></img>
                                @else
                                <img src="https://static.vecteezy.com/system/resources/thumbnails/008/559/305/small/coming-soon-button-coming-soon-text-web-template-sign-icon-banner-vector.jpg" style="width:250px;hight:150px;object-fit:contain"></img>

                                @endif
                            </div>


                            <div class="col-md-12 mt-2">
                                <label>Business Contact Banner</label>
                                <input type="file" class="form-control" name="business_contact_banner">
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