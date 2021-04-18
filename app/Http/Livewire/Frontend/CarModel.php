<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Car;
use App\Models\Category;
use App\Http\Resources\CarResource;

class CarModel extends Component
{
    protected $listeners=['change:categories' => 'getCarsByCategory'];
    public $cars;

    public function mount()
    {

        $showCategories = Category::orderBy('id', 'ASC')->take(4)->get();
        $this->cars = Car::where('category_id' , $showCategories->first()->id)->get();

    }


    public function render()
    {


        // return $this->cars
        $this->dispatchBrowserEvent('CarModelSlick' ,CarResource::collection($this->cars) );
        return view('livewire.frontend.car-model');
        // return null;
    }


    // public function hydrate()
    // {
    //     $this->dispatchBrowserEvent('CarModelSlick');
    // }


    public function getCarsByCategory($id){
        // $this->dispatchBrowserEvent('removeSlideCarModel');

        $this->cars = Car::where('category_id',$id)->get();
    }

}
