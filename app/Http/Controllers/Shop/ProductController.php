<?php

namespace App\Http\Controllers\Shop;

use App\BdBrand;
use App\BdProduct;
use App\BdProductCategory;
use App\BdProductSubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\ProductType;
use Auth;
use Toastr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $products = BdProduct::orderBy('id','desc')->get();
        $sort_search = null;
        $products = BdProduct::orderBy('created_at', 'desc');

        if ($request->has('search')){
            $sort_search = $request->search;
            $products = $products->where('title', 'like', '%'.$sort_search.'%');
        }
        $products = $products->get();
        return view('admin.product.index',compact('products','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BdProductCategory::orderBy('id','desc')->get();
        $sub_categories = BdProductSubCategory::orderBy('id','desc')->get();
        $brands = BdBrand::orderBy('id','desc')->get();
        $product_type = ProductType::orderBy('id','desc')->get();
        return view('admin.product.create',compact('categories','sub_categories','product_type','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new BdProduct();
        $product->added_by = Auth::user()->name;
        $product->bd_user_id = Auth::user()->id;
        $product->product_cat_id = $request->product_cat_id;
        $product->product_sub_cat_id = $request->product_sub_cat_id;
        $product->brand = $request->brand;
        $product->product_type_id = $request->product_type_id;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->price_type = $request->price_type;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keyword = $request->meta_keyword;
        $product->slug = $request->slug;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/icon/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $product->image = $image_url;
            }
        }

        if($product->save()){
            Toastr::success('Product has been saved successfully :-)','Success');
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
        $categories = BdProductCategory::orderBy('id','desc')->get();
        $sub_categories = BdProductSubCategory::orderBy('id','desc')->get();
        $brands = BdBrand::orderBy('id','desc')->get();
        $product_type = ProductType::orderBy('id','desc')->get();
        $data = BdProduct::findorFail(decrypt($id));
        return view('admin.product.edit',compact('data','categories','sub_categories','product_type','brands'));
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
        $product = BdProduct::find($id);
        // $product->added_by = Auth::user()->user_type;
        // $product->bd_user_id = Auth::user()->id;
        $product->product_cat_id = $request->product_cat_id;
        $product->product_sub_cat_id = $request->product_sub_cat_id;
        $product->brand = $request->brand;
        $product->product_type_id = $request->product_type_id;
        $product->title = $request->title;
        $product->price = $request->price;
        $product->status = $request->status;
        $product->count=1;
        $product->price_type = $request->price_type;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->meta_keyword = $request->meta_keyword;
        $product->slug = $request->slug;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/categories/icon/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $product->image = $image_url;
            }
        }

        if($product->save()){
            Toastr::success('Product has been Update successfully :-)','Success');
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
        $bdproduct = BdProduct::find($id);
        if($bdproduct->delete()){
            Toastr::success('Product has been deleted successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something Wrong');
            return redirect()->back();
        }
    }
    public function get_sub_category(Request $request){
        $sub_categories = BdProductSubCategory::where('category_id',$request->category_id)->get();
        return view('admin.product.get_sub_cat_ajax',compact('sub_categories'));
    }
}
