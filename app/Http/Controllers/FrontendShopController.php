<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\SiteSetting;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class FrontendShopController extends Controller
{
    //
    public function index()
    {
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        $products=Product::where('status','1')->get();
        $products_count=count(Product::where('status','1')->get());
        $sitesetting=SiteSetting::find(1);

        return view('frontend.pages.all_products',compact('sitesetting','categories','subcategories','products','products_count'));
    }


    public function showProductbyCategory($slug)
    {   $category=Category::where('slug',$slug)->first();
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        $products=Product::where('category_id',$category->id)->get();
        $product_count=count(Product::where('category_id',$category->id)->get());

        $sitesetting=SiteSetting::find(1);
        $subcates=SubCategory::where('category_id',$category->id)->where('status','1')->get();

        return view('frontend.pages.products',compact('subcates','sitesetting','categories','subcategories','products','category'));

    }
    public function showProductbySubCategory($slug)
    {
        $subcategory_name=SubCategory::where('slug',$slug)->first();
        $subcategory=SubCategory::where('slug',$slug)->first();
        $related_subcategories=SubCategory::where('category_id',$subcategory->category_id)->get();

        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        $products=Product::where('sub_category_id',$subcategory->id)->paginate(12);
        $product_count=count(Product::where('sub_category_id',$subcategory->id)->get());
        $sitesetting=SiteSetting::find(1);
        return view('frontend.pages.sub_products',compact('subcategory_name','sitesetting','categories','subcategories','products','product_count','related_subcategories'));

    }
    public function showProductbySubSubCategory($slug)
    {
        $subsubcategory_name=SubSubCategory::where('slug',$slug)->first();
        $subsubcategory=SubSubCategory::where('slug',$slug)->first();
        $related_subsubcategories=SubSubCategory::where('subcategory_id',$subsubcategory->subcategory_id)->get();
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        $products=Product::where('sub_sub_category_id',$subsubcategory->id)->paginate(12);
        $product_count=count(Product::where('sub_sub_category_id',$subsubcategory->id)->get());
        $sitesetting=SiteSetting::find(1);
        return view('frontend.pages.shop.showsubsubproducts',compact('sitesetting','products','categories','subcategories','subsubcategory_name','related_subsubcategories','product_count'));

    }
    public function showProductbySearchName(Request $request)
    {
        $id=$request->search_category;
        $name=$request->s;
        $category_name=Category::where('id',$id)->first();
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        $sitesetting=SiteSetting::find(1);
        $products=Product::where('title','LIKE','%'.$name.'%')->where('status','1')->paginate(8);
        return view('frontend.pages.all_products',compact('sitesetting','categories','subcategories','products','name','category_name'));

    }
    public function lowTohigh(Request $request){
        $categories=Category::where('status','1')->get();
        $subcategories=SubCategory::where('status','1')->get();
        if($request->orderby == 'sortbyasc'){
            $products=Product::Orderby('selling_price','ASC')->where('status','1')->paginate(8);

        }
        else{
            $products=Product::Orderby('selling_price','DESC')->where('status','1')->paginate(8);

        }
        // $products=Arr::sort($productss);
        // print_r($products);
        // exit();
        $sitesetting=SiteSetting::find(1);

        return view('frontend.pages.shop.shops',compact('sitesetting','categories','subcategories','products'));
    }
}
