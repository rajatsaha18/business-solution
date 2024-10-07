<?php

namespace App\Http\Controllers\Shop;

use App\BdGeneralSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeneralSettingController extends Controller
{
    public function index(){
        $generalsetting = BdGeneralSetting::first();
        return view("bdshop.generalSetting.index", compact("generalsetting"));
    }
}
