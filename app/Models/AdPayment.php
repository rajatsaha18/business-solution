<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdPayment extends Model
{
    use HasFactory;
    public function adShowType(){
        return $this->belongsTo(BuySellAdPrice::class,'ad_show_type_id'); 
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function payment_method(){
        return $this->belongsTo(PaymentMethod::class,'payment_method_id');
    }
    public function ad(){
        return $this->belongsTo(BuySellProduct::class,'buysell_product_id');
    }
}
