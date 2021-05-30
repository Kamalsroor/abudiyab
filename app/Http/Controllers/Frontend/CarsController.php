<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;
use App\Models\Car;



class CarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.main2', compact('sliders','miniSliders','showFirstCatInCatgories','showCategories','showCategoriesCars','allCategories','firstcar','partners'));
    }

    /**
     * Display a car of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        $relatedcars=Car::inRandomOrder()->limit(3)->get();
        return view('frontend.car-details', compact('car','relatedcars'));
    }

}
