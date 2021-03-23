<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    public function landlords(){
        return $this->belongsTo(Landlord::class);
    }
    public function unit(){
        $this->belongsTo(Unit::class);
    }
}
