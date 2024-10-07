<?php

namespace App\Http\Controllers\Shop;

use App\BdProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductType;
use Illuminate\Support\Str;
use Toastr;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_types = ProductType::orderBy('id','desc')->get();
        return view('admin.product.productType.index',compact('product_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.productType.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ProductType();
        $data->name = $request->name;
        $slug = Str::slug($request->name, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->name));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $data->slug = $slug;
        if($data->save()){
            Toastr::success('Product Type has been Update successfully :-)','Success');
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
        $data = ProductType::findOrFail(decrypt($id));
        return view('admin.product.productType.edit',compact('data'));
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
        $data = ProductType::find($id);
        $data->name = $request->name;
        $slug = Str::slug($request->name, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->name));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $data->slug = $slug;
        if($data->update()){
            Toastr::success('Product Type has been Update successfully :-)','Success');
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
        $brand = ProductType::find($id);
        $product = BdProduct::where('bd_brand_id', $id)->first();
        if($product){
            Toastr::error('This Product Type has another Table :-)','Error');
            return redirect()->back();
        }else{
            $brand->delete();
            Toastr::success('Product Type has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
