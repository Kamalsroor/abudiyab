<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MembershipResource extends JsonResource
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
            'image' => $this->getFirstMediaUrl(),
            'rental_discount' => $this->rental_discount,
            'ratio_points' => $this->ratio_points,
            'extra_hours' => $this->extra_hours,
            'allowed_Kilos' => $this->allowed_Kilos,
            'delivery_discount_regions' => $this->delivery_discount_regions,
        ];
    }
}
