<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
      'tenant_id','unit_id','month','paid_amount'
    ];
    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }
    public function unit(){
        $this->belongsTo(Unit::class);
    }
}
