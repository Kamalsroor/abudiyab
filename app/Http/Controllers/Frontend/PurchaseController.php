<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Purchaserequest;
use App\Models\User;
use Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PurchaseController extends Controller
{
    //
    public function create(Request $request)
    {
        $user=User::where('phone' , $request->phone)->get();
        if(!count($user))
        {
            $user=User::create([
                'phone' => $request->phone,
                'name' => $request->name
            ]);
        }else{
            $user=$user->first();
        }
        Purchaserequest::create([
            'user_id' => $user->id,
            'car_id' => $request->car_id,
            'price' => $request->price,
            'quantity' => $request->quantity
        ]);
        return response()->json(['purchase'=> 'done']);
    }

    public function test(Request $request , Order $order, $session  )
    {



        // dd($order);
        // dd($_COOKIE  ,request()->cookie('order_data') , $request->cookie('order_data'));
        // dd(session()->get('order_data') , $request-> , Cookie::get('orderData') , $request->all() , Cookie::get());
    }
}
