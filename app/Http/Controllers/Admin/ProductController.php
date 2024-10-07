<?php

namespace App\Http\Controllers\Admin;

use Toastr;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use App\Models\Productimage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $sort_search =null;
        $products = Product::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $products = $products->where('title', 'like', '%'.$sort_search.'%');
        }
        $products = $products->get();
        return view('admin.page.Products.index',compact('sort_search','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        $subsubcategories=SubSubCategory::where('status',1)->get();
        // $colors=Color::where('status','1')->get();
        // $brands=Brand::where('status','1')->get();

        return view('admin.page.Products.create',compact('categories','subcategories','subsubcategories'));
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


        $product = new Product();
        $product->title = $request->title;
        $product->slug =Str::slug($request->title);
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->sub_sub_category_id = $request->sub_sub_category_id;
        // $product->color_id = $request->color_id;
        $product->brand= $request->brand;
        $product->origin = $request->origin;
        $product->assembly = $request->assembly;
        $product->price = $request->price;
        $product->buying_price= $request->buying_price;
        $product->selling_price= $request->selling_price;
        $product->short_description= $request->short_description;
        $product->long_description= $request->long_description;
        $product->featured_product=$request->featured_product;

        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->status = $request->status;
        $frontend_image = $request->file('frontend_image');
        if($frontend_image)
        {
            $image_name= $frontend_image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/products/';
            $image_url = $upload_path.$image_full_name;
            $success = $frontend_image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $product->frontend_image = $image_url;
            }
        }
        $backend_image = $request->file('product_catalog');
        if( $backend_image)
        {
            $image_name= $backend_image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/products/';
            $image_url = $upload_path.$image_full_name;
            $success = $backend_image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $product->product_catalog = $image_url;
            }
        }
        if($product->save()){
            if($request->hasFile('image')){
                foreach(($request->file('image')) as $file){
                    $file_name=md5(time().rand()).'.'.$file->getClientOriginalExtension();
                    $file->move(('uploads/product_images/'),$file_name);
                    Productimage::create([
                        'product_id'=>$product->id,
                        'image'=>$file_name,

                    ]);
                }
            }
            Toastr::success('Product has been Saved successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }

        // $productimages=new Productimage();
        // for($productimages->image)
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
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        $subsubcategories=SubSubCategory::where('status',1)->get();
        // $colors=Color::where('status','1')->get();
        // $brands=Brand::where('status','1')->get();
        $productimages=Productimage::where('product_id',decrypt($id))->get();
        $data = Product::findOrFail(decrypt($id));

        return view('admin.page.Products.edit',compact('data','productimages','categories','subcategories','subsubcategories'));
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
        $product = Product::findOrFail($id);
        $product->title = $request->title;
        $product->slug =Str::slug($request->title);
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->sub_sub_category_id = $request->sub_sub_category_id;
        // $product->color_id = $request->color_id;
        $product->brand = $request->brand;
        $product->origin = $request->origin;
        $product->assembly = $request->assembly;
        $product->price = $request->price;
        $product->buying_price= $request->buying_price;
        $product->selling_price= $request->selling_price;
        $product->short_description= $request->short_description;
        $product->long_description= $request->long_description;
        $product->featured_product=$request->featured_product;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->status = $request->status;
        $frontend_image = $request->file('frontend_image');
        if($frontend_image)
        {
            $image_name= $frontend_image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/products/';
            $image_url = $upload_path.$image_full_name;
            $success = $frontend_image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                // if($product->frontend_image){
                //     unlink(($product->frontend_image));
                // }
                $product->frontend_image = $image_url;
            }
        }
        $backend_image = $request->file('product_catalog');
        if( $backend_image)
        {
            $image_name= $backend_image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/products/';
            $image_url = $upload_path.$image_full_name;
            $success = $backend_image->move(($upload_path), $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                // if($product->backend_image){
                //     unlink(($product->backend_image));
                // }
                $product->product_catalog = $image_url;
            }
        }
        if($product->Update()){
            if($request->hasFile('image')){
                foreach(($request->file('image')) as $file){
                    $file_name=md5(time().rand()).'.'.$file->getClientOriginalExtension();
                    $file->move(('uploads/product_images/'),$file_name);
                    Productimage::create([
                        'product_id'=>$id,
                        'image'=>$file_name,

                    ]);
                }
            }
            Toastr::success('Product has been Updated successfully :-)','Success');
            return redirect()->back();
        }
        else{
            Toastr::error('Something went wrong :-)','Error');
            return redirect()->back();
        }
    }
 //find subcategory
 public function findSubCategory(Request $request){


    $data=SubCategory::select('name','id')->where('category_id',$request->id)->get();

    return response()->json($data);

}
//find subsubcategory
public function findSubSubCategory(Request $request){


    $data=SubSubCategory::select('name','id')->where('subcategory_id',$request->id)->get();

    return response()->json($data);

}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $product = Product::find($id);
       $productimages=Productimage::where('product_id',$id)->get();
        if( $product){
           $product->delete();
           if($product->frontend_image){
            unlink(($product->frontend_image));
           }
           if($product->backend_image){
            unlink(($product->backend_image));
           }
           foreach($productimages as $productimage){
             $productimage->delete();
             unlink(('uploads/product_images/'.$productimage->image));
           }
            Toastr::success('Product  has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
    public function delete($id)
    {

        $productimage = Productimage::find($id);
        if( $productimage){
            $productimage->delete();
            unlink(('uploads/product_images/'.$productimage->image));
            Toastr::success('Product Image  has been Deleted successfully :-)','Success');
            return redirect()->back();
        }

    }
    public function productLowtoHigh(){

    }

}
