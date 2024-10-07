<?php

namespace App\Http\Controllers\Shop;

use App\Models\AdPayment;
use Illuminate\Http\Request;
use App\Models\BuySellAdPrice;
use App\Http\Controllers\Controller;
use Toastr;

class AdminHandleAdPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ad_payments=AdPayment::latest()->get();
        return view('admin.buysell-ad-payment.index',compact('ad_payments'));
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
        //
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
        $data=AdPayment::findOrFail(decrypt($id));
        return view('admin.buysell-ad-payment.edit',compact('data'));
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
        $data=AdPayment::find($id);
        $data->payment_status=$request->payment_status;
        $data->save();
        Toastr::success('Data upadated successfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=AdPayment::find($id);
        $data->delete();
        Toastr::success('Data deleted Successfully');
        return redirect()->back();
    }
}
