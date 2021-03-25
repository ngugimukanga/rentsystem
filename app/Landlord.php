<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    protected $fillable = [
      'name', 'email', 'password', 'phone', 'account_number'
    ];

    public function apartments(){
        return $this->hasMany(Apartment::class);
    }
}
