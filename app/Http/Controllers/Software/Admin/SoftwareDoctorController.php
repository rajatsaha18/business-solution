<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\SoftwareDoctor;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SoftwareDoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=SoftwareDoctor::latest()->get();
        return view('Software.admin.doctor.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Software.admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data=new SoftwareDoctor();
       $data->name=$request->name;
       $data->designation=$request->designation;
       $data->phone=$request->phone;
       $data->email=$request->email;
       $data->address=$request->address;
       $data->save();
       Toastr::success('Data Saved Successfull');
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
       $data=SoftwareDoctor::find($id);
       $data->delete();
       Toastr::success('Data Saved Successfully');
       return redirect()->back();
    }
}
