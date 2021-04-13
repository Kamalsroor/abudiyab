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
            'code' => Branch::Region[$this->code],
            'code_id' =>$this->code,
            'address' =>$this->address,
            'p_coud' =>$this->p_coud,
            'tele_number' =>$this->tele_number,
            'work_time' =>$this->work_time,
        ];
    }
}
