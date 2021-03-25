<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LandlordResource extends JsonResource
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
            'name'=> $this->name,
            'email'=> $this->email,
            'password'=> $this->password,
            'phone'=> $this->phone,
            'Bank Account'=> $this->account_number,
//            'href'=> [
//                'apartments'=>route('apartments.index', $this->id)
//            ]
        ];
    }
}
