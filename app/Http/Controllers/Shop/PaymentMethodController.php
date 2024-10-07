<?php

namespace App\Http\Controllers\Shop;

use Toastr;
use App\Models\Newsletter;
use App\Mail\NewsletterMail;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr as FacadesToastr;
use Illuminate\Support\Facades\Mail;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paymentmethods=PaymentMethod::latest()->get();
        return view('admin.paymentmethod.index',compact('paymentmethods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.paymentmethod.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $payment = new PaymentMethod();
        $payment->name = $request->name;
        $payment->number=$request->number;
        $payment->status = $request->status;
        if($payment->save()){
            Toastr::success('Payment Method has been Saved successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
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
        $data=PaymentMethod::findOrFail($id);
        return view('admin.paymentmethod.edit',compact('data'));
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
        $payment=PaymentMethod::findOrFail($id);
        $payment->name = $request->name;
        $payment->number=$request->number;
        $payment->status = $request->status;
        if($payment->update()){
            Toastr::success('Payment Method has been Updated successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }
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
        $data=PaymentMethod::findOrFail($id);
        $data->delete();
        Toastr::success('Payment Method has been Deleted successfully :-)','Success');
        return redirect()->back();

    }
    public function newsletterCreate()
    {
        $emails=Newsletter::latest()->get();
        return view('admin.newsletter.create',compact('emails'));
    }
    public function newsletterStore(Request $request)
    {
        $emails = $request->input('email', []);
        $subject = $request->input('subject');
        $content = $request->input('content');

        foreach ($emails as $email) {
            // Send email to each recipient
            Mail::to($email)->send(new NewsletterMail($subject, $content));
        }

        Toastr::success('Successfully Send!');
        return redirect()->back();
    }
}
