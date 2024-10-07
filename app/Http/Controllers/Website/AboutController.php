<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AboutAdmin;
use App\Models\SoftwareSiteSettingBanner;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    private $about;
    private $sitebanner;
    // $sitebanner = SoftwareSiteSettingBanner::first();
    public function index()
    {
        $this->about = AboutAdmin::where('status',1)->first();
        $this->sitebanner= SoftwareSiteSettingBanner::first();

        return view('website.gallery.about',[
            'about' => $this->about,
            'aboutbanner' =>$this->sitebanner,
        ]);
    }
}
