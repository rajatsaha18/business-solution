<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvestorGetPayment extends Model
{
    use HasFactory;
    public function investor(){
        return $this->belongsTo(User::class);
    }
    public function company(){
        return $this->belongsTo(InvestmentCompany::class);
    }
}
