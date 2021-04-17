<?php

namespace App\Http\Livewire;

use App\Models\addToFavorite;
use Livewire\Component;
use Session;
class Favorite extends Component
{
    public $isLogin=false;
    protected $listeners = [
        'checkLogin' => 'checkLogin'
    ];
    public function render()
    {
        if(Auth()->check())
        {
            $cars=Auth()->user()->userFavorite;
            $this->isLogin=true;
            session()->forget('log_in');
            return view('livewire.favorite',compact('cars'));
        }
        return view('livewire.favorite');
    }
    public function deleteFromFavorite($car_id){
        $deletedCar = addToFavorite::where('car_id',$car_id)->where('user_id',Auth()->id())->first();

        $deletedCar->delete();
    }
    public function checkLogin(){
        $current_url=url()->previous();
        session()->push('redircitURl', $current_url);
        session(['log_in' => true]);
        $this->dispatchBrowserEvent('notLogin');
    }
}


