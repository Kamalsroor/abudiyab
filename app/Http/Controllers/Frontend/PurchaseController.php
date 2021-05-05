<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Purchaserequest;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    //
    public function create(Request $request)
    {
        Purchaserequest::create([
            'user_id' => $request->user_id,
            'car_id' => $request->car_id,
            'price' => $request->price,
            'quantity' => $request->quantity
        ]);
        return response()->json(['purchase'=> 'done']);
    }
}
