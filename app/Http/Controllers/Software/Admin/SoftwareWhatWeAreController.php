<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use App\Models\WhatWeAre;
use Illuminate\Http\Request;
use App\Models\SoftwareWhatWeAre;
use App\Http\Controllers\Controller;

class SoftwareWhatWeAreController extends Controller
{
    public function index()
    {
        $data=SoftwareWhatWeAre::first();
        return view('admin.WhatWeAreDesc.index',compact('data'));
        
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $sitesetting = SoftwareWhatWeAre::first();
        if($sitesetting){
            $sitesetting->title = $request->title;
            $sitesetting->about_us = $request->about_us;
            $sitesetting->why_choose_us = $request->why_choose_us;
            $sitesetting->mission = $request->mission;
            $sitesetting->vision = $request->vision;
            

            $sitesetting_logo = $request->file('img1');
            if($sitesetting_logo)
            {
                $sitesetting_logo_name= $sitesetting_logo->getClientOriginalName();
                $sitesetting_logo_name = preg_replace('/\s+/', '-', $sitesetting_logo_name);
                $sitesetting_logo_full_name = $sitesetting_logo_name;
                $upload_path = 'uploads/aboutpage/';
                $image_url = $upload_path.$sitesetting_logo_full_name;
                $success = $sitesetting_logo->move(($upload_path), $sitesetting_logo_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    // if($sitesetting->logo){
                    //     unlink(public_path($sitesetting->logo));
                    // }
                    $sitesetting->img1 = $image_url;
                }
            }
            $sitesetting_favicon = $request->file('img2');
            if($sitesetting_favicon)
            {
                $sitesetting_favicon_name= $sitesetting_favicon->getClientOriginalName();
                $sitesetting_favicon_name = preg_replace('/\s+/', '-', $sitesetting_favicon_name);
                $sitesetting_favicon_full_name = $sitesetting_favicon_name;
                $upload_path = 'uploads/aboutpage/';
                $image_url = $upload_path.$sitesetting_favicon_full_name;
                $success = $sitesetting_favicon->move(($upload_path), $sitesetting_favicon_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    // if($sitesetting->fav_icon){
                    //     unlink(public_path($sitesetting->fav_icon));
                    // }
                    $sitesetting->img2 = $image_url;
                }
            }
            $sitebanner_contact_image= $request->file('img3');
            if($sitebanner_contact_image)
            {
                $sitebanner_contact_name=  $sitebanner_contact_image->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/aboutpage/';
                $image_url = $upload_path.$sitebanner_contact_full_name;
                $success = $sitebanner_contact_image->move(($upload_path),    $sitebanner_contact_full_name);
                if($success)
                {
                    $sitesetting->img3 = $image_url;
                }
            }

            if($sitesetting->update()){
                Toastr::success('Data  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
        else{
            $sitesetting=new SoftwareWhatWeAre();
            $sitesetting->title = $request->title;
            $sitesetting->about_us = $request->about_us;
            $sitesetting->why_choose_us = $request->why_choose_us;
            $sitesetting->mission = $request->mission;
            $sitesetting->vision = $request->vision;
            

            $sitesetting_logo = $request->file('img1');
            if($sitesetting_logo)
            {
                $sitesetting_logo_name= $sitesetting_logo->getClientOriginalName();
                $sitesetting_logo_name = preg_replace('/\s+/', '-', $sitesetting_logo_name);
                $sitesetting_logo_full_name = $sitesetting_logo_name;
                $upload_path = 'uploads/aboutpage/';
                $image_url = $upload_path.$sitesetting_logo_full_name;
                $success = $sitesetting_logo->move(public_path($upload_path), $sitesetting_logo_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    // if($sitesetting->logo){
                    //     unlink(public_path($sitesetting->logo));
                    // }
                    $sitesetting->img1 = $image_url;
                }
            }
            $sitesetting_favicon = $request->file('img2');
            if($sitesetting_favicon)
            {
                $sitesetting_favicon_name= $sitesetting_favicon->getClientOriginalName();
                $sitesetting_favicon_name = preg_replace('/\s+/', '-', $sitesetting_favicon_name);
                $sitesetting_favicon_full_name = $sitesetting_favicon_name;
                $upload_path = 'uploads/aboutpage/';
                $image_url = $upload_path.$sitesetting_favicon_full_name;
                $success = $sitesetting_favicon->move(public_path($upload_path), $sitesetting_favicon_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    // if($sitesetting->fav_icon){
                    //     unlink(public_path($sitesetting->fav_icon));
                    // }
                    $sitesetting->img2 = $image_url;
                }
            }
            $sitebanner_contact_image= $request->file('img3');
            if($sitebanner_contact_image)
            {
                $sitebanner_contact_name=  $sitebanner_contact_image->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/aboutpage/';
                $image_url = $upload_path.$sitebanner_contact_full_name;
                $success = $sitebanner_contact_image->move(($upload_path),    $sitebanner_contact_full_name);
                if($success)
                {
                    $sitesetting->img3 = $image_url;
                }
            }
            if($sitesetting->save()){
                Toastr::success('Data  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
