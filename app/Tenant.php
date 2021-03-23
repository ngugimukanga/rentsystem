<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    public function units(){
        return $this->hasMany(Unit::class);
    }
    public function payments(){
        $this->hasMany(Payment::class);
    }
}
