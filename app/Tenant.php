<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'occupation', 'national_id', 'apartment_id', 'unit_id'
    ];
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function apartment()
    {
        return $this->belongsTo(Apartment::class);
    }
    public function payments()
    {
        $this->hasMany(Payment::class);
    }

    public function leases()
    {
        $this->hasMany(Lease::class);
    }
}
