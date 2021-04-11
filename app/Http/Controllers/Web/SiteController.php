<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Car;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $showCategories = Category::orderBy('id', 'ASC')->take(5)->get();
        $allCategories  = Category::all();
        $showCategoriesCars = Car::where('category_id' , $showCategories[0]['id'])->get();
        
        $firstcar=Car::where('category_id' , $showCategories[0]['id'])->first();
        return view('web.index',['showCategories'=>$showCategories , 'showCategoriesCars'=>$showCategoriesCars ,'allCategories'=>$allCategories,'firstCar'=>$firstcar]);
    }

    public function getCarsCategories()
    {
        $category_cars=Car::where('category_id' , request('category_id'))->get();
        $showCategoriesCars = Car::where('category_id' , request('category_id'))->first();
        $image=$showCategoriesCars->getFirstMediaUrl();
        $i=0;
        foreach($category_cars as $car)
        {
            $images[$i][]=$car->getFirstMediaUrl();
            $i++;
        }
        return [$category_cars,$showCategoriesCars,$image,$images];
    }

    public function getCar()
    {
        $car=Car::where('id' , request('car_id'))->first();
        return $car;
    }

    public function getBranches(){
        // $region=request('region_id');

    //    return view('web.branches.branches');
    }
    public function getPartners(){
        return view('web.php');
    }

}
