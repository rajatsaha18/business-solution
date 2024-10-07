<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    public function division(){
        return $this->belongsTo(Division::class,'division_id');
    }
    public function district(){
        return $this->belongsTo(District::class,'district_id');
    }
}
