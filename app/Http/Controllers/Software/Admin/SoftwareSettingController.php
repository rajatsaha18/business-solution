<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Hash;
use Image;
use Toastr;
use App\Models\User;
use App\Models\Social;
use Illuminate\Http\Request;
use App\Models\GeneralSetting;
use App\Models\SoftwareSocial;
use App\Http\Controllers\Controller;
use App\Models\SoftwareFooterAbout;
use Illuminate\Support\Facades\Auth;
use App\Models\SoftwareGeneralSetting;

class SoftwareSettingController extends Controller
{
    public function profile()
    {
        return view('Software.admin.profile');
    }
    public function update_profile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'phone' => 'max:15',
        ]);
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        if ($request->hasFile('image')) {
            $image = $request->image;
            $filename = $image->getClientOriginalName();
            $filename = preg_replace('/\s+/', '-', $filename);
            $folder = 'uploads/' . date('Y') . '/' . date('m');
            if (!file_exists($folder)) {
                mkdir($folder, 0777, true);
            }

            $m_image = $folder . '/' . time() . '-' . $filename;
            Image::make($image)->save($m_image);
            $data->image = asset($m_image);
        }
        $data->Update();
        $notification = array(
            'message' => 'Successfully Done',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function change_password()
    {
        return view('Software.admin.profile.change_pass');
    }
    public function update_password(Request $request)
    {
        $data = User::where('id', Auth::user()->id)->first();
        if ($request->old_password) {

            $this->validate($request, [
                'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
                'password_confirmation' => 'min:6'
            ]);
            if (!(Hash::check($request->get('old_password'), $data->password))) {
                $notification = array(
                    'message' => 'Your Old password does not matches with the password you provided. Please try again!',
                    'alert-type' => 'error'
                );
                return redirect()->back()->with($notification);
                // The passwords matches
            }
            $data->password = bcrypt($request->password);
        }
        $data->save();
        $notification = array(
            'message' => 'Successfully Updated Password!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function page_setup()
    {
        $setting = SoftwareGeneralSetting::first();
        $social = SoftwareSocial::first();
        $footer_about = SoftwareFooterAbout::first();
        return view('Software.admin.home.index', compact('footer_about', 'setting', 'social'));
    }
    public function home_setup_store(Request $request)
    {
        $logo = SoftwareGeneralSetting::first();
        if (isset($request->what_we_do_image)) {
            $logo->what_we_do_image = $request->what_we_do_image;
        }
        $image = $request->file('logo');
        // echo $logo->what_we_do_image;
        // echo $request->what_we_do_image;
        // exit();

        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/images/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $logo->logo = $image_url;
            }
        }
        $image = $request->file('dark_logo');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/images/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $logo->dark_logo = $image_url;
            }
        }
        $image = $request->file('favicon');
        if ($image) {
            $image_name = $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/images/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $logo->favicon = $image_url;
            }
        }


        $whatimage1 = $request->file('hero_banner');
        if ($whatimage1) {
            $image_name             = $whatimage1->getClientOriginalName();
            $image_name             = preg_replace('/\s+/', '-', $image_name);
            $image_full_name        = $image_name;
            $upload_path            = 'uploads/images/';
            $image_url = $upload_path . $image_full_name;
            $success = $whatimage1->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if ($success) {
                $logo->hero_banner = $image_url;
            }
        }
        $logo->what_we_do   = $request->what_we_do;
        $logo->head_text    = $request->head_text;
        // $logo->about        = $request->about;
        // $logo->copyright    = $request->copyright;
        $logo->save();
        $notification = array(
            'message'       => 'Successfully Updated Logo!',
            'alert-type'    => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function contact_store(Request $request)
    {
        $setting = SoftwareGeneralSetting::first();
        $setting->phone_text = $request->phone_text;
        $setting->phone_number = $request->phone_number;
        $setting->email_text = $request->email_text;
        $setting->email_address = $request->email_address;
        $setting->location = $request->location;
        $setting->update();
        $notification = array(
            'message' => 'Successfully Updated !',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function seo_store(Request $request)
    {
        $setting = SoftwareGeneralSetting::first();
        $setting->meta_title = $request->meta_title;
        $setting->meta_description = $request->meta_description;
        $setting->meta_keyword = $request->meta_keyword;
        $setting->update();
        $notification = array(
            'message' => 'Successfully Updated !',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
