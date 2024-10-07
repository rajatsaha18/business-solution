<?php

namespace App\Http\Controllers\Shop\Product;

use Auth;
use App\BdProduct;
use Carbon\Carbon;
use App\Models\User;
use App\ProductType;
use App\BdProductCategory;
use Illuminate\Support\Str;
use App\Models\PackageOrder;
use Illuminate\Http\Request;
use App\BdProductSubCategory;
use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = BdProduct::where('bd_user_id',Auth::user()->id)->orderBy('id','desc')->paginate(12);
        $categories = BdProductCategory::where('status',1)->get();
        return view('bdshop.frontEnd.home.product.index',compact('categories','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BdProductCategory::where('status',1)->get();
        $sub_categories = BdProductSubCategory::where('status',1)->get();
        $product_type = ProductType::orderBy('id','desc')->get();
        return view('bdshop.frontEnd.home.product.create',compact('categories','sub_categories','product_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $user=Auth::user()->id;
      $limit=count(BdProduct::where('bd_user_id',$user)->get());
      $userPackageOrder=User::where('id',$user)->first();
      $package=PackageOrder::where('user_id',$user)->where('package_id',$userPackageOrder->package_id)->where('order_status',1)->first();

    //   exit();
      if(!empty($package->approved_at)){
        $approved_time=$package->approved_at;
        $expire_date=(new Carbon($approved_time))->addDays($userPackageOrder->day_limit);
      }
      else{
        $approved_time=NULL;
        $expire_date=NULL;
      }
    //   echo $approved_time;
    //   echo "<br>";
    //   echo $expire_date;
    //   exit();
      $diff = now()->diffInDays(Carbon::parse($approved_time));
      $today_date=now();


      if($userPackageOrder->package_id !=NULL){
        if((isset($package->order_status) == 1) && $limit<($userPackageOrder->Advertise_limit) && (Carbon::parse($today_date)->lt($expire_date))){

            $slug = Str::slug($request->title, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->title));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
            }
            $category = new BdProduct();
            $category->added_by = Auth::user()->name;
            $category->bd_user_id = Auth::user()->id;
            $category->product_cat_id = $request->product_cat_id;
            $category->product_sub_cat_id = $request->product_sub_cat_id;
            $category->brand = $request->brand;
            $category->origin = $request->origin;
            $category->product_type_id = $request->product_type_id;
            $category->title = $request->title;
            $category->product_code = $request->product_code;
            $category->price = $request->price;
            $category->status = 0;
            $category->count=0;
            $category->price_type = $request->price_type;

            $category->short_description = $request->short_description;
            $category->long_description = $request->long_description;
            $category->meta_title = $request->meta_title;
            $category->meta_description = $request->meta_description;
            $category->meta_keyword = $request->meta_keyword;
            $category->slug = $slug;
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
                    $category->image = $image_url;
                }
            }

            if($category->save()){
                return redirect()->back()->with('message', 'Product has been inserted successfully!');
            }
            else{
                return redirect()->back()->with('message', 'Somethings went wrong!');
            }
        }
        else{
        $categories = BdProductCategory::where('status',1)->get();

        return redirect()->route('show.package')->with('message','Your  product upload limit or Time Limit has been exceeded! Buy Package!!!');
        }
      }
      else{
        if($limit<2){
            $slug = Str::slug($request->title, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->title));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
            }
            $category = new BdProduct();
            $category->added_by = Auth::user()->name;
            $category->bd_user_id = Auth::user()->id;
            $category->product_cat_id = $request->product_cat_id;
            $category->product_sub_cat_id = $request->product_sub_cat_id;
            $category->brand = $request->brand;
            $category->origin = $request->origin;
            $category->product_type_id = $request->product_type_id;
            $category->title = $request->title;
            $category->product_code = $request->product_code;
            $category->price = $request->price;
            $category->status = 0;
            $category->count=0;
            $category->price_type = $request->price_type;

            $category->short_description = $request->short_description;
            $category->long_description = $request->long_description;
            $category->meta_title = $request->meta_title;
            $category->meta_description = $request->meta_description;
            $category->meta_keyword = $request->meta_keyword;
            $category->slug = $slug;
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
                    $category->image = $image_url;
                }
            }

            if($category->save()){
                return redirect()->back()->with('message', 'Product has been inserted successfully!');
            }
            else{
                return redirect()->back()->with('message', 'Somethings went wrong!');
            }
        }
        else{
            $categories = BdProductCategory::where('status',1)->get();

            return redirect()->route('show.package')->with('message','Your free product upload limit has been exceeded! Buy Package!!!');
            }
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
        $categories = BdProductCategory::where('status',1)->get();
        $details = BdProduct::find($id);
        return view('bdshop.frontEnd.home.product.show',compact('categories','details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = BdProductCategory::where('status',1)->get();
        $details = BdProduct::find($id);
        $categories = BdProductCategory::where('status',1)->get();
        $sub_categories = BdProductSubCategory::where('status',1)->get();
        $product_type = ProductType::orderBy('id','desc')->get();
        return view('bdshop.frontEnd.home.product.edit',compact('categories','details','sub_categories','product_type'));
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
        $slug = Str::slug($request->title, '-');
        if($slug == ''){
            $slug =  preg_replace('/\s+/u', '-', trim($request->title));
            $slug = preg_replace('/[&]/', '-and-', $slug);
            $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $category = BdProduct::find($id);
        // $category->added_by = Auth::user()->name;
        // $category->bd_user_id = Auth::user()->id;
        $category->product_cat_id = $request->product_cat_id;
        $category->product_sub_cat_id = $request->product_sub_cat_id;
        $category->brand = $request->brand;
        $category->origin = $request->origin;
        $category->product_type_id = $request->product_type_id;
        $category->title = $request->title;
        $category->product_code = $request->product_code;
        $category->price = $request->price;
        if($category->status == 0){
            $category->status == 0;
        }
        else{
            $category->status == 1;
        }
        $category->price_type = $request->price_type;
        $category->short_description = $request->short_description;
        $category->long_description = $request->long_description;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->meta_keyword = $request->meta_keyword;
        $category->slug = $slug;
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
                $category->image = $image_url;
            }
        }

        if($category->update()){
            return redirect()->back()->with('message', 'Product has been Updated successfully!');
        }
        else{
            return redirect()->back()->with('message', 'Something went wrong!');
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
        $bdproduct->delete();
        return redirect()->route('product-info.store')->with('message', 'Product has been deleted successfully!');
    }
}
