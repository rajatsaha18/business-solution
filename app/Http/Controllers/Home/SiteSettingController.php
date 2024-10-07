<?php

namespace App\Http\Controllers\Home;

use Toastr;
use Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessHomeSiteSetting;

class SiteSettingController extends Controller
{
    public function index()
    {
        $businessSiteSetting = BusinessHomeSiteSetting::first();
        return view('business.home.sitesetting.index', compact('businessSiteSetting'));
    }
    public function create(Request $request)
    {
        $businessSiteSetting = BusinessHomeSiteSetting::first();
        if ($businessSiteSetting) {
            $businessSiteSetting->about                 = $request->about;
            $businessSiteSetting->content               = $request->content;
            $businessSiteSetting->email               = $request->email;
            $businessSiteSetting->phone               = $request->phone;
            $businessSiteSetting->address               = $request->address;
            $businessSiteSetting->google_map            = $request->google_map;
            $businessSiteSetting->meta_title            = $request->meta_title;
            $businessSiteSetting->meta_description      = $request->meta_description;
            $businessSiteSetting->meta_keyword          = $request->meta_keyword;
            $businessSiteSetting->status                = $request->status;

            $image = $request->file('logo');
            if ($image) {
                $image_name = str::random(15);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'site_setting/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);

                if ($success) {
                    $businessSiteSetting->logo = $image_url;
                }
            }
            $image = $request->file('favicon');
            if ($image) {
                $image_name = str::random(15);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'site_setting/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);

                if ($success) {
                    $businessSiteSetting->favicon = $image_url;
                }
            }
            if ($businessSiteSetting->update()) {

                Toastr::success('Service has been Saved successfully :-)', 'Success');
                return redirect()->back();
            } else {

                return redirect()->back()->with('message', 'Something wrong');
            }
        } else {
            $businessSiteSetting = new BusinessHomeSiteSetting();
            $businessSiteSetting->about                 = $request->about;
            $businessSiteSetting->content               = $request->content;
            $businessSiteSetting->email               = $request->email;
            $businessSiteSetting->phone               = $request->phone;
            $businessSiteSetting->address               = $request->address;
            $businessSiteSetting->google_map            = $request->google_map;
            $businessSiteSetting->meta_title            = $request->meta_title;
            $businessSiteSetting->meta_description      = $request->meta_description;
            $businessSiteSetting->meta_keyword          = $request->meta_keyword;
            $businessSiteSetting->status                = $request->status;

            $image = $request->file('logo');
            if ($image) {
                $image_name = str::random(15);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'site_setting/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);

                if ($success) {
                    $businessSiteSetting->logo = $image_url;
                }
            }
            $image = $request->file('favicon');
            if ($image) {
                $image_name = str::random(15);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'site_setting/';
                $image_url = $upload_path . $image_full_name;
                $success = $image->move($upload_path, $image_full_name);

                if ($success) {
                    $businessSiteSetting->favicon = $image_url;
                }
            }
            if ($businessSiteSetting->save()) {

                Toastr::success('Service has been Saved successfully :-)', 'Success');
                return redirect()->back();
            } else {

                return redirect()->back()->with('message', 'Something wrong');
            }
        }
    }
}
