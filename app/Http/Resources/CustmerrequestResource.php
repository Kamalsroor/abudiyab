<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CustmerrequestResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'id_number'=> $this->id_number,
            'id_expiry_date'=> $this->id_expiry_date,
            'driver_id_expiry_date'=> $this->driver_id_expiry_date,
            'date_of_birth'=> $this->date_of_birth,
            'nationality'=> $this->nationality,
            'gender'=> $this->gender,
            'address'=> $this->address,
            'post_box'=> $this->post_box,
            'driver_number'=> $this->driver_number,
            'is_confirmed'=> $this->is_confirmed,
            'description'=> $this->description,
        ];
    }
}
