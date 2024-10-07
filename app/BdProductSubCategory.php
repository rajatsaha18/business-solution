<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BdProductSubCategory extends Model
{
    use SoftDeletes;
    public function category(){
        return $this->belongsTo(BdProductCategory::class,'category_id');
    }
}
