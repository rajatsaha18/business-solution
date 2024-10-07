<?php

namespace App\Http\Controllers\Hospital;

use App\Http\Controllers\Controller;

use App\Models\HospitalProduct;
use App\Models\HospitalCategory;
use App\Models\HospitalSiteSetting;
use App\Models\HospitalBackService;
use App\Models\HospitalSubCategory;
use App\Models\HospitalSubSubCategory;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class HospitalFrontendShopController extends Controller
{
    //
    public function index()
    {
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        $products = HospitalProduct::where('status', '1')->where('type', 'product')->paginate(16);
        $products_count = count(HospitalProduct::where('status', '1')->get());
        $sitesetting = HospitalSiteSetting::find(1);

        return view('Hospital.frontend.pages.shop.shops', compact('sitesetting', 'categories', 'subcategories', 'products', 'products_count'));
    }


    public function showProductbyCategory($slug)
    {
        $category = HospitalCategory::where('slug', $slug)->first();
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        $products = HospitalProduct::where('hospital_category_id', $category->id)->paginate(12);
        $product_count = count(HospitalProduct::where('hospital_category_id', $category->id)->get());

        $sitesetting = HospitalSiteSetting::find(1);
        $subcates = HospitalSubCategory::where('hospital_category_id', $category->id)->where('status', '1')->get();

        return view('Hospital.frontend.pages.shop.showproduct', compact('subcates', 'sitesetting', 'categories', 'subcategories', 'products', 'category', 'product_count'));
    }
    public function showProductbySubCategory($slug)
    {
        $subcategory_name = HospitalSubCategory::where('slug', $slug)->first();
        $subcategory = HospitalSubCategory::where('slug', $slug)->first();
        $related_subcategories = HospitalSubCategory::where('hospital_category_id', $subcategory->hospital_category_id)->get();

        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        $products = HospitalProduct::where('hospital_sub_category_id', $subcategory->id)->paginate(12);
        $service = HospitalBackService::where('slug', $slug)->first();
        // $service=Product::where('hospital_sub_category_id',$subcategory->id)->where('type','Service')->first();
        $product_count = count(HospitalProduct::where('hospital_sub_category_id', $subcategory->id)->get());
        $sitesetting = HospitalSiteSetting::find(1);
        if (isset($service)) {
            return view('Hospital.frontend.pages.home.singleService', compact('sitesetting', 'service',));
        }
        // else if(!isset($service))
        // {
        //     return view('frontend.pages.service.no-service',compact('sitesetting'));

        // }
        else {
            return view('Hospital.frontend.pages.shop.shopsubproduct', compact('subcategory_name', 'sitesetting', 'categories', 'subcategories', 'products', 'product_count', 'related_subcategories'));
        }
    }
    public function showProductbySubSubCategory($slug)
    {
        $subsubcategory_name = HospitalSubSubCategory::where('slug', $slug)->first();
        $subsubcategory = HospitalSubSubCategory::where('slug', $slug)->first();
        $related_subsubcategories = HospitalSubSubCategory::where('hospital_sub_category_id', $subsubcategory->hospital_sub_category_id)->get();
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        $products = HospitalProduct::where('hospital_sub_sub_category_id', $subsubcategory->id)->paginate(12);
        $product_count = count(HospitalProduct::where('hospital_sub_category_id', $subsubcategory->id)->get());
        $sitesetting = HospitalSiteSetting::find(1);
        return view('Hospital.frontend.pages.shop.showsubsubproducts', compact('sitesetting', 'products', 'categories', 'subcategories', 'subsubcategory_name', 'related_subsubcategories', 'product_count'));
    }
    public function showProductbySearchName(Request $request)
    {
        $id = $request->search_category;
        $name = $request->s;
        $category_name = HospitalCategory::where('id', $id)->first();
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        $sitesetting = HospitalSiteSetting::find(1);
        if ($id == 'all') {
            $products = HospitalProduct::where('title', 'LIKE', '%' . $name . '%')->where('status', '1')->paginate(8);
            $service = HospitalBackService::where('title', 'LIKE', '%' . $name . '%')->where('status', '1')->paginate(8);
        } else {
            $products = HospitalProduct::where('hospital_category_id', $id)->where('title', 'LIKE', '%' . $name . '%')->where('status', '1')->paginate(8);
            $service = HospitalBackService::where('hospital_category_id', $id)->where('title', 'LIKE', '%' . $name . '%')->where('status', '1')->paginate(8);
        }
        return view('Hospital.frontend.pages.shop.searchresult', compact('sitesetting', 'categories', 'subcategories', 'products', 'service', 'name', 'category_name'));
    }
    public function lowTohigh(Request $request)
    {
        $categories = HospitalCategory::where('status', '1')->get();
        $subcategories = HospitalSubCategory::where('status', '1')->get();
        if ($request->orderby == 'sortbyasc') {
            $products = HospitalProduct::Orderby('selling_price', 'ASC')->where('status', '1')->paginate(8);
        } else {
            $products = HospitalProduct::Orderby('selling_price', 'DESC')->where('status', '1')->paginate(8);
        }
        // $products=Arr::sort($productss);
        // print_r($products);
        // exit();
        $sitesetting = HospitalSiteSetting::find(1);

        return view('Hospital.frontend.pages.shop.shops', compact('sitesetting', 'categories', 'subcategories', 'products'));
    }
}
