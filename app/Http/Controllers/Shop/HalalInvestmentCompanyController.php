<?php

namespace App\Http\Controllers\Shop;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\InvestmentCompany;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class HalalInvestmentCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items=InvestmentCompany::latest()->get();

        return view('admin.halal-investment-company.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $users=User::where('user_type','investmentseeker')->where('status',1)->latest()->get();
        return view('admin.halal-investment-company.create',compact('users'));
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
        $data=new InvestmentCompany();
        $data->company_name=$request->company_name;
        $data->slug=Str::slug($request->company_name);
        $data->user_id=$request->user_id;
        $data->address=$request->address;
        $data->company_type=$request->company_type;
        $data->short_info=$request->short_info;
        $data->profit_per_annum=$request->profit_per_annum;
        $data->profit_period=$request->profit_period;
        $data->days_left=$request->days_left;
        $data->goal=$request->goal;
        $data->raised=$request->raised;
        $data->being_processed=$request->being_processed;
        $data->duration=$request->duration;
        $data->min_investment=$request->min_investment;
        $data->project_roi=$request->project_roi;
        $data->risk_grade=$request->risk_grade;
        $data->repayment=$request->repayment;
        $data->description=$request->description;
        $data->status=$request->status;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/halal-investmant-company/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image = $image_url;
            }
        }
        $data->save();
        Toastr::success('Data Saved Successfully');
        return redirect()->back();

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
        $data=InvestmentCompany::find(decrypt($id));
        $users=User::where('user_type','investmentseeker')->where('status',1)->latest()->get();
        return view('admin.halal-investment-company.edit',compact('data','users'));
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
        $data=InvestmentCompany::find($id);
        $data->company_name=$request->company_name;
        $data->slug=Str::slug($request->company_name);
        $data->user_id=$request->user_id;
        $data->address=$request->address;
        $data->company_type=$request->company_type;
        $data->short_info=$request->short_info;
        $data->profit_per_annum=$request->profit_per_annum;
        $data->profit_period=$request->profit_period;
        $data->days_left=$request->days_left;
        $data->goal=$request->goal;
        $data->raised=$request->raised;
        $data->being_processed=$request->being_processed;
        $data->duration=$request->duration;
        $data->min_investment=$request->min_investment;
        $data->project_roi=$request->project_roi;
        $data->risk_grade=$request->risk_grade;
        $data->repayment=$request->repayment;
        $data->description=$request->description;
        $data->status=$request->status;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/halal-investmant-company/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $data->image = $image_url;
            }
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
        //
        $data=InvestmentCompany::find($id);
        $data->delete();
        Toastr::success('Data Deleted Successfully');
        return redirect()->back();
    }
}
