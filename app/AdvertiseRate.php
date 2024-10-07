<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvertiseRate extends Model
{
    public function advertise_category(){
        return $this->belongsTo(AdvertiseCategory::class,'advertise_category_id');
    }
}
