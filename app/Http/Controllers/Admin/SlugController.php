<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SlugController extends Controller
{
    public function create(Request $request){
        if($request->ajax()){
            $delimiter = '-';
            $str = $request->str;
            $slug = Str::slug($request->str, '-');
            if($slug == ''){
                $slug =  preg_replace('/\s+/u', '-', trim($request->str));
                $slug = preg_replace('/[&]/', '-and-', $slug);
                $slug = preg_replace('/[;]/', '-and-', $slug);
            }
            return response($slug,200);
        }
    }
}
