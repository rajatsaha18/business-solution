<?php

// namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\Software\Admin;

use Toastr;
use App\Models\ClientReview;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SoftwareClientReview;

class SoftwareClientReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = SoftwareClientReview::orderBy('id','desc')->get();
        return view('Software.admin.client_review.index',compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Software.admin.client_review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $review = new SoftwareClientReview();
        $review->name = $request->name;
        $review->designation = $request->designation;
        $review->details = $request->details;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/client/image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $review->image = $image_url;
            }
        }
        $review->status = $request->status;
        if($review->save()){
            Toastr::success('Review has been Saved successfully :-)','Success');
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
        $data = SoftwareClientReview::findOrFail(decrypt($id));
        return view('Software.admin.client_review.edit',compact('data'));
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
        $review = SoftwareClientReview::find($id);
        $review->name = $request->name;
        $review->designation = $request->designation;
        $review->details = $request->details;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/client/image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $review->image = $image_url;
            }
        }
        $review->status = $request->status;
        if($review->update()){
            Toastr::success('Review has been Updated successfully :-)','Success');
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
        $review = SoftwareClientReview::find($id);
        if($review){
            $review->delete();
            Toastr::success('Client Review has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
}
