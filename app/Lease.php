<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    protected $fillable= [
        'tenant_id','from','unit_id'
    ];
    public function unit()
    {
        $this->belongsTo(Unit::class);
    }

    public function tenant()
    {
        $this->belongsTo(Tenant::class);
    }
}
