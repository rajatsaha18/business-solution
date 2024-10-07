<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SiteSetting;
use App\Models\SubCategory;
use App\Models\UserContact;
use Illuminate\Http\Request;
use Toastr;
class FrontendContactController extends Controller
{
    //
    public function index(){

        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        $sitesetting=SiteSetting::find(1);
       return view('frontend.pages.contact',compact('categories','subcategories','sitesetting'));
    }
    public function store(Request $request){
        $request->validate([
            'email' => 'required',
        ]);
        $user_contact=new UserContact();
        $user_contact->name=$request->name;
        $user_contact->product_name=$request->product_name;
        $user_contact->phone=$request->phone;
        $user_contact->email=$request->email;
        $user_contact->venue=$request->venue;
        $user_contact->message=$request->message;
        if($user_contact->save()){
            Toastr::success('Thanks! Your information has been saved :-)','Success');
            return redirect()->back();
        }

    }
}
