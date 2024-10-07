<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserContact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class UserContactHandleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user_contacts=UserContact::latest()->get();
        return view('admin.page.Usercontact.index',compact('user_contacts'));
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
        $data=UserContact::findOrFail(decrypt($id));
        return view('admin.page.Usercontact.edit',compact('data'));
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
        $data=UserContact::findOrFail($id);
        $data->status=$request->status;
        if($data->update()){
            Toastr::success('User Contact has been Updated successfully :-)','Success');
            return redirect()->route('admin.usercontact.index');
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
        $data=UserContact::findOrFail($id);
        if($data){
            $data->delete();
            Toastr::success('UserContact  has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
