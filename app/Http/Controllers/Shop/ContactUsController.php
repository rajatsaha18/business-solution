<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\InfoContactUs;
use Toastr;

class ContactUsController extends Controller
{
    public function index(){
        $contact = InfoContactUs::first();
        return view('bdshop.admin.contact',compact('contact'));
    }
    public function shop_save_contact(Request $request){
        $contact = InfoContactUs::first();
        if($contact){
            $contact->company_name = $request->company_name;
            $contact->address = $request->address;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->website = $request->website;
            if($contact->update()){
                Toastr::success('contact has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
            }
        }else{
            $contact = new InfoContactUs();
            $contact->company_name = $request->company_name;
            $contact->address = $request->address;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->website = $request->website;
            if($contact->save()){
                Toastr::success('contact has been Updated successfully :-)','Success');
                return redirect()->back();
            }
            else{
                Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
            }
        }

    }
}
