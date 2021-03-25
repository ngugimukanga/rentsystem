<?php

namespace App\Http\Resources;

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
            'House Number'=> $this->house_number,
            'Apartment'=>$this->apartment_id,
            'Rent Payable'=> $this->rent,
            'Status'=> $this->status,
            'Tenant' => $this->tenant_id
        ];
    }
}
