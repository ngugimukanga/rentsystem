<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    public function apartments(){
        return $this->hasMany(Apartment::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
