<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Car;
use App\Models\Category;
use Cache;
use Carbon\Carbon;

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
        // $showCategories = Category::orderBy('id', 'ASC')->take(4)->get();
        $expire = Carbon::now()->addMinutes(10);

        $allCategories = Cache::remember('allCategories', $expire, function() {
            return Category::orderBy('orderBy_numper')->get();
        });

        $this->car = Cache::remember('CarDetailsCars', $expire, function() use($allCategories) {
            return Car::where('category_id' , $allCategories->first()->id)->first();
        });
        // $this->car = Car::where('category_id' , $allCategories->first()->id)->first();



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
    public function checkbooking(){
        dd('ssssssss');
    }
}
