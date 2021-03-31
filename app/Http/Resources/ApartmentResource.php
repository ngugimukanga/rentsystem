<?php

namespace App\Http\Resources;

use App\Landlord;
use Illuminate\Http\Resources\Json\JsonResource;

class ApartmentResource extends JsonResource
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
            'name'=>$this->name,
            'type'=>$this->type,
            'location'=>$this->address,
            'more details'=> $this->description,
            'link'=> [
                'Units' => route('apartment.units', $this->id)
                    //UnitResource::collection($this->units)
            ]

            //'Tenants'=> TenantResource::collection($this->tenants)

        ];
    }
}
