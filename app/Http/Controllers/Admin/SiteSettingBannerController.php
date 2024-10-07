<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\SiteSettingBanner;
use App\Http\Controllers\Controller;
use Toastr;

class SiteSettingBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=SiteSettingBanner::first();
        return view('admin.site_setting_banner.index',compact('data'));
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
        $sitebanner = SiteSettingBanner::first();
        if($sitebanner){

            $sitebanner_doctor= $request->file('about_banner');
            if($sitebanner_doctor)
            {
                $sitebanner_doctor_name= $sitebanner_doctor->getClientOriginalName();
                $sitebanner_doctor_name = preg_replace('/\s+/', '-', $sitebanner_doctor_name);
                $sitebanner_doctor_full_name =  $sitebanner_doctor_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path. $sitebanner_doctor_full_name;
                $success =  $sitebanner_doctor->move(($upload_path),  $sitebanner_doctor_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    // if($sitebanner->logo){
                    //     unlink(public_path($sitebanner->logo));
                    // }
                    $sitebanner->about_banner = $image_url;
                }
            }
            $sitebanner_blog= $request->file('portfolio_banner');
            if($sitebanner_blog)
            {
                $sitebanner_blog_name= $sitebanner_blog->getClientOriginalName();
                $sitebanner_blog_name = preg_replace('/\s+/', '-', $sitebanner_blog_name);
                $sitebanner_blog_full_name =  $sitebanner_blog_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path. $sitebanner_blog_full_name;
                $success =  $sitebanner_blog->move(($upload_path),  $sitebanner_blog_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    // if($sitebanner->logo){
                    //     unlink(public_path($sitebanner->logo));
                    // }
                    $sitebanner->portfolio_banner = $image_url;
                }
            }
            $sitebanner_gallery= $request->file('services_banner');
            if($sitebanner_gallery)
            {
                $sitebanner_gallery_name= $sitebanner_gallery->getClientOriginalName();
                $sitebanner_gallery_name = preg_replace('/\s+/', '-', $sitebanner_gallery_name);
                $sitebanner_gallery_full_name =  $sitebanner_gallery_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path. $sitebanner_gallery_full_name;
                $success =  $sitebanner_gallery->move(($upload_path),  $sitebanner_gallery_full_name);
                if($success)
                {
                    $sitebanner->services_banner = $image_url;
                }
            }
            $sitebanner_video= $request->file('pricing_banner');
            if( $sitebanner_video)
            {
                $sitebanner_video_name=  $sitebanner_video->getClientOriginalName();
                $sitebanner_video_name = preg_replace('/\s+/', '-',  $sitebanner_video_name);
                $sitebanner_video_full_name =   $sitebanner_video_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path.$sitebanner_video_full_name;
                $success =   $sitebanner_video->move(($upload_path),   $sitebanner_video_full_name);
                if($success)
                {
                    $sitebanner->pricing_banner= $image_url;
                }
            }
            $sitebanner_career= $request->file('team_banner');
            if(  $sitebanner_career)
            {
                $sitebanner_career_name=  $sitebanner_career->getClientOriginalName();
                $sitebanner_career_name = preg_replace('/\s+/', '-',   $sitebanner_career_name);
                $sitebanner_career_full_name =    $sitebanner_career_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path.$sitebanner_career_full_name;
                $success = $sitebanner_career->move(($upload_path),    $sitebanner_career_full_name);
                if($success)
                {
                    $sitebanner->team_banner = $image_url;
                }
            }
            $sitebanner_contact= $request->file('contact_banner');
            if(  $sitebanner_contact)
            {
                $sitebanner_contact_name=  $sitebanner_contact->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path.$sitebanner_contact_full_name;
                $success = $sitebanner_contact->move(($upload_path),    $sitebanner_contact_full_name);
                if($success)
                {
                    $sitebanner->contact_banner = $image_url;
                }
            }
            $sitebanner_contact_image= $request->file('career_banner');
            if(  $sitebanner_contact_image)
            {
                $sitebanner_contact_name=  $sitebanner_contact_image->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path.$sitebanner_contact_full_name;
                $success = $sitebanner_contact_image->move(($upload_path),    $sitebanner_contact_full_name);
                if($success)
                {
                    $sitebanner->career_banner = $image_url;
                }
            }
            if($sitebanner->update()){
                Toastr::success('SiteBanner  has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
                return redirect()->back();
            }
        }
        else{
            $sitebanner=new SiteSettingBanner();
            $sitebanner_doctor= $request->file('about_banner');
            if($sitebanner_doctor)
            {
                $sitebanner_doctor_name= $sitebanner_doctor->getClientOriginalName();
                $sitebanner_doctor_name = preg_replace('/\s+/', '-', $sitebanner_doctor_name);
                $sitebanner_doctor_full_name =  $sitebanner_doctor_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path. $sitebanner_doctor_full_name;
                $success =  $sitebanner_doctor->move(($upload_path),  $sitebanner_doctor_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    // if($sitebanner->logo){
                    //     unlink(public_path($sitebanner->logo));
                    // }
                    $sitebanner->about_banner = $image_url;
                }
            }
            $sitebanner_blog= $request->file('portfolio_banner');
            if($sitebanner_blog)
            {
                $sitebanner_blog_name= $sitebanner_blog->getClientOriginalName();
                $sitebanner_blog_name = preg_replace('/\s+/', '-', $sitebanner_blog_name);
                $sitebanner_blog_full_name =  $sitebanner_blog_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path. $sitebanner_blog_full_name;
                $success =  $sitebanner_blog->move(($upload_path),  $sitebanner_blog_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    // if($sitebanner->logo){
                    //     unlink(public_path($sitebanner->logo));
                    // }
                    $sitebanner->portfolio_banner = $image_url;
                }
            }
            $sitebanner_gallery= $request->file('services_banner');
            if($sitebanner_gallery)
            {
                $sitebanner_gallery_name= $sitebanner_gallery->getClientOriginalName();
                $sitebanner_gallery_name = preg_replace('/\s+/', '-', $sitebanner_gallery_name);
                $sitebanner_gallery_full_name =  $sitebanner_gallery_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path. $sitebanner_gallery_full_name;
                $success =  $sitebanner_gallery->move(($upload_path),  $sitebanner_gallery_full_name);
                if($success)
                {
                    $sitebanner->services_banner = $image_url;
                }
            }
            $sitebanner_video= $request->file('pricing_banner');
            if( $sitebanner_video)
            {
                $sitebanner_video_name=  $sitebanner_video->getClientOriginalName();
                $sitebanner_video_name = preg_replace('/\s+/', '-',  $sitebanner_video_name);
                $sitebanner_video_full_name =   $sitebanner_video_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path.$sitebanner_video_full_name;
                $success =   $sitebanner_video->move(($upload_path),   $sitebanner_video_full_name);
                if($success)
                {
                    $sitebanner->pricing_banner= $image_url;
                }
            }
            $sitebanner_career= $request->file('team_banner');
            if(  $sitebanner_career)
            {
                $sitebanner_career_name=  $sitebanner_career->getClientOriginalName();
                $sitebanner_career_name = preg_replace('/\s+/', '-',   $sitebanner_career_name);
                $sitebanner_career_full_name =    $sitebanner_career_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path.$sitebanner_career_full_name;
                $success = $sitebanner_career->move(($upload_path),    $sitebanner_career_full_name);
                if($success)
                {
                    $sitebanner->team_banner = $image_url;
                }
            }
            $sitebanner_contact= $request->file('contact_banner');
            if(  $sitebanner_contact)
            {
                $sitebanner_contact_name=  $sitebanner_contact->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path.$sitebanner_contact_full_name;
                $success = $sitebanner_contact->move(($upload_path),    $sitebanner_contact_full_name);
                if($success)
                {
                    $sitebanner->contact_banner = $image_url;
                }
            }
            $sitebanner_contact_image= $request->file('career_banner');
            if(  $sitebanner_contact_image)
            {
                $sitebanner_contact_name=  $sitebanner_contact_image->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path.$sitebanner_contact_full_name;
                $success = $sitebanner_contact_image->move(($upload_path),    $sitebanner_contact_full_name);
                if($success)
                {
                    $sitebanner->career_banner = $image_url;
                }
            }
            if($sitebanner->save()){
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
