<?php

namespace App\Http\Controllers\Shop;

use Mail;
use App\BdCategory;
use App\Models\User;
use App\AdvertisePost;
use App\Models\BulkEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class EmailController extends Controller
{
    public function index($id){
        $advertise = AdvertisePost::find($id);
        $bdcategory = BdCategory::orderBy('id','desc')->where('status',1)->get();
        return view('bdshop.frontEnd.email.index',compact('advertise','bdcategory'));
    }
    public function save_email(Request $request){
        $advertise = AdvertisePost::find($request->advertise_company_id);
        $user=User::WHERE('business_name','LIKE','%'.$advertise->business_name.'%')->first();
        // dd($user);
        $email = new BulkEmail();
        $email->company_name = $request->name;
        $email->advertise_company_id=$request->advertise_company_id;
        $email->user_email = $request->email;
        $email->subject = $request->subject;
        $email->content = $request->details_message;
        $email_content=$request->details_message;
        $email->save();
        $sender_email=$request->email;
        $message_date = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'content'=>$request->details_message
        ];
       
        // dd($email);
        $subject = $request->subject;
        if($user){
             $to_email = $user->email;
            Mail::send('bdshop.frontEnd.email.content',$message_date, function ($message)use($to_email,$message_date) {
            $message->from($message_date['email']);
            $message->to($to_email);
            $message->subject($message_date['subject']);
           
            
        });
        Toastr::success('Email send successfully');
            return redirect()->back();
        }
        else{
             Toastr::error('Company Email not found');
            return redirect()->back();
        }
    }
}
