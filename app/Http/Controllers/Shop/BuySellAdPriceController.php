<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\BuySellAdPrice;
use Illuminate\Http\Request;
use Toastr;

class BuySellAdPriceController extends Controller
{
    
    public function index()
    {
        $prices=BuySellAdPrice::latest()->get();
        return view('admin.buysell_price.index',compact('prices'));
    }

    public function create()
    {
        //
        return view('admin.buysell_price.create');
    }

    public function store(Request $request)
    {
        //
        $data=new BuySellAdPrice();
        $data->name=$request->name;
        $data->price=$request->price;
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data Inserted Successfully');
        return redirect()->back();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $data=BuySellAdPrice::findOrFail(decrypt($id));
        return view('admin.buysell_price.edit',compact('data'));
    }

    public function update(Request $request, $id)
    {
        //
        $data=BuySellAdPrice::find($id);
        $data->name=$request->name;
        $data->price=$request->price;
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data Updated Successfully');
        return redirect()->back();
    }

    public function destroy($id)
    {
        //
        $data=BuySellAdPrice::findOrFail($id);
        $data->delete();
        Toastr::success('Data Deleted Successfully');
        return redirect()->back();
    }
}
