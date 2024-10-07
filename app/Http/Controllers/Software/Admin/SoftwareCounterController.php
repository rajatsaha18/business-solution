<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use App\Models\Counter;
use Illuminate\Http\Request;
use App\Models\SoftwareCounter;
use App\Http\Controllers\Controller;

class SoftwareCounterController extends Controller
{
    public function index()
    {
        $data=SoftwareCounter::first();
        return view('Software.admin.Counters.index',compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=SoftwareCounter::first();
       if($data){
        $data->title1=$request->title1;
        $data->number1=$request->number1;
        $data->title2=$request->title2;
        $data->number2=$request->number2;
        $data->title3=$request->title3;
        $data->number3=$request->number3;
        $data->title4=$request->title4;
        $data->number4=$request->number4;
        $data->save();
        Toastr::success('Data updated successfully');
        return redirect()->back();
       }
       else{
        $data=new SoftwareCounter();
        $data->title1=$request->title1;
        $data->number1=$request->number1;
        $data->title2=$request->title2;
        $data->number2=$request->number2;
        $data->title3=$request->title3;
        $data->number3=$request->number3;
        $data->title4=$request->title4;
        $data->number4=$request->number4;
        $data->save();
        Toastr::success('Data saved successfully');
        return redirect()->back();
       }
    }

    
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
    }
}
