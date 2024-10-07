<?php

namespace App\Http\Controllers\Shop;

use Str;
use Toastr;
use App\BdSocialLink;
use App\BdSubCategory;
use App\InfoContactUs;
use App\GeneralSetting;
use App\BdAdvertiseEmail;
use App\BdGeneralSetting;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index(){
        $general_setting = BdGeneralSetting::first();
        $sitesetting=SiteSetting::first();
        $social =BdSocialLink::first();
        $info =InfoContactUs::first();
        return view('admin.frontSetting.site_setting',compact('general_setting','social','info','sitesetting'));
    }
    
    public function update(Request $request){
        $data = BdGeneralSetting::first();
       if($data){
        $image = $request->file('logo');
        if($image)
        {
            $image_name= str::random(15);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'site_setting/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if($success)
            {
                $data->logo = $image_url;
            }
        }
        $image = $request->file('favicon');
        if($image)
        {
            $image_name= str::random(15);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'site_setting/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if($success)
            {
                $data->favicon = $image_url;
            }
        }
        $image = $request->file('admin_logo');
        if($image)
        {
            $image_name= str::random(15);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'site_setting/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if($success)
            {
                $data->admin_logo = $image_url;
            }
        }

        $image = $request->file('header_banner');
        if($image)
        {
            $image_name= str::random(15);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'site_setting/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if($success)
            {
                $data->header_banner = $image_url;
            }
        }
        if($data->update()){
            Toastr::success('Site Setting has been Update successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }
       }
       else{
        $data =new BdGeneralSetting();

        $image = $request->file('logo');
        if($image)
        {
            $image_name= str::random(15);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'site_setting/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if($success)
            {
                $data->logo = $image_url;
            }
        }
        $image = $request->file('favicon');
        if($image)
        {
            $image_name= str::random(15);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'site_setting/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if($success)
            {
                $data->favicon = $image_url;
            }
        }
        $image = $request->file('admin_logo');
        if($image)
        {
            $image_name= str::random(15);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'site_setting/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if($success)
            {
                $data->admin_logo = $image_url;
            }
        }
        $image = $request->file('header_banner');
        if($image)
        {
            $image_name= str::random(15);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name. '.' .$ext;
            $upload_path = 'site_setting/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if($success)
            {
                $data->header_banner = $image_url;
            }
        }
        if($data->save()){
            Toastr::success('Site Setting has been saved successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }
       }
    }
    public function customer_email(){
        $customer_email = BdAdvertiseEmail::orderBy('id','desc')->get();
        return view('bdshop.admin.customer_email',compact('customer_email'));
    }
    public function social_link(){
        $social =BdSocialLink::first();
        return view('bdshop.admin.social.index',compact('social'));
    }
    public function save_social(Request $request){
       $social =BdSocialLink::first();
       if($social){
        $social->facebook = $request->facebook;
       $social->twitter = $request->twitter;
       $social->linkdin = $request->linkdin;
       $social->youtube = $request->youtube;
       if($social->update()){
            Toastr::success('Social Link has been Update successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }
       }
       else{
        $social =new BdSocialLink();

        $social->facebook = $request->facebook;
       $social->twitter = $request->twitter;
       $social->linkdin = $request->linkdin;
       $social->youtube = $request->youtube;
       if($social->save()){
            Toastr::success('Social Link has been saved successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }
       }
    }
    public function siteSetting(Request $request){
        $sitesetting=SiteSetting::first();
        if($sitesetting){
            $sitesetting->about=$request->about;
            $sitesetting->content=$request->content;
            $sitesetting->google_map=$request->google_map;
            $sitesetting->meta_title=$request->meta_title;
            $sitesetting->meta_description=$request->meta_description;
            $sitesetting->meta_keyword=$request->meta_keyword;
            if($sitesetting->update()){
                Toastr::success('Site Setting has been update successfully :-)','Success');
                return redirect()->back();
            }
        }
        else{
            $sitesetting=new SiteSetting;
            $sitesetting->about=$request->about;
            $sitesetting->content=$request->content;
            $sitesetting->google_map=$request->google_map;
            $sitesetting->meta_title=$request->meta_title;
            $sitesetting->meta_description=$request->meta_description;
            $sitesetting->meta_keyword=$request->meta_keyword;
            if($sitesetting->save()){
                Toastr::success('Site Setting has been saved successfully :-)','Success');
                return redirect()->back();
            }
        }
        
    }

}
