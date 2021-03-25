<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'occupation', 'national_id'
    ];
    public function units()
    {
        return $this->hasMany(Unit::class);
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
