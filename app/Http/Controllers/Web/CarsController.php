<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Models\Branche;
use App\Models\Booking;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Livewire\Component;


class CarsController extends Controller
{
    public function index()
    {
        if(request('book_now'))
        {
            $carsOrderByAsc  = Car::orderBy('price1' , 'ASC')->get()->toArray();
            $carsOrderByDesc = Car::orderBy('price1' , 'DESC')->get()->toArray();
            $categories      = Category::orderBy('orderBy_numper' , 'ASC')->get();
            $cars = Car::whereBetween('price1', [100, 1900])->paginate(7);
            dd($cars);
            $branches = Branche::all();
            $carRequest=request('book_now');
            $car=Car::where('id' , $carRequest)->first();
            return view('web.cars.index',['carsOrderByAsc'=> $carsOrderByAsc , 'carsOrderByDesc'=>$carsOrderByDesc,'car'=>$car , 'categories'=>$categories ,'cars'=>$cars , 'branches'=>$branches]);
        }
        else
        {
            $carsOrderByAsc  = Car::orderBy('price1' , 'ASC')->get()->toArray();
            $carsOrderByDesc = Car::orderBy('price1' , 'DESC')->get()->toArray();
            $categories      = Category::orderBy('orderBy_numper' , 'ASC')->get();
            $cars = Car::whereBetween('price1', [100, 1900])->paginate(7);
            dd($cars);

            $branches = Branche::all();
            return view('web.cars.index',['carsOrderByAsc'=> $carsOrderByAsc , 'carsOrderByDesc'=>$carsOrderByDesc , 'categories'=>$categories ,'cars'=>$cars , 'branches'=>$branches]);
        }

    }



    public function firstBookingStep(Request $request , Car $car)
    {
        $validated = $request->validate([
            'receivingBrancheInputs' => 'required',
            'deliveryBrancheInputs'  => 'required',
            'receivingDateInputs'    => 'required',
            'deliveryDateInputs'     => 'required',
        ]);
      if($validated){
          $booking = new Booking();
          $booking->car_id = $car->id ;
          $booking->receiving_branch = $request->receivingBrancheInputs ;
          $booking->delivery_branch = $request->deliveryBrancheInputs ;
          $booking->receiving_date = $request->receivingDateInputs ;
          $booking->delivery_date = $request->deliveryDateInputs ;
          $booking->status = 'pending';

          $booking->save();
          return redirect(route('secondBookingStep' , ['booking'=>$booking ]))->with('success', trans('تم اضافة العميل بنجاح'));
      }else{
          return "validation error";
      }
    }
    public function carsList(){
        $category_cars=[];
        foreach(request('categorys_id') as $car)
        {
            $cars=Car::where('category_id' , $car)->get();
            array_push($category_cars,$cars);
        }
        return $category_cars;
    }

}
