<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {

        if ($request->example_excel) {
            return [
                'name' => $this->name,
            ];
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'from' => $this->from,
            'to' => $this->to,
            'limit' => $this->limit,
            'is_work' => $this->is_work,
            'discount_value' => $this->discount_value,
            'branch_value' => $this->branch_value,
            'branch_type' => $this->branch_type,
            'consumer' => $this->consumer,
            'offarable_id' => new CarResource($this->cars[0]),
            // 'offarable_id' => ,
            // 'car_name' => $this->cars->name,
            // 'car_model' => $this->cars->model,
            'image' => $this->getFirstMediaUrl(),
        ];
    }
}
