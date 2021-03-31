<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TenantResource extends JsonResource
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
            'Name'=> $this->name,
            'Email'=> $this->email,
            'Phone Number'=> $this->phone,

            'House Number'=> $this->unit_id,
            'ID' => $this->national_id,
            'Occupation'=> $this->occupation
        ];
    }
}
