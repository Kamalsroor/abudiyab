<?php

namespace App\Http\Controllers\Api;

use App\Models\Addition;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\AdditionResource;
use App\Models\Order;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;


    public function pay(Request $request, Order $order, $session)
    {
        $merchantID = config('BankPayment.merchantID');
        $merchantPassword = config('BankPayment.merchantPassword');
        // "apiOperation": "PROCESS_ACS_RESULT"
        $data = [
            '3DSecure' => [
                "paRes" =>  $request->PaRes,
            ],
            "apiOperation" => "PROCESS_ACS_RESULT",
        ];

        $response = Http::contentType("application/json")
        ->withBasicAuth('merchant.'.$merchantID, $merchantPassword)
        ->withHeaders([
            'Accept' => 'application/json'
        ])->post(config('BankPayment.ApiUrl'). '/merchant/'.$merchantID.'/3DSecureId/3dsID_'.$order->id, $data)->json();


        $data = [
            'order' => [
                "amount" =>  $order->price,
                "currency" =>  "SAR",
                "reference" =>  "OrdRef_".$order->id,
            ],
            'transaction' => [
                "reference" =>  "TrxRef_".$order->id,
            ],
            'session' => [
                'id' => $session,
            ],
            "sourceOfFunds" => [
                "type" => "CARD",
            ],
            "apiOperation" => "PAY",
            "3DSecureId" => "3dsID_".$order->id,
        ];
        $response = Http::contentType("application/json")
        ->withBasicAuth('merchant.'.$merchantID, $merchantPassword)
        ->withHeaders([
            'Accept' => 'application/json'
        ])->put(config('BankPayment.ApiUrl'). '/merchant/'.$merchantID.'/order/'.$order->id.'/transaction/1', $data)->json();
        return view('frontend.payment2');
    }


}
