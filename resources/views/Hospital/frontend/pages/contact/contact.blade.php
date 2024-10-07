@extends('Hospital.frontend.layouts.app')
@section('content')
<!--site-main start-->
<div class="site-main">
    <style>
        ::placeholder {
            color: black !important;
        }

        .wrap-form {
            padding: 30px;

            background: #56cfe166;
        }
    </style>
    @if (session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
    @endif
    <!--google_map-->
    <div id="google_map" class="google_map">
        <div class="map_container">
            <div id="map">
                <iframe src="{{isset($sitesetting->google_map)?$sitesetting->google_map:''}}" width="640" height="480"></iframe>
            </div>
        </div>
    </div>


    <!-- google_map end -->
    <section class="contact-section bg-layer bg-layer-equal-height clearfix">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8 col-md-7">
                    <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-grey spacing-2">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <!-- section title -->
                            <div class="section-title style2">
                                <div class="title-header">
                                    <h5>GET IN TOUCH</h5>
                                    <h2 class="title text-bold">Contact Form</h2>
                                </div>
                            </div><!-- section title end -->
                            <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix card shadow" method="post" action="{{route('hospital.contact.store')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><i class="ttm-textcolor-darkgrey ti-user"></i><input name="name" type="text" placeholder="Your Name" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><i class="ttm-textcolor-darkgrey ti-mobile"></i><input name="phone" type="text" placeholder="Cell Phone" required="required"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><i class="ttm-textcolor-darkgrey ti-email"></i><input name="email" type="email" placeholder="Email" required="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>
                                            <span class="text-input"><i class="ttm-textcolor-darkgrey ti-location-pin"></i><input name="venue" type="text" placeholder="Venue" required="required"></span>
                                        </label>
                                    </div>
                                </div>
                                <label>
                                    <span class="text-input"><i class="ttm-textcolor-darkgrey ti-comment"></i><textarea name="message" rows="3" cols="40" placeholder="Message" required="required"></textarea></span>
                                </label>
                                <input name="submit" type="submit" id="submit" style="display:block;margin:0 auto" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" value="SENT MESSAGE">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="ttm-col-bgcolor-yes ttm-bg ttm-bgcolor-skincolor spacing-3">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <div class="layer-content">
                            <div class="box-header">
                                <div class="box-icon">
                                    <i class="fa fa-paper-plane"></i>
                                </div>
                            </div>
                            <h4>Contact Information</h4>
                            <ul class="ttm_contact_widget_wrapper">
                                <li><i class="ttm-textcolor-highlight ti ti-location-pin"></i>{{isset($sitesetting->address)?$sitesetting->address:''}}</li>
                                <li><i class="ttm-textcolor-highlight ti ti-headphone"></i>{{isset($sitesetting->phone)?$sitesetting->phone:''}}</li>
                                <li><i class="ttm-textcolor-highlight ti ti-email"></i>
                                    @if(isset($sitesetting->email))

                                    @if(!str_contains($sitesetting->email,','))
                                    {{ isset($sitesetting->email) ? $sitesetting->email : '' }}

                                    @else
                                    @php
                                    $emails=explode(",",$sitesetting->email);
                                    @endphp
                                    @foreach($emails as $email)
                                    {{$email}}
                                    @endforeach
                                    @endif
                                    @else

                                    @endif
                                </li>
                            </ul>
                            <div class="social-icons circle social-hover">
                                <ul class="list-inline">
                                    <li class="social-facebook"><a class="tooltip-top ttm-textcolor-skincolor" href="{{isset($sitesetting->facebook)?$sitesetting->facebook:''}}" data-tooltip="Facebook" target="_blank"><i class="ti ti-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-gplus"><a class="tooltip-top ttm-textcolor-skincolor" href="{{isset($sitesetting->google)?$sitesetting->google:''}}" data-tooltip="Google+" target="_blank"><i class="ti ti-google" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top ttm-textcolor-skincolor" href="{{isset($sitesetting->twitter)?$sitesetting->twitter:''}}" data-tooltip="Twitter" target="_blank"><i class="ti ti-twitter-alt" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a class="tooltip-top ttm-textcolor-skincolor" href="{{isset($sitesetting->linkedin)?$sitesetting->linkedin:''}}" data-tooltip="LinkedIn" target="_blank"><i class="ti ti-tumblr-alt" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- row end -->
        </div>
    </section>


</div><!--site-main end-->
@endsection