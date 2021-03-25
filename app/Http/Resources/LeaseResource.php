<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeaseResource extends JsonResource
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
            'Apartment'=>$this->unit_id,
            'House Number'=> $this->unit_id,
            'Tenant'=>$this->tenant_id,
            'Start Date'=> $this->from,
            'Termination Date'=> $this->to,
        ];
    }
}
