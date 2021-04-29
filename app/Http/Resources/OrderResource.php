<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'car' => new CarResource($this->whenLoaded('car')),
            'reciving_date' => $this->reciving_date->format('Y-m-d h:i A'),
            'delivery_date' => $this->delivery_date->format('Y-m-d h:i A'),
            'payment_type' => $this->payment_type,
            'price' => $this->price,
            'status' => trans('orders.status.'.$this->status),
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
