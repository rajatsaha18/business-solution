<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;
    public function subcategories(){
        return $this->belongsTo('App\Models\SubCategory','subcategory_id','id');
    }
    public function product(){
        return $this->hasMany('App\Models\Product');
    }
}
