<?php

namespace App\Http\Livewire;

use App\Models\Car;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CarsInStock as CarInStocks;
class CarsInStock extends Component
{



    use WithPagination;
    public  $name, $body, $car_id , $search;
    public $carStock ;
    public $branch ;
    public $updateMode = false;
    protected $queryString = ['search'];

    protected $rules = [
        'carStock.*.count' => 'required|numeric|min:0',
    ];

    public function render()
    {
        $cars = Car::all();
        $CarInStocks = CarInStocks::where('branch_id' , $this->branch )->get();
        foreach ( $cars as $car) {
            $car->count = $CarInStocks->where('car_id' , $car->id)->first() ? $CarInStocks->where('car_id' , $car->id)->first()->count : 0;
            $this->carStock[$car->id]['count'] = $car->count;
        }

        return view('livewire.cars-in-stock',[
            'cars' => $cars
        ]);
    }


       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->count = '';
        $this->body = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {

        foreach ($this->carStock as $key => $value) {
            $stock = CarInStocks::updateOrCreate([
                'car_id'   => $key,
                'branch_id'   => $this->branch,
            ],[
                'count'     => $value['count'],
            ]);
        }

        session()->flash('message', 'Car Created Successfully.');

        $this->resetInputFields();
        // $this->resetPage();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $this->car_id = $id;
        $this->name = $car->name;
        $this->body = $car->body;

        $this->updateMode = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        // $this->authorize('update', $this->car);


        $validatedDate = $this->validate([
            'name' => 'required',
            'body' => 'required',
        ]);

        $car = Car::find($this->car_id);
        $car->update([
            'name' => $this->name,
            'body' => $this->body,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Car Updated Successfully.');
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Car::find($id)->delete();
        session()->flash('message', 'Car Deleted Successfully.');
    }


}
