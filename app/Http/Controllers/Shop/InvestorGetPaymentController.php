<?php

namespace App\Http\Controllers\Shop;

use App\Models\User;

use Illuminate\Http\Request;
use App\Models\InvestmentCompany;
use App\Models\InvestorGetPayment;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class InvestorGetPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $payments=InvestorGetPayment::latest()->get();
       return view('admin.investor-get-payment.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $investors=User::where('role_id',5)->where('status',1)->get();
        $companies=InvestmentCompany::where('status',1)->get();
        return view('admin.investor-get-payment.create',compact('investors','companies'));

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
        $data=new InvestorGetPayment();
        $data->investor_id=$request->investor_id;
        $data->company_id=$request->company_id;
        $owner_id=InvestmentCompany::where('id',$request->company_id)->first();
        $data->investment_seeker_id=$owner_id->user_id;
        $data->payment_type=$request->payment_type;
        $data->account_no=$request->account_no;
        $data->amount=$request->amount;
        $data->save();
        Toastr::success('Data updated successfully');
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
        $investors=User::where('role_id',5)->where('status',1)->get();
        $companies=InvestmentCompany::where('status',1)->get();
        $data=InvestorGetPayment::findOrFail(decrypt($id));
        return view('admin.investor-get-payment.edit',compact('investors','companies','data'));
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

        $data=InvestorGetPayment::find($id);
        $data->investor_id=$request->investor_id;
        $data->company_id=$request->company_id;
        $owner_id=InvestmentCompany::where('id',$request->company_id)->first();
        $data->investment_seeker_id=$owner_id->user_id;
        $data->payment_type=$request->payment_type;
        $data->account_no=$request->account_no;
        $data->amount=$request->amount;
        $data->save();
        Toastr::success('Data updated successfully');
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
        $data=InvestorGetPayment::findOrFail($id);
        $data->delete();
        Toastr::success('Data Deleted successfully');
        return redirect()->back();

    }
}
