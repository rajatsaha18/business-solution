<?php

namespace App\Http\Controllers\Software\Admin;

use Illuminate\Http\Request;
use App\Models\SoftwareDoctor;
use App\Models\SoftwareContact;
use App\Models\SoftwareNewsLetter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\SoftwareProductContact;
use App\Models\SoftwareCampusAmbassador;
use Toastr;

class SoftwareDashboardController extends Controller
{
    public function index()
    {
        $newsletter = SoftwareNewsLetter::orderBy('id','desc')->get();
        return view('Software.admin.newsletter',compact('newsletter'));
    }
    public function contact(){
        $contacts = SoftwareContact::orderBy('id','desc')->get();
        return view('Software.admin.contact',compact('contacts'));
    }

    public function product_contact(){
        $contacts = SoftwareProductContact::orderBy('id','desc')->get();
        return view('Software.admin.product-contact',compact('contacts'));
    }
    // public function newsletter(){
    //     $newsletter = SoftwareNewsLetter::orderBy('id','desc')->get();
    //     return view('Software.admin.newsletter',compact('newsletter'));
    // }
    public function newsletterSend()
    {
        $newsletter = SoftwareNewsLetter::get();
        $doctors = SoftwareDoctor::get();
        $campusAmbassador = SoftwareCampusAmbassador::all();
        return view('Software.admin.newsletter_send',compact('newsletter','doctors','campusAmbassador'));
    }
    public function newsletterSendSubmit(Request $request)
    {
        $emails = $request->input('email', []);
        $subject = $request->input('subject');
        $content = $request->input('content');
        $doctor_emails = $request->input('doctor_email', []);
        $campus_ambassador_emails=$request->input('campus_ambassador_email', []);

        foreach ($emails as $email) {
            // Send email to each recipient
            Mail::to($email)->send(new SendEmailMail($subject, $content));
        }
        foreach ($doctor_emails as $doctor_email) {
            // Send email to each recipient
            Mail::to($doctor_email)->send(new SendEmailMail($subject, $content));
        }
         foreach ($campus_ambassador_emails as $campus_email) {
            // Send email to each recipient
            Mail::to($campus_email)->send(new SendEmailMail($subject, $content));
        }

        Toastr::success('Successfully Send!');
        return redirect()->back();
    }
}
