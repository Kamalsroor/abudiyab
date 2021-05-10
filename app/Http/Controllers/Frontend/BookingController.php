<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;
use App\Models\Car;
use App\Models\Order;
use App\Payment\MasterCardPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment(Request $request)
    {
        // dd($request->all() , Crypt::decrypt($request->order_id) , Crypt::decrypt($request->user_id) , Crypt::decrypt($request->order_data) , Crypt::decrypt($request->data));
        // for ($i=0; $i < 1000 ; $i++) {
        //     $rount = decimalRand(1,10,0.1);

        //     if ($rount <= 0.5) {
        //         echo(1);
        //     }
        //     else if ($rount <= 1) {
        //         echo(2);
        //     }
        //     else if ($rount <= 100) {
        //         echo(3);
        //     }
        //     // echo('<br>');

        // }



        $order = Order::find(Crypt::decrypt($request->order_id));
        $order_data = Crypt::decrypt($request->order_data);

        $merchantID = $order_data['merchantID'];
        $merchantPassword = $order_data['merchantPassword'];
        $orderID = $order->id;


        if ($order) {
            if ($order->user_id != Crypt::decrypt($request->user_id)) {
                abort(404);
            }
            $price = 0;

            // dd($order, $order->car->price1 , $order->days ,$order->features_added);
            $orderID =  $order->id;
            $carPrice = $order->car->price1 * $order->days;
            $featuresPrice = 0;
            if (is_array($order->features_added)) {
                foreach ($order->features_added as $key => $value) {
                    switch ($key) {
                        case "shield_price":
                            $featuresPrice += $value *  $order->days;
                            break;
                        case "insurance_price":
                            $featuresPrice += $value *  $order->days;
                            break;
                        case "open_kilometers_price":
                            $featuresPrice += $value ;
                            break;
                        case "navigation_price":
                            $featuresPrice += $value ;
                            break;
                        case "home_delivery_price":
                            $featuresPrice += $value ;
                            break;
                        case "intercity_price":
                            $featuresPrice += $value *  $order->days;
                            break;
                        case "baby_seat_price":
                            $featuresPrice += $value ;
                            break;
                    }
                }
            }

            $price = $featuresPrice + $carPrice;

        }


        $data = Crypt::decrypt($request->data);

        $data['order']['amount'] = $price;

        $order->price = $price;
        $order->save();

        $response = Http::contentType("application/json")
        ->withBasicAuth('merchant.'.$merchantID, $merchantPassword)
        ->withHeaders([
            'Accept' => 'application/json'
        ])->put(config('BankPayment.ApiUrlTest'). '/merchant/'.$merchantID.'/3DSecureId/3dsID_'.$orderID, $data)->json();

        $htmlBodyContent = $response['3DSecure']['authenticationRedirect']['simple']['htmlBodyContent'];

        return view('frontend.payment',compact('htmlBodyContent'));
    }



}
