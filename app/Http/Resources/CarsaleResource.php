<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarsaleResource extends JsonResource
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
            'car' => new CarResource($this->car),
            'couter' => $this->couter,
            'color_interior' => $this->color_interior,
            'color_exterior' => $this->color_exterior,
            'quantity' => $this->quantity,
            'for_sale' => $this->for_sale,
            'sold' => $this->sold,
        ];
    }
}
