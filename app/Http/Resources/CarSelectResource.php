<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Spatie\MediaLibrary\HasMedia;


class CarSelectResource extends JsonResource
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
            'text' => $this->name . ' - ' . $this->model,
            'image' => $this->getImage(),
        ];
    }

    /**
     * @return string
     */
    public function getImage()
    {
        if ($this->resource instanceof HasMedia) {
            return $this->getFirstMediaUrl();
        }
    }
}
