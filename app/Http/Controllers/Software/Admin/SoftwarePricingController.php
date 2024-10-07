<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use App\Models\PricingPlan;
use Illuminate\Http\Request;
use App\Models\PricingCategory;
use App\Models\SoftwarePricingPlan;
use App\Http\Controllers\Controller;
use App\Models\SoftwarePricingCategory;

class SoftwarePricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricing = SoftwarePricingPlan::orderBy('id','desc')->get();
        return view('Software.admin.pricing.index',compact('pricing'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pricingcategories=SoftwarePricingCategory::where('status',1)->get();
        return view('Software.admin.pricing.create',compact('pricingcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qn = new SoftwarePricingPlan();
        $qn->title = $request->title;
        $qn->category_id=$request->category_id;
        $qn->type = $request->type;
        $qn->price = $request->price;
        $qn->features = json_encode($request->features);
        $qn->status = $request->status;
        if($qn->save()){
            Toastr::success('Package has been Saved successfully :-)','Success');
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SoftwarePricingPlan::findOrFail(decrypt($id));
        $pricingcategories=SoftwarePricingCategory::where('status',1)->get();
        return view('Software.admin.pricing.edit',compact('data','pricingcategories'));
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
        $qn = SoftwarePricingPlan::find($id);
        $qn->title = $request->title;
        $qn->category_id=$request->category_id;
        $qn->type = $request->type;
        $qn->price = $request->price;
        $qn->features = json_encode($request->features);
        $qn->status = $request->status;
        if($qn->save()){
            Toastr::success('Package has been Saved successfully :-)','Success');
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
        $data=SoftwarePricingPlan::find($id);
        $data->delete();
        Toastr::success('Data deleted Successfully');
        return redirect()->back();
    }
}
