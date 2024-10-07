<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;

use App\Models\HospitalCategory;
use App\Models\HospitalSiteSetting;
use App\Models\HospitalSubCategory;
use App\Models\HospitalUserContact;
use Illuminate\Http\Request;
use Toastr;

class HospitalFrontendContactController extends Controller
{
    //
    public function index()
    {

        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        $sitesetting = HospitalSiteSetting::find(1);
        return view('Hospital.frontend.pages.contact.contact', compact('categories', 'subcategories', 'sitesetting'));
    }
    public function store(Request $request)
    {
        $user_contact = new HospitalUserContact();
        $user_contact->name = $request->name;
        $user_contact->phone = $request->phone;
        $user_contact->email = $request->email;
        $user_contact->venue = $request->venue;
        $user_contact->message = $request->message;
        if ($user_contact->save()) {
            // Toastr::success('Thanks! Your information has been saved :-)', 'Success');
            return redirect()->back()->with('success', 'Thanks! Your information has been sent :-');
        }
    }
}
