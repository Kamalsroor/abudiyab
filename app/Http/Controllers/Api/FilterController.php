<?php

namespace App\Http\Controllers\Api;

use App\Models\Feedback;
use App\Events\FeedbackSent;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class FilterController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the feedback.
     *
     * @param \Illuminate\Http\Request $request
     * @throws \Illuminate\Validation\ValidationException
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $car = Car::where(function($q) use($request){
            if ($request->has('category_id')) {
                $q->where('category_id',$request->category_id);
            }
            if ($request->has('manufactory_id')) {
                $q->where('manufactory_id' , $request->manufactory_id);
            }
        })->get();
        $max = $car->max('price1') ?? 0;
        $min = $car->min('price1') ?? 0;

        return response()->json([
            'max' => $max,
            'min' => $min,
        ]);
    }
}
