<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use Illuminate\Http\Request;
use App\Models\SiteSettingBanner;
use App\Http\Controllers\Controller;
use App\Models\SoftwareSiteSettingBanner;

class SoftwareSiteSettingBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = SoftwareSiteSettingBanner::first();
        return view('Software.admin.site_setting_banner.index', compact('data'));
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
        // dd($request->product_banner);
        $sitebanner = SoftwareSiteSettingBanner::first();
        if ($sitebanner) {

            $sitebanner_doctor = $request->file('about_banner');
            if ($sitebanner_doctor) {
                $sitebanner_doctor_name = $sitebanner_doctor->getClientOriginalName();
                $sitebanner_doctor_name = preg_replace('/\s+/', '-', $sitebanner_doctor_name);
                $sitebanner_doctor_full_name =  $sitebanner_doctor_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_doctor_full_name;
                $success =  $sitebanner_doctor->move(($upload_path),  $sitebanner_doctor_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if ($success) {
                    // if($sitebanner->logo){
                    //     unlink(public_path($sitebanner->logo));
                    // }
                    $sitebanner->about_banner = $image_url;
                }
            }


            $business_about = $request->file('business_about_banner');
            if ($business_about) {
                $business_about_name = $business_about->getClientOriginalName();
                $business_about_name = preg_replace('/\s+/', '-', $business_about_name);
                $business_about_full_name =  $business_about_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $business_about_full_name;
                $success =  $business_about->move(($upload_path),  $business_about_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if ($success) {
                    // if($sitebanner->logo){
                    //     unlink(public_path($sitebanner->logo));
                    // }
                    $sitebanner->business_about_banner = $image_url;
                }
            }


            $business_gallery = $request->file('business_gallery_banner');
            if ($business_gallery) {
                $business_gallery_name = $business_gallery->getClientOriginalName();
                $business_gallery_name = preg_replace('/\s+/', '-', $business_gallery_name);
                $business_gallery_full_name =  $business_gallery_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $business_gallery_full_name;
                $success =  $business_gallery->move(($upload_path),  $business_gallery_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if ($success) {
                    // if($sitebanner->logo){
                    //     unlink(public_path($sitebanner->logo));
                    // }
                    $sitebanner->business_gallery_banner = $image_url;
                }
            }


            $business_contact = $request->file('business_contact_banner');
            if ($business_contact) {
                $business_contact_name = $business_contact->getClientOriginalName();
                $business_contact_name = preg_replace('/\s+/', '-', $business_contact_name);
                $business_contact_full_name =  $business_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $business_contact_full_name;
                $success =  $business_contact->move(($upload_path),  $business_contact_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if ($success) {
                    // if($sitebanner->logo){
                    //     unlink(public_path($sitebanner->logo));
                    // }
                    $sitebanner->business_contact_banner = $image_url;
                }
            }





            $sitebanner_blog = $request->file('portfolio_banner');

            if ($sitebanner_blog) {
                $sitebanner_blog_name = $sitebanner_blog->getClientOriginalName();
                $sitebanner_blog_name = preg_replace('/\s+/', '-', $sitebanner_blog_name);
                $sitebanner_blog_full_name =  $sitebanner_blog_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_blog_full_name;
                $success =  $sitebanner_blog->move(($upload_path),  $sitebanner_blog_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if ($success) {
                    // if($sitebanner->logo){
                    //     unlink(public_path($sitebanner->logo));
                    // }
                    $sitebanner->portfolio_banner = $image_url;
                }
            }
            $sitebanner_gallery = $request->file('services_banner');
            if ($sitebanner_gallery) {
                $sitebanner_gallery_name = $sitebanner_gallery->getClientOriginalName();
                $sitebanner_gallery_name = preg_replace('/\s+/', '-', $sitebanner_gallery_name);
                $sitebanner_gallery_full_name =  $sitebanner_gallery_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_gallery_full_name;
                $success =  $sitebanner_gallery->move(($upload_path),  $sitebanner_gallery_full_name);
                if ($success) {
                    $sitebanner->services_banner = $image_url;
                }
            }
            $sitebanner_video = $request->file('pricing_banner');
            if ($sitebanner_video) {
                $sitebanner_video_name =  $sitebanner_video->getClientOriginalName();
                $sitebanner_video_name = preg_replace('/\s+/', '-',  $sitebanner_video_name);
                $sitebanner_video_full_name =   $sitebanner_video_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_video_full_name;
                $success =   $sitebanner_video->move(($upload_path),   $sitebanner_video_full_name);
                if ($success) {
                    $sitebanner->pricing_banner = $image_url;
                }
            }
            $sitebanner_career = $request->file('team_banner');
            if ($sitebanner_career) {
                $sitebanner_career_name =  $sitebanner_career->getClientOriginalName();
                $sitebanner_career_name = preg_replace('/\s+/', '-',   $sitebanner_career_name);
                $sitebanner_career_full_name =    $sitebanner_career_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_career_full_name;
                $success = $sitebanner_career->move(($upload_path),    $sitebanner_career_full_name);
                if ($success) {
                    $sitebanner->team_banner = $image_url;
                }
            }
            $sitebanner_contact = $request->file('contact_banner');
            if ($sitebanner_contact) {
                $sitebanner_contact_name =  $sitebanner_contact->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_contact->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->contact_banner = $image_url;
                }
            }
            $sitebanner_contact_image = $request->file('career_banner');
            if ($sitebanner_contact_image) {
                $sitebanner_contact_name =  $sitebanner_contact_image->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_contact_image->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->career_banner = $image_url;
                }
            }


            $sitebanner_product_banner = $request->file('product_banner');
            if ($sitebanner_product_banner) {
                $sitebanner_contact_name =  $sitebanner_product_banner->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_product_banner->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->product_banner = $image_url;
                }
            }


            $sitebanner_blog_banner = $request->file('blog_banner');
            if ($sitebanner_blog_banner) {
                $sitebanner_contact_name =  $sitebanner_blog_banner->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_blog_banner->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->blog_banner = $image_url;
                }
            }


            $sitebanner_blog_details_banner = $request->file('blog_details_banner');
            if ($sitebanner_blog_details_banner) {
                $sitebanner_contact_name =  $sitebanner_blog_details_banner->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_blog_details_banner->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->blog_details_banner = $image_url;
                }
            }

            $sitebanner_terms_banner = $request->file('terms_banner');
            if ($sitebanner_terms_banner) {
                $sitebanner_contact_name =  $sitebanner_terms_banner->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_terms_banner->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->terms_banner = $image_url;
                }
            }

            $sitebanner_privacy_banner = $request->file('privacy_banner');
            if ($sitebanner_privacy_banner) {
                $sitebanner_contact_name =  $sitebanner_privacy_banner->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_privacy_banner->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->privacy_banner = $image_url;
                }
            }
            if ($sitebanner->update()) {
                Toastr::success('SiteBanner  has been Updated successfully :-)', 'Success');
                return redirect()->back();
            } else {
                Toastr::error('Something went wrong :-)', 'Error');
                return redirect()->back();
            }
        } else {
            $sitebanner = new SoftwareSiteSettingBanner();
            $sitebanner_doctor = $request->file('about_banner');
            if ($sitebanner_doctor) {
                $sitebanner_doctor_name = $sitebanner_doctor->getClientOriginalName();
                $sitebanner_doctor_name = preg_replace('/\s+/', '-', $sitebanner_doctor_name);
                $sitebanner_doctor_full_name =  $sitebanner_doctor_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_doctor_full_name;
                $success =  $sitebanner_doctor->move(($upload_path),  $sitebanner_doctor_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if ($success) {
                    // if($sitebanner->logo){
                    //     unlink(public_path($sitebanner->logo));
                    // }
                    $sitebanner->about_banner = $image_url;
                }
            }
            $sitebanner_blog = $request->file('portfolio_banner');
            if ($sitebanner_blog) {
                $sitebanner_blog_name = $sitebanner_blog->getClientOriginalName();
                $sitebanner_blog_name = preg_replace('/\s+/', '-', $sitebanner_blog_name);
                $sitebanner_blog_full_name =  $sitebanner_blog_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_blog_full_name;
                $success =  $sitebanner_blog->move(($upload_path),  $sitebanner_blog_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if ($success) {
                    // if($sitebanner->logo){
                    //     unlink(public_path($sitebanner->logo));
                    // }
                    $sitebanner->portfolio_banner = $image_url;
                }
            }
            $sitebanner_gallery = $request->file('services_banner');
            if ($sitebanner_gallery) {
                $sitebanner_gallery_name = $sitebanner_gallery->getClientOriginalName();
                $sitebanner_gallery_name = preg_replace('/\s+/', '-', $sitebanner_gallery_name);
                $sitebanner_gallery_full_name =  $sitebanner_gallery_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_gallery_full_name;
                $success =  $sitebanner_gallery->move(($upload_path),  $sitebanner_gallery_full_name);
                if ($success) {
                    $sitebanner->services_banner = $image_url;
                }
            }
            $sitebanner_video = $request->file('pricing_banner');
            if ($sitebanner_video) {
                $sitebanner_video_name =  $sitebanner_video->getClientOriginalName();
                $sitebanner_video_name = preg_replace('/\s+/', '-',  $sitebanner_video_name);
                $sitebanner_video_full_name =   $sitebanner_video_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_video_full_name;
                $success =   $sitebanner_video->move(($upload_path),   $sitebanner_video_full_name);
                if ($success) {
                    $sitebanner->pricing_banner = $image_url;
                }
            }
            $sitebanner_career = $request->file('team_banner');
            if ($sitebanner_career) {
                $sitebanner_career_name =  $sitebanner_career->getClientOriginalName();
                $sitebanner_career_name = preg_replace('/\s+/', '-',   $sitebanner_career_name);
                $sitebanner_career_full_name =    $sitebanner_career_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_career_full_name;
                $success = $sitebanner_career->move(($upload_path),    $sitebanner_career_full_name);
                if ($success) {
                    $sitebanner->team_banner = $image_url;
                }
            }
            $sitebanner_contact = $request->file('contact_banner');
            if ($sitebanner_contact) {
                $sitebanner_contact_name =  $sitebanner_contact->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_contact->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->contact_banner = $image_url;
                }
            }
            $sitebanner_contact_image = $request->file('career_banner');
            if ($sitebanner_contact_image) {
                $sitebanner_contact_name =  $sitebanner_contact_image->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_contact_image->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->career_banner = $image_url;
                }
            }

            $sitebanner_product_banner = $request->file('product_banner');
            if ($sitebanner_product_banner) {
                $sitebanner_contact_name =  $sitebanner_product_banner->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_product_banner->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->product_banner = $image_url;
                }
            }

            $sitebanner_blog_banner = $request->file('blog_banner');
            if ($sitebanner_blog_banner) {
                $sitebanner_contact_name =  $sitebanner_blog_banner->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_blog_banner->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->blog_banner = $image_url;
                }
            }


            $sitebanner_blog_details_banner = $request->file('blog_details_banner');
            if ($sitebanner_blog_details_banner) {
                $sitebanner_contact_name =  $sitebanner_blog_details_banner->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_blog_details_banner->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->blog_details_banner = $image_url;
                }
            }

            $sitebanner_terms_banner = $request->file('terms_banner');
            if ($sitebanner_terms_banner) {
                $sitebanner_contact_name =  $sitebanner_terms_banner->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_terms_banner->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->terms_banner = $image_url;
                }
            }

            $sitebanner_privacy_banner = $request->file('privacy_banner');
            if ($sitebanner_privacy_banner) {
                $sitebanner_contact_name =  $sitebanner_privacy_banner->getClientOriginalName();
                $sitebanner_contact_name = preg_replace('/\s+/', '-',   $sitebanner_contact_name);
                $sitebanner_contact_full_name =   $sitebanner_contact_name;
                $upload_path = 'uploads/sitebanner/';
                $image_url = $upload_path . $sitebanner_contact_full_name;
                $success = $sitebanner_privacy_banner->move(($upload_path),    $sitebanner_contact_full_name);
                if ($success) {
                    $sitebanner->privacy_banner = $image_url;
                }
            }

            if ($sitebanner->save()) {
                Toastr::success('SiteSetting  has been Updated successfully :-)', 'Success');
                return redirect()->back();
            } else {
                Toastr::error('Something went wrong :-)', 'Error');
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
