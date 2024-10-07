<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvertisePost extends Model
{
    use SoftDeletes;
    public function category(){
        return $this->belongsTo(BdCategory::class,'category_id');
    }
}
