<?php

namespace App\Http\Controllers\Website;

use App\Models\NewGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SoftwareSiteSettingBanner;
use App\Http\Controllers\Admin\SiteSettingBannerController;

class GalleryController extends Controller
{
    private $gallery;
    private $galleryCover;

    public function index()
    {
        $this->gallery = NewGallery::all();
        $this->galleryCover= SoftwareSiteSettingBanner::first();
        return view('website.gallery.gallery',[
            'galleries' => $this->gallery,
            'galleryCover'=> $this->galleryCover,

        ]);
    }
}
