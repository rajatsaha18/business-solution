<?php

namespace App\Http\Controllers\Hospital;

use App\Models\HospitalBrand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Toastr;

class HospitalBrandController extends Controller
{
    
    public function index(Request $request)
    {
        //
        $sort_search =null;
        $brands = HospitalBrand::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $brands = $brands->where('title', 'like', '%'.$sort_search.'%');
        }
        $brands = $brands->paginate(15);
        return view('Hospital.admin.page.Brand.index',compact('sort_search','brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Hospital.admin.page.Brand.create');
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
       
     
        $brand = new HospitalBrand();
        $brand->title = $request->title;
        $brand->order = $request->order;
        $brand->status = $request->status;
        $brand->meta_title=$request->meta_title;
        $brand->meta_description=$request->meta_description;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/brands/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                
                $brand->image = $image_url;
            }
        }
        if($brand->save()){
            Toastr::success('Brand  has been Saved successfully :-)','Success');
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
        $data = HospitalBrand::findOrFail(decrypt($id));
        return view('Hospital.admin.page.Brand.edit',compact('data'));
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
        $brand = HospitalBrand::findOrFail($id);
        $brand->title = $request->title;
        $brand->order = $request->order;
        $brand->status = $request->status;
        $brand->meta_title=$request->meta_title;
        $brand->meta_description=$request->meta_description;
        $image = $request->file('image');
       if($image)
       {
           $image_name= $image->getClientOriginalName();
           $image_name = preg_replace('/\s+/', '-', $image_name);
           $image_full_name = $image_name;
           $upload_path = 'uploads/brands/';
           $image_url = $upload_path.$image_full_name;
           $success = $image->move(($upload_path), $image_full_name);
           // $img = Image::make($image_url)->resize(400, 200)->save();
           if($success)
           {
               if(file_exists($brand->image)){
                unlink(($brand->image));
               }
               $brand->image = $image_url;
           }
       }
        if($brand->Update()){
            Toastr::success('Brand has been Updated successfully :-)','Success');
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
       $brand = HospitalBrand::find($id);
        if( $brand){
           $brand->delete();
           
           if($brand->image){
            unlink(($brand->image));
           }
            Toastr::success('Brand  has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
