<?php

namespace App\Http\Resources;

use App\Http\Resources\TenantResource;
use Illuminate\Http\Resources\Json\JsonResource;

class UnitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'House Number'=> $this->house_number,
            'Apartment'=>$this->apartment_id,
            'Rent Payable'=> $this->rent,
            'Status'=> $this->status,
            'link'=> [
                'Tenant'=> route('unit.tenant', $this->id)
            ]

        ];
    }
}
