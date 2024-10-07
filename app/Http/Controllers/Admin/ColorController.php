<?php

namespace App\Http\Controllers\Admin;

use App\Models\Color;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $sort_search =null;
        $colors = Color::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $colors = $colors->where('title', 'like', '%'.$sort_search.'%');
        }
        $colors = $colors->paginate(15);
        return view('admin.page.Color.index',compact('sort_search','colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.page.Color.create');
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
       
     
        $color = new Color();
        $color->title = $request->title;
        $color->status = $request->status;
        
        if($color->save()){
            Toastr::success('Color  has been Saved successfully :-)','Success');
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
        //
        $data = Color::findOrFail(decrypt($id));
        return view('admin.page.Color.edit',compact('data'));
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
        $color = Color::findOrFail($id);
        $color->title = $request->title;
       
       $color->status = $request->status;
      
        if($color->Update()){
            Toastr::success('Color has been Updated successfully :-)','Success');
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
       $color = Color::find($id);
        if($color){
           $color->delete();
            Toastr::success('Color  has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
