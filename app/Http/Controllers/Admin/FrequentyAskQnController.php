<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FrequentlyAskQn;
use Illuminate\Http\Request;
use Toastr;

class FrequentyAskQnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qns = FrequentlyAskQn::orderBy('id','desc')->get();
        return view('admin.frequentlyQn.index',compact('qns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.frequentlyQn.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qn = new FrequentlyAskQn();
        $qn->title = $request->title;
        $qn->details = $request->details;
        $qn->status = $request->status;
        if($qn->save()){
            Toastr::success('Question has been Saved successfully :-)','Success');
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
        $data = FrequentlyAskQn::findOrFail(decrypt($id));
        return view('admin.frequentlyQn.edit',compact('data'));
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
        $qn = FrequentlyAskQn::find($id);
        $qn->title = $request->title;
        $qn->details = $request->details;
        $qn->status = $request->status;
        if($qn->save()){
            Toastr::success('Question has been Saved successfully :-)','Success');
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
        $qn = FrequentlyAskQn::find($id);
        if($qn){
            $qn->delete();
            Toastr::success('Qn has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
