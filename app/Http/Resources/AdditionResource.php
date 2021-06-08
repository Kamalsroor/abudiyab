<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AdditionResource extends JsonResource
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
            'id' => $this['id'],
            'title' => $this['name'],
            'sub_title' => $this['mini_des'],
            'price' => $this['price'],
            'img' => $this['img'],
            'daily' => $this['type'] == 'daily' ? true : false,
        ];
    }
}
