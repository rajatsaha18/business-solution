<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\HalalInvestmentMaturedInvestment;

class HalalInvestmentMaturedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items=HalalInvestmentMaturedInvestment::latest()->get();
        return view('admin.halal-investment-matured.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.halal-investment-matured.create');
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
        $data=new HalalInvestmentMaturedInvestment();
        $data->company_name=$request->company_name;
        $data->total_repaid=$request->total_repaid;
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data saved Successfully');
        return  redirect()->back();
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
        $data=HalalInvestmentMaturedInvestment::find(decrypt($id));
        return view('admin.halal-investment-matured.edit',compact('data'));
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
        $data=HalalInvestmentMaturedInvestment::find($id);
        $data->company_name=$request->company_name;
        $data->total_repaid=$request->total_repaid;
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data udpated Successfully');
        return  redirect()->back();
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
        $data=HalalInvestmentMaturedInvestment::find($id);
        $data->delete();
        Toastr::success('Data Deleted Successfully');
        return redirect()->back();
    }
}
