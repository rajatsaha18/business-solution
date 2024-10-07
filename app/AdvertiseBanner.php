<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AdvertiseBanner extends Model
{
    use SoftDeletes;
    public function advertise_category(){
        return $this->belongsTo(AdvertiseCategory::class,'advertise_category_id');
    }
    public function advertise_placement(){
        return $this->belongsTo(AdvertiseRate::class,'advertise_placement_id');
    }
}
