<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Car;
use App\Models\Category;

class CarDetails extends Component
{
    protected $listeners=
    [
        'change:cars' => 'getCarsById',
        'change:carsByCatgory' => 'getCarsByCatgory',
    ];
    public $car;

    public function mount()
    {
        $showCategories = Category::orderBy('id', 'ASC')->take(4)->get();
        $this->car = Car::where('category_id' , $showCategories->first()->id)->first();
    }


    public function render()
    {
  
        $this->dispatchBrowserEvent('CarDetailSlick' ,['car' => $this->car] );
        return view('livewire.frontend.car-details');

    }
    public function getCarsById($id){
        $this->car = Car::find($id);
    }
    public function getCarsByCatgory($id){
        $this->car = Car::where('category_id',$id)->first();
    }
}
