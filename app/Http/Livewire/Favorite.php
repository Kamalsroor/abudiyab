<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Favorite extends Component
{
    public function render()
    {
        $cars=Auth()->user()->userFavorite;
        return view('livewire.favorite',compact('cars'));
    }
    public function deleteFromFavorite($car_id){

    }
}
