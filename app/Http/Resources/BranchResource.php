<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Branch;

class BranchResource extends JsonResource
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
            'region' => $this->region->name,
            'region_id' => $this->code,
            'address' =>$this->address,
            'lat' => 30.0541072,
            'long' => 30.4367437,
            'phone' =>$this->tele_number,
            'work_time' =>$this->work_time,
        ];
    }
}
