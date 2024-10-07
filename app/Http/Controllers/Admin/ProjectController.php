<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectImage;
use App\Models\Tag;
use Illuminate\Http\Request;
use Toastr;
use Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id','desc')->get();
        return view('admin.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::get();
        $categories = ProjectCategory::where('status',1)->get();
        return view('admin.project.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = new Project();
        $project->name = $request->name;
        $project->project_category_id = $request->project_category_id;
        $project->client_name = $request->client_name;
        $project->date = $request->date;
        $project->tags = json_encode($request->tags);
        $project->website = $request->website;
        $project->status = $request->status;
        $project->client_address = $request->client_address;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->meta_title = $request->meta_title;
        $project->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->name));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $project->slug = $slug;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/project/image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $project->image = $image_url;
            }
        }
        $project->save();
        if($request->tags){
            foreach($request->tags as $value){
                $tag =new Tag();
                $tag->name = $value;
                $tag->save();
            }
        }


        $multiImage = $request->file('project_image');
        if($multiImage){
            foreach($multiImage as $img){

                $pro_img = new ProjectImage();
                $pro_img->project_id = $project->id;
                $image_name= $img->getClientOriginalName();
                $image_name = preg_replace('/\s+/', '-', $image_name);
                $image_full_name = $image_name;
                $upload_path = 'uploads/project/image/';
                $image_url = $upload_path.$image_full_name;
                $success = $img->move($upload_path, $image_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $pro_img->image = $image_url;
                }
                $pro_img->save();
            }
        }


            Toastr::success('Project has been Saved successfully :-)','Success');
            return redirect()->back();
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
        $tags = Tag::get();
        $data = Project::findOrFail(decrypt($id));
        $categories = ProjectCategory::where('status',1)->get();
        $project_img = ProjectImage::where('project_id',$data->id)->get();
        return view('admin.project.edit',compact('data','categories','project_img','tags'));
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
        $project = Project::find($id);
        $project->name = $request->name;
        $project->project_category_id = $request->project_category_id;
        $project->client_name = $request->client_name;
        $project->date = $request->date;
        $project->tags = json_encode($request->tags);
        $project->website = $request->website;
        $project->status = $request->status;
        $project->client_address = $request->client_address;
        $project->description = $request->description;
        $project->status = $request->status;
        $project->meta_title = $request->meta_title;
        $project->meta_description = $request->meta_description;
        $slug = Str::slug($request->name, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->name));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
        }
        $project->slug = $slug;
        $image = $request->file('image');
        if($image)
        {
            $image_name= $image->getClientOriginalName();
            $image_name = preg_replace('/\s+/', '-', $image_name);
            $image_full_name = $image_name;
            $upload_path = 'uploads/project/image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            // $img = Image::make($image_url)->resize(400, 200)->save();
            if($success)
            {
                $project->image = $image_url;
            }
        }
        $project->save();
        if($request->tags){
            foreach($request->tags as $value){
                $tag = Tag::where('name',$value)->first();
                if(empty($tag)){
                    $tag =new Tag();
                    $tag->name = $value;
                    $tag->save();
                }
            }
        }

        $multiImage = $request->file('project_image');
        if($multiImage){
            foreach($multiImage as $img){

                $pro_img = new ProjectImage();
                $pro_img->project_id = $project->id;
                $image_name= $img->getClientOriginalName();
                $image_name = preg_replace('/\s+/', '-', $image_name);
                $image_full_name = $image_name;
                $upload_path = 'uploads/project/image/';
                $image_url = $upload_path.$image_full_name;
                $success = $img->move($upload_path, $image_full_name);
                // $img = Image::make($image_url)->resize(400, 200)->save();
                if($success)
                {
                    $pro_img->image = $image_url;
                }
                $pro_img->save();
            }
        }
        Toastr::success('Project has been Updated successfully :-)','Success');
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $projectImg = ProjectImage::where('project_id',$id)->delete();
        if($project){
            $project->delete();
            Toastr::success('Project has been Deleted successfully :-)','Success');
            return redirect()->back();
        }
    }
    public function projectImgDelete($id){
        $projectImg = ProjectImage::where('id',$id)->delete();
        Toastr::success('Project Image has been Deleted successfully :-)','Error');
        return redirect()->back();
    }
}
