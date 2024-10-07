<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BdAdvertiseEmail extends Model
{
    public function advertise(){
        return $this->belongsTo(AdvertisePost::class,'advertise_id');
    }
}
