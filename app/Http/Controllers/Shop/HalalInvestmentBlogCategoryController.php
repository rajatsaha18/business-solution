<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\HalalInvestmentBlogCategory;

class HalalInvestmentBlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogcategories=HalalInvestmentBlogCategory::latest()->get();
        return view('admin.halal-investment-blog-category.index',compact('blogcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.halal-investment-blog-category.create');
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
        $data=new HalalInvestmentBlogCategory();
        $data->name=$request->name;
        $data->status=$request->status;
        $data->save();
        Toastr::success('Data saved successfully');
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
        $data=HalalInvestmentBlogCategory::findOrFail(decrypt($id));
        return  view('admin.halal-investment-blog-category.edit',compact('data'));
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
        $data=HalalInvestmentBlogCategory::find($id);
        $data->name=$request->name;
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
        $data=HalalInvestmentBlogCategory::find($id);
        $data->delete();
        Toastr::success('Data deleted successfully');
        return redirect()->back();
    }
}
