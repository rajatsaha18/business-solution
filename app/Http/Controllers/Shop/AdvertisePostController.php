<?php

namespace App\Http\Controllers\Shop;

use Toastr;
use App\Area;
use App\Thana;
use App\District;
use App\Division;
use App\BdCategory;
use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\AdvertisePost;
use App\BdSubCategory;
use App\Models\Country;
use App\Models\AddCompany;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdvertisePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $posts = AdvertisePost::orderBy('id','desc')->get();
        $sort_search =null;
        $posts = AdvertisePost::orderBy('created_at', 'desc');
        if ($request->has('search')){
            $sort_search = $request->search;
            $posts = $posts->where('business_name', 'like', '%'.$sort_search.'%');
        }
        $posts = $posts->paginate(12);
        return view('admin.advertise.post.index',compact('posts','sort_search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = BdCategory::get();
        $sub_categories = BdSubCategory::get();
        $districts = District::orderBy('name')->get();
        $thanas=Thana::orderBy('name')->get();
        $area = Area::orderBy('name')->get();
        $countries=Country::all();
        // $states=State::all();
        // $cities=City::all();
        return view('admin.advertise.post.create',compact('thanas','categories','sub_categories','districts','area','countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
      
          
            'business_name'=>'required|unique:advertise_posts,business_name',
            
        ]
    );
               $posts = new AdvertisePost();
                $posts->category_id = $request->category_id;
                $posts->subcategory_id = $request->subcategory_id;
                $posts->business_name = $request->business_name;
                $posts->slug = $request->slug;
                $posts->owner_name = $request->owner_name;
                $posts->address = $request->address;
                $posts->phone = $request->phone;
                $posts->email = $request->email;
                $posts->address = $request->address;
                $posts->website = $request->website;
                $posts->facebook = $request->facebook;
                $posts->google_location = $request->google_location;
                $posts->country_id = $request->country_id;
                $posts->state_id = $request->state_id;
                $posts->city_id = $request->city_id;
                $posts->keywords = $request->keywords;
                $posts->status = $request->status;
                $posts->meta_description = $request->meta_description;
                $posts->meta_title = $request->meta_title;
                $posts->about=$request->about;
                $posts->founded_date=$request->founded_date;
                $posts->operating_status=$request->operating_status;
                $posts->total_employee=$request->total_employee;
                $posts->investments=$request->investments;
                $posts->total_funding_amount=$request->total_funding_amount;
                $posts->funding_details=$request->funding_details;

                if($posts->save()){
                    $user=new User();
                    $user->name=$request->owner_name;
                    $user->business_name=$request->business_name;
                    $user->phone=$request->phone;
                    $user->address=$request->address;
                    $user->email=$request->email;
                    $user->advertise_post_id=$posts->id;
                    $user->email_verified_at=date('Y-m-d H:m:s');
                    $user->role_id=2;
                    $user->password=Hash::make(123456);
                    $user->save();

                    $data=AdvertisePost::where('id',$posts->id)->first();
                    $data->user_id=$user->id;
                    $data->save();

                    Toastr::success('Advertise has been inserted successfully :-)','Success');
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
        $data = AdvertisePost::findOrFail(decrypt($id));
        $categories = BdCategory::get();
        // $company=AddCompany::where()
        $sub_categories = BdSubCategory::get();
        $districts = District::orderBy('name')->get();
        $thanas=Thana::orderBy('name')->get();
        $area = Area::orderBy('name')->get();
        $countries=Country::all();
        // $states=State::all();
        // $cities=City::all();
        return view('admin.advertise.post.edit',compact('thanas','data','categories','sub_categories','districts','area','countries'));
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

             $dis = District::find($request->district_id);
            $posts = AdvertisePost::find($id);
        //     $this->validate($request, [
      
          
        //         'business_name'=>'required|unique:advertise_posts,business_name,'.$id,
                
        //     ]
        // );
       
            $posts->category_id = $request->category_id;
            $posts->subcategory_id = $request->subcategory_id;
            $posts->business_name = $request->business_name;
            $posts->slug = $request->slug;
            $posts->owner_name = $request->owner_name;
            $posts->address = $request->address;
            $posts->phone = $request->phone;
            $posts->email = $request->email;
            $posts->address = $request->address;
            $posts->website = $request->website;
            $posts->facebook = $request->facebook;
            $posts->google_location = $request->google_location;
           
            $posts->state_id = $request->state_id;
            $posts->city_id = $request->city_id;
          
            $posts->keywords = $request->keywords;
            $posts->status = $request->status;
            $posts->meta_description = $request->meta_description;
            $posts->meta_title = $request->meta_title;
            $posts->about=$request->about;
            $posts->founded_date=$request->founded_date;
            $posts->operating_status=$request->operating_status;
            $posts->total_employee=$request->total_employee;
            $posts->investments=$request->investments;
            $posts->total_funding_amount=$request->total_funding_amount;
            $posts->funding_details=$request->funding_details;
            if($posts->save()){
                Toastr::success('Advertise has been Update successfully :-)','Success');
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
        $advertise_post = AdvertisePost::findOrFail($id);
        $advertise_post->delete();
        Toastr::success('Advertise has been Deleted successfully :-)','Success');
            return redirect()->back();
    }
    public function get_sub_category(Request $request){
        $sub_categories = BdSubCategory::where('category_id',$request->category_id)->get();
        return view('bdshop.subCategory.get_ajax',compact('sub_categories'));
    }
}
