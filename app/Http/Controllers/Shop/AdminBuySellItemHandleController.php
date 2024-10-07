<?php

namespace App\Http\Controllers\Shop;

use Toastr;
use App\Models\AdPayment;
use Illuminate\Http\Request;
use App\Models\BuySellProduct;
use App\Models\BuySellProductImage;
use App\Http\Controllers\Controller;
use App\Models\BuySellProductDetail;
use Illuminate\Support\Facades\Date;

class AdminBuySellItemHandleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads=BuySellProduct::latest()->get();
        return view('admin.buy-sell-item.index',compact('ads'));
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
        $ad=BuySellProduct::findOrFail(decrypt($id));
        $product_details=BuySellProductDetail::where('buysell_product_id',$ad->id)->first();
        $product_images=BuySellProductImage::where('buysell_product_id',$ad->id)->get();
        return view('admin.buy-sell-item.edit',compact('ad','product_details','product_images'));
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
        $data=BuySellProduct::findOrFail($id);
        $ad_payment=AdPayment::where('buysell_product_id',$id)->first();
        $data->status=$request->status;
        if($request->reason!=''){
            $data->reason=$request->reason;
            $data->is_reason=1;
        }
        else{
            $data->reason=$request->reason;

            $data->is_reason=0;
        }
       if($request->status==1){
        $data->count=1;
        $data->approved_at=now();
        $data->type=$ad_payment->adShowType->name;
       }
       else{
        $data->count=0;
       }
        $data->save();
        Toastr::success('Data Updated Successfully');
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
        $data=BuySellProduct::findOrFail($id);
        unlink($data->thumbnail_img);
        $product_details=BuySellProductDetail::where('buysell_product_id',$data->id)->first();
        $images=BuySellProductImage::where('buysell_product_id',$data->id)->get();
        $ad_payment_delete=AdPayment::where('buysell_product_id',$data->id)->first();
        if($ad_payment_delete){
            $ad_payment_delete->delete();
        }
       

       
        if(count($images)>0){
            foreach($images as $image){
                unlink($image->images);
                $image->delete();
               
            }
        }
        $data->delete();
        $product_details->delete();
        Toastr::success('Data Deleted Successfully');
        return redirect()->back();

    }
}
