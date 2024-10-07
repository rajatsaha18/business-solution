<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function category(){
        return $this->belongsTo('App\Models\Category','category_id','id');
    }
    public function subcategory(){
        return $this->belongsTo('App\Models\SubCategory','sub_category_id','id');
    }
    public function color(){
        return $this->belongsTo('App\Models\Color','color_id','id');
    }
    public function brand(){
        return $this->belongsTo('App\Models\Brand','brand_id','id');
    }
    public function images(){
        return $this->hasMany('App\Models\Productimage');
    }
}
