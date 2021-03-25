<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
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
            'Apartment'=> $this->unit_id, //consult whether it can be passed from apartments table
            'House Number'=> $this->house_number,
            'Tenant'=>$this->tenant_id,
            'Month'=> $this->month,
            'Rent Payable' => $this->unit_id,
            'Paid Amount' => $this->paid_amount,
            'Balance'=> $this->balance
        ];
    }
}
