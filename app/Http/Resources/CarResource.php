<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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
        if ($request->id) {
            return [
                'id' => $this->id,
                'name' => $this->name . " - " . $this->model ,
                'model' => $this->model,
                'category' => $this->manufactory ? $this->category->name : "",
                'manufactory' => $this->manufactory ? $this->manufactory->name : "",
                'price_before' => $this->price2,
                'price_after' => $this->price1,
                'discount' => $this->desc,
                'doors' => $this->door,
                'luggage' => $this->luggage,
                'features' => trans('cars.features.' . $this->features),
                'is_baby_seat' => $this->is_baby_seat,
                'baby_seat_price' => $this->baby_seat_price,
                'is_shield'=> $this->is_shield,
                'shield_price' => $this->shield_price,
                'is_insurance'=> $this->is_insurance,
                'insurance_price' => $this->insurance_price,
                'is_open_kilometers'=> $this->is_open_kilometers,
                'open_kilometers_price' => $this->open_kilometers_price,
                'is_navigation'=> $this->is_navigation,
                'navigation_price' => $this->navigation_price,
                'is_home_delivery'=> $this->is_home_delivery,
                'home_delivery_price' => $this->home_delivery_price,
                'is_intercity'=> $this->is_intercity,
                'intercity_price' => $this->intercity_price,
                'is_favorite' => false,
                'description' => "",
            ];
        }


        return [
            'id' => $this->id,
            'name' => $this->name . " - " . $this->model ,
            'model' => $this->model,
            'category' => $this->manufactory ? $this->category->name : "",
            'manufactory' => $this->manufactory ? $this->manufactory->name : "",
            'price_before' => $this->price2,
            'price_after' => $this->price1,
            'discount' => $this->desc,
            'doors' => $this->door,
            'luggage' => $this->luggage,
            'features' => trans('cars.features.' . $this->features),
            'is_favorite' => $this->is_favorite,
            'description' => "",
            'photo' => $this->getPhoto(),
            'photos' => $this->getPhotos(),
        ];

    }
}
