<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class BdProduct extends Model
{
    public function category(){
        return $this->belongsTo(BdProductCategory::class,'product_cat_id');
    }
    public function sub_category(){
        return $this->belongsTo(BdProductSubCategory::class,'product_sub_cat_id');
    }
    public function brands(){
        return $this->belongsTo(BdBrand::class,'bd_brand_id');
    }
    public function product_type(){
        return $this->belongsTo(ProductType::class,'product_type_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'bd_user_id');
    }

}
