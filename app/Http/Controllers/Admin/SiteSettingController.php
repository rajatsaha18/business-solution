<?php

namespace App\Http\Controllers\Admin;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=SiteSetting::find(1);
        return view('admin.page.Sitesetting.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sitesetting = SiteSetting::find(1);
        if($sitesetting){
            $sitesetting->about_us = $request->about_us;
            $sitesetting->address = $request->address;
            $sitesetting->email = $request->email;
            $sitesetting->phone = $request->phone;
            $sitesetting->facebook = $request->facebook;
            $sitesetting->linkedin = $request->linkedin;
            $sitesetting->twitter = $request->twitter;
            $sitesetting->google = $request->google;
            $sitesetting->google_map=$request->google_map;


            $sitesetting->meta_title = $request->meta_title;
            $sitesetting->meta_description = $request->meta_description;
            $sitesetting->meta_keyword = $request->meta_keyword;

            $logo = $request->file('logo');
            if($logo)
            {
                $logo_name= $logo->getClientOriginalName();
                $logo_name = preg_replace('/\s+/', '-', $logo_name);
                $sitesetting_logo_full_name = $logo_name;
                $upload_path = 'uploads/sitesetting/';
                $image_url = $upload_path.$sitesetting_logo_full_name;
                $success = $logo->move(($upload_path), $sitesetting_logo_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $sitesetting->logo = $image_url;
                }
            }
            $logo2 = $request->file('logo2');
            if($logo2)
            {
                $logo_name= $logo2->getClientOriginalName();
                $logo_name = preg_replace('/\s+/', '-', $logo_name);
                $sitesetting_logo_full_name = $logo_name;
                $upload_path = 'uploads/sitesetting/';
                $image_url = $upload_path.$sitesetting_logo_full_name;
                $success = $logo2->move(($upload_path), $sitesetting_logo_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $sitesetting->logo2 = $image_url;
                }
            }
            $sitesetting_favicon = $request->file('fav_icon');
            if($sitesetting_favicon)
            {
                $sitesetting_favicon_name= $sitesetting_favicon->getClientOriginalName();
                $sitesetting_favicon_name = preg_replace('/\s+/', '-', $sitesetting_favicon_name);
                $sitesetting_favicon_full_name = $sitesetting_favicon_name;
                $upload_path = 'uploads/sitesetting/';
                $image_url = $upload_path.$sitesetting_favicon_full_name;
                $success = $sitesetting_favicon->move(                                                                             $upload_path, $sitesetting_favicon_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                   
                    $sitesetting->fav_icon = $image_url;
                }
            }

            if($sitesetting->update()){
                Toastr::success('SiteSetting  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
        else{
            $sitesetting=new SiteSetting();
            $sitesetting->about_us = $request->about_us;
            $sitesetting->address = $request->address;
            $sitesetting->email = $request->email;
            $sitesetting->phone = $request->phone;
            $sitesetting->facebook = $request->facebook;
            $sitesetting->linkedin = $request->linkedin;
            $sitesetting->twitter = $request->twitter;
            $sitesetting->google = $request->google;
            $sitesetting->google_map=$request->google_map;

            $sitesetting->meta_title = $request->meta_title;
            $sitesetting->meta_description = $request->meta_description;
            $sitesetting->meta_keyword = $request->meta_keyword;
            $sitesetting_logo = $request->file('logo');
            if($sitesetting_logo)
            {
                $sitesetting_logo_name= $sitesetting_logo->getClientOriginalName();
                $sitesetting_logo_name = preg_replace('/\s+/', '-', $sitesetting_logo_name);
                $sitesetting_logo_full_name = $sitesetting_logo_name;
                $upload_path = 'uploads/sitesetting/';
                $image_url = $upload_path.$sitesetting_logo_full_name;
                $success = $sitesetting_logo->move(($upload_path), $sitesetting_logo_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {

                    $sitesetting->logo = $image_url;
                }
            }
            $sitesetting_logo2 = $request->file('logo2');
            if($sitesetting_logo2)
            {
                $sitesetting_logo_name= $sitesetting_logo2->getClientOriginalName();
                $sitesetting_logo_name = preg_replace('/\s+/', '-', $sitesetting_logo_name);
                $sitesetting_logo_full_name = $sitesetting_logo_name;
                $upload_path = 'uploads/sitesetting/';
                $image_url = $upload_path.$sitesetting_logo_full_name;
                $success = $sitesetting_logo2->move(($upload_path), $sitesetting_logo_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {

                    $sitesetting->logo2 = $image_url;
                }
            }
            $sitesetting_favicon = $request->file('fav_icon');
            if($sitesetting_favicon)
            {
                $sitesetting_favicon_name= $sitesetting_favicon->getClientOriginalName();
                $sitesetting_favicon_name = preg_replace('/\s+/', '-', $sitesetting_favicon_name);
                $sitesetting_favicon_full_name = $sitesetting_favicon_name;
                $upload_path = 'uploads/sitesetting/';
                $image_url = $upload_path.$sitesetting_favicon_full_name;
                $success = $sitesetting_favicon->move(($upload_path), $sitesetting_favicon_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {

                    $sitesetting->fav_icon = $image_url;
                }
            }
            if($sitesetting->save()){
                Toastr::success('SiteSetting  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
