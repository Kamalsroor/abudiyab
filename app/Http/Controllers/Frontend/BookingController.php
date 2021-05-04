<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;
use App\Models\Car;
use App\Models\Order;
use App\Payment\MasterCardPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function payment(Request $request)
    {
        // dd($request->all() , Crypt::decrypt($request->order_id) , Crypt::decrypt($request->user_id));

        $order = Order::find(Crypt::decrypt($request->order_id));

        if ($order) {
            if ($order->user_id != Crypt::decrypt($request->user_id)) {
                abort(404);
            }
            $price = 0;

            // dd($order, $order->car->price1 , $order->days ,$order->features_added);
            $orderID =  $order->id;
            $carPrice = $order->car->price1 * $order->days;
            $featuresPrice = 0;

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

            $price = $featuresPrice + $carPrice;
            // $merchantID = "3000000721";
            // $merchantPassword = "8c9e1db3899b93bd92348bc176cc109c";

            // $sessionID = MasterCardPayment::createSessionSandBox($orderID, $merchantID, $merchantPassword);


            $merchantID = "TEST3000000721";
            $merchantPassword = "0c7fb828291074dc52486465bbf18e69";
            $sessionID = MasterCardPayment::createSessionTest($orderID, $merchantID, $merchantPassword);

            $successURL = "completeCallback";
            $failURL = "errorCallback";
            $totalPrice = $price;
            // $totalPrice = 5;
            $siteName = "test";
            $siteAddress = "tetst";
            $siteEmail = "kamal.s.sroor@gmail.com";
            $sitePhone = "01012316954";
            $siteLogoURL = "https://abudiyab.test/";
            $paymentData = [
                'merchant' => $merchantID,
                'order_amount' => $totalPrice,
                'order_currency' => config('BankPayment.currency'),
                'order_id' => $orderID,
                'session_id' => $sessionID,
                'merchant_name' => $siteName,
            ];
        }

        // dd($sessionID);
        // $createTransactionAuthorize = MasterCardPayment::createTransactionAuthorize($orderID, $merchantID, $merchantPassword,$sessionID);
        // dd($createTransactionAuthorize);




        return view('frontend.payment',compact('paymentData'));
    }



}
