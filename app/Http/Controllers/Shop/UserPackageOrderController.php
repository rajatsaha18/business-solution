<?php

namespace App\Http\Controllers\Shop;

use Toastr;

use Carbon\Carbon;
use App\Models\User;
use App\Models\PackageOrder;
use Illuminate\Http\Request;
use App\Models\AdvertisePackage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserPackageOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $orders=PackageOrder::latest()->get();

        return view('admin.user-package-order.index',compact('orders'));
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
        $data=PackageOrder::findorFail(decrypt($id));
        return view('admin.user-package-order.edit',compact('data'));
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
        $data=PackageOrder::findorFail($id);
        $datas=PackageOrder::where('user_id',$data->user_id)->latest()->first();
        $data_inactives=PackageOrder::where('user_id',$data->user_id)->get();
        // if($datas->id ==$data->id){
        //     echo "true";
        // }
        // else{
        //     echo "false";
        // }
        // exit();
        $data->payment_status=$request->payment_status;
        $data->order_status=$request->order_status;
        $data->approved_at=NULL;
        $data->count=1;
        $data->update();


        if($data->payment_status == 1 && $data->order_status ==1){
         if($datas->id == $data->id){
                foreach($data_inactives as $di){
                   if($di->id !=$datas->id){
                    $di->order_status=3;
                    $data->count=1;
                    $di->update();
                   }
                }

            $order=PackageOrder::findOrFail($id);
            $order->approved_at=Carbon::now();
            $order->update();
            $user=User::where('id',$data->user_id)->first();
            $package=AdvertisePackage::where('id',$data->package_id)->first();
            $user->package_id=$data->package_id;
            $user->Advertise_limit=$package->number_of_advertise;
            $user->day_limit=$package->day_limit;
            $user->update();

          }
          else{
            foreach($data_inactives as $di){
                if($di->id !=$data->id){
                 $di->order_status=3;
                 $data->count=1;
                 $di->update();
                }
             }
            $order=PackageOrder::findOrFail($id);
            $order->approved_at=Carbon::now();
            $order->count=1;
            $order->update();
            $user=User::where('id',$data->user_id)->first();
            $package=AdvertisePackage::where('id',$data->package_id)->first();
            $user->package_id=$data->package_id;
            $user->Advertise_limit=$package->number_of_advertise;
            $user->day_limit=$package->day_limit;
            $user->update();
          }

        }
        if($data->update()){
            Toastr::success('User Package Order Status has been Update successfully :-)','Success');
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
        $data=PackageOrder::findOrFail($id);
        $data->delete();
        Toastr::success('Order has been successfully deleted');
        return redirect()->back();
    }
}
