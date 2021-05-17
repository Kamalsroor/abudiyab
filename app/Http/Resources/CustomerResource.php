<?php

namespace App\Http\Resources;

use App\Models\Custmerrequest;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \App\Models\Customer */
class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request
     * @throws \Laracasts\Presenter\Exceptions\PresenterException
     * @return array
     */
    public function toArray($request)
    {
        if ($request->example_excel) {
            return [
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
            ];
        }

        $is_confirmed = true ;
        $newRequest = null;
        $Custmerrequest = Custmerrequest::where('user_id',$this->id)->orderBy('created_at', 'DESC')->first();
        if($Custmerrequest){
            $newRequest = $Custmerrequest;
           if($Custmerrequest->is_confirmed != "confirmed"){
                $is_confirmed = false ;
                $Custmerrequest = Custmerrequest::where('user_id',$this->id)->where('is_confirmed' , 'confirmed')->orderBy('created_at', 'DESC')->first();
           }
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'type' => $this->type,
            'status' => $is_confirmed,
            'custmer_data' => new CustmerrequestResource($Custmerrequest),
            'new_custmer_request' => new CustmerrequestResource($newRequest),
            'points' => 1,
            'favorite' => CarResource::collection($this->userFavorite),
            'membership' => new MembershipResource($this->membership),
            'avatar' => $this->getAvatar(),
            'localed_type' => $this->present()->type,
            'created_at' => $this->created_at ? $this->created_at->toDateTimeString() : null,
            'created_at_formatted' =>  $this->created_at ? $this->created_at->diffForHumans() : null,
        ];
    }
}
