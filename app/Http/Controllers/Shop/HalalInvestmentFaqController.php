<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Models\HalalInvestmentFaq;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class HalalInvestmentFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faqs=HalalInvestmentFaq::latest()->get();
        return view('admin.halal-investment-faq.index',compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.halal-investment-faq.create');
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
        $data=new HalalInvestmentFaq();
        $data->question=$request->question;
        $data->answer=$request->answer;
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data inserted successfully');
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
        $data=HalalInvestmentFaq::findOrFail(decrypt($id));
        return view('admin.halal-investment-faq.edit',compact('data'));
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
        $data=HalalInvestmentFaq::find($id);
        $data->question=$request->question;
        $data->answer=$request->answer;
        $data->status=$request->status;
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
        $data=HalalInvestmentFaq::find($id);
      
        $data->delete();
        Toastr::success('Data deleted successfully');
        return redirect()->back();
    }
}
