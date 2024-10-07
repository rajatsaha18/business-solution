<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BdSubCategory extends Model
{
    public function category(){
        return $this->belongsTo(BdCategory::class);
    }
}
