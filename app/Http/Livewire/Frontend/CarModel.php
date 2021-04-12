<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Car;
use App\Models\Category;

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
  
        return view('livewire.frontend.car-model');

    }


    public function hydrate()
    {
        $this->dispatchBrowserEvent('CarModelSlick');
    }

    
    public function getCarsByCategory($id){
        $this->dispatchBrowserEvent('removeSlideCarModel');

        $this->cars = Car::where('category_id',$id)->get();
    }
}
