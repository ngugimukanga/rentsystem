<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{

    protected $fillable = [
        'name', 'landlord_id','address', 'type','description'
    ];
    public function landlord(){
        return $this->belongsTo(Landlord::class);
    }
    public function units()
    {
        return $this->hasMany(Unit::class);
    }

}
