<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = [
        'apartment_id','house_number','rent','status'
    ];

    public function tenant(){
        return $this->hasOne(Tenant::class);
    }

    public function apartment(){
        return $this->belongsTo(Apartment::class);
    }
    public function leases()
    {
        $this->hasMany(Lease::class);
    }
}
