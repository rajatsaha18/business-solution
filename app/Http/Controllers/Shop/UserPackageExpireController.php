<?php

namespace App\Http\Controllers\Shop;

use App\BdProduct;
use App\Models\PackageOrder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class UserPackageExpireController extends Controller
{
    //
    public function UserPackageExpire(){
        $data=PackageOrder::where('payment_status',1)->where('order_status',1)->get();
        return view('admin.user-package-expire',compact('data'));
    }
    public function UserProductInactive(Request $request){
        $user_id=$request->id;
        $data=BdProduct::where('bd_user_id',$user_id)->get();
        foreach($data as $item){
             $prod_del=BdProduct::findOrFail($item->id);
             $prod_del->status=0;
             $prod_del->update();
        }
        Toastr::success('All Products has been Inactive :-)','Success');
        return redirect()->back();
    }
}
