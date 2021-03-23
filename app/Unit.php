<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{

    public function tenant(){
        return $this->hasOne(Tenant::class);
    }

    public function apartment(){
        return $this->belongsTo(Apartment::class);
    }
}
