<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\OrderResource;
use App\Models\Car;
use App\Models\CarsInStock;
use Auth;
use App\Http\Requests\Api\OrderStep1Request;
use App\Http\Requests\Api\OrderStep2Request;
use App\Http\Requests\Api\OrderStep3Request;
use App\Models\AreaPricing;
use App\Models\Branch;
use App\Payment\MasterCardPayment;
use Carbon\Carbon;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Http;
use Moyasar;

class OrderController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;



    /**
     * Display a listing of the orders.
     * @OA\Get(
     *      path="/orders",
     *      operationId="getOrdersList",
     *      tags={"Orders"},
     *      summary="Get list of orders",
     *      description="Returns list of orders",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/OrderResource")
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $orders = Order::where('user_id' , auth()->user()->id)->with('car','receivingBranch','deliveryBranch')->filter()->paginate();
        return OrderResource::collection($orders);
    }
/**
     * Display the specified order.
     *
     * @OA\Get(
     *      path="/orders/{id}",
     *      operationId="getOrderById",
     *      tags={"Orders"},
     *      summary="Get order information",
     *      description="Returns order data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Order id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Order")
     *
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     *      @OA\Response(
     *          response=404,
     *          description="Not Found"
     *      )
     * )
     * @param \App\Models\Order $order
     * @return \App\Http\Resources\OrderResource
     */
    public function show(Order $order,Request $request)
    {
        $userorder=$order->customer->ConfirmedCustomerRequest();

        if(Auth::check())
        {
            if ($order->user_id != auth()->id()) {
                abort(404, 'order Repository not found');
            }
        }else{
            if ($userorder->id_number != $request->identityNumber) {
                abort(404, 'order Repository not found');
            }
        }
        return new OrderResource($order);
    }



    /**
     * @param \App\Models\Order $order
     * @return \App\Http\Resources\OrderResource
     */
    public function step1(OrderStep1Request $request)
    {

        if ($request->receiving_branche != null && $request->delivery_branche != null && $request->receiving_date != null && $request->delivery_date != null )
        {
            $carInBranch =  CarsInStock::where('car_id',$request->car_id)->where('branch_id', $request->receiving_branche)->get();
            if ($carInBranch->count() > 0) {
                $data = [] ;

                $car = Car::find($request->car_id);
                if ($car->is_shield) {
                    $data[] = [
                        'id' => "shield_price",
                        'title' => trans('cars.features_added_title.shield_price'),
                        'sub_title' => trans('cars.features_added.shield'),
                        'daily' => true,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->shield_price
                    ];
                }
                if ($car->is_insurance) {
                    $data[] = [
                        'id' => "insurance_price",
                        'title' => trans('cars.features_added_title.insurance_price'),
                        'sub_title' => trans('cars.features_added.insurance'),
                        'daily' => true,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->insurance_price
                    ];
                }
                if ($car->is_open_kilometers) {
                       $data[] = [
                        'id' => "open_kilometers_price",
                        'title' => trans('cars.features_added_title.open_kilometers_price'),
                        'sub_title' => trans('cars.features_added.open_kilometers'),
                        'daily' => false,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->open_kilometers_price
                    ];
                }
                if ($car->is_navigation) {
                       $data[] = [
                        'id' => "navigation_price",
                        'title' => trans('cars.features_added_title.navigation_price'),
                        'sub_title' => trans('cars.features_added.navigation'),
                        'daily' => false,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->navigation_price
                    ];
                }
                if ($car->is_home_delivery) {
                       $data[] = [
                        'id' => "home_delivery_price",
                        'title' => trans('cars.features_added_title.home_delivery_price'),
                        'sub_title' => trans('cars.features_added.home_delivery'),
                        'daily' => false,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->home_delivery_price
                    ];
                }
                if ($car->is_intercity) {
                       $data[] = [
                        'id' => "intercity_price",
                        'title' => trans('cars.features_added_title.intercity_price'),
                        'sub_title' => trans('cars.features_added.intercity'),
                        'daily' => true,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->intercity_price
                    ];
                }
                if ($car->is_baby_seat) {
                       $data[] = [
                        'id' => "baby_seat_price",
                        'title' => trans('cars.features_added_title.baby_seat_price'),
                        'sub_title' => trans('cars.features_added.baby_seat'),
                        'daily' => false,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->baby_seat_price
                    ];
                }

                $delivery_date = Carbon::parse($request->delivery_date);
                $receiving_date = Carbon::parse($request->receiving_date);
                $diffInDays = $delivery_date->diffInDays($receiving_date);
                $order = Order::updateOrCreate([
                    'id' => $request->order_id ? $request->order_id : 0
                ],[
                    'user_id' => Auth()->id(),
                    'delivery_date' => $request->delivery_date,
                    'reciving_date' => $request->receiving_date,
                    // 'price' => $total,
                    'status' => "pending",
                    'days' => $diffInDays,
                    'receiving_branch_id' => $request->receiving_branche,
                    'delivery_branch' => $request->delivery_branche,
                    'car_id' => $request->car_id,
                ]);

                // dd($order_id , Crypt::decrypt($order_id));
                return response()->json([
                    'status' => true,
                    'order' => new OrderResource($order),
                    'features' => $data,
                ]);
            }
            else{
                return response()->json(['status' => false,'massage' => 'السياره غير متوفرة في هذا الفرع' ], 200);
            }
        }
       else{
         return response()->json(['status' => false,'massage' => 'يرجي اختيار فرع الاستلام والتسليم' ], 200);
       }
    }



     /**
     * @param \App\Models\Order $order
     * @return \App\Http\Resources\OrderResource
     */
    public function step2(OrderStep2Request $request)
    {

        $order = Order::find($request->order_id);
        $order_id = Crypt::encrypt($order->id);
        $user_id = Crypt::encrypt(Auth()->id());
        $paymentUrl = Route('front.booking.payment') . "?order_id=".$order_id."&&user_id=".$user_id;

        if ($request->features != null && is_array($request->features))
        {
            $features = [];
            foreach ($request->features as  $feature) {

                $features[$feature] = $order->car->{$feature};

                // dd($order->car->{$feature});
            }

            $order->update([
                'features_added' => $features,
            ]);
        }
            $membership_discount = ((Auth()->user()->membership->rental_discount /100) * ($order->car->price1));
            $offerLast = $order->car->offers->last();
            $promotional_discount = 0;
            if ($offerLast) {
                if($offerLast->to->lt(now()))
                {
                    $promotional_discount = 0;
                }
                else
                {
                    if($offerLast->discount_type == "percentage")
                    {
                        $promotional_discount = (($offerLast->discount_value /100) * ($order->car->price1));
                    }
                    else if($offerLast->discount_type == 'fixed')
                    {
                        $promotional_discount = $offerLast->discount_value;
                    }
                }
            }
            $features_price=0;
            if (is_array($order->features_added)) {
                foreach($order->features_added as $key => $value)
                {
                    $features_price+=$value;
                }
            }
            $delivery_date = Carbon::parse($order->delivery_date);
            $reciving_date = Carbon::parse($order->reciving_date);
            $diff = $delivery_date->diffInDays($reciving_date);

            $car_price = ($order->car->price1 * $diff) ;
            $authorization_fee=3;

            $AreaPricing = 0 ;
            $receiving_branch = Branch::find($order->receiving_branch_id);
            $delivery_branch = Branch::find($order->delivery_branch);
            if ($receiving_branch->code != $delivery_branch->code) {
                $sAreaPricing = AreaPricing::where('region_id' ,$receiving_branch->code )->where('region_to_id',$delivery_branch->code)->first()  ;
                $AreaPricing =  $sAreaPricing ?  $sAreaPricing->price : 0 ;
            }

            $price = ($car_price  ) + $features_price + $authorization_fee ;
            $total = $price + $AreaPricing  - $membership_discount - $promotional_discount;
            $order->update([
                'price' => $total,
            ]);

            $cash_active = null;
            $visa_active = null;
            $points_active = null;
        return response()->json([
            'status' => true,
            'promotional_discount' => $promotional_discount,
            'total' => $total,
            'diff' => $diff,
            'features_price' => $features_price,
            'price' => $price,
            'authorization_fee' => $authorization_fee,
            'membership_discount' => $membership_discount,
            'cash_active' => isset($cash_active) ? $cash_active : true ,
            'visa_active' => isset($visa_active) ? $visa_active : true ,
            'points_active' => isset($points_active) ? $points_active : true ,
            'order' => new OrderResource($order),
            // 'payment_url' => $paymentUrl,
        ]);
    }




     /**
     * @param \App\Models\Order $order
     * @return \App\Http\Resources\OrderResource
     */
    public function step3(OrderStep3Request $request)
    {
        $merchantID = config('BankPayment.merchantID');
        $merchantPassword = config('BankPayment.merchantPassword');
        $orderID =  $request->order_id;
        $order = Order::find($request->order_id);


        $order->update([
            'payment_type' => $request->payment_type,
        ]);

        if ($request->payment_type == "visa") {
            # code...

            $sessionID = MasterCardPayment::createSessionSandBox($orderID, $merchantID, $merchantPassword);
            $totalPrice = $order->price;

            $orderData = [
                'orderID' => $orderID,
                'merchantID' => $merchantID,
                'merchantPassword' => $merchantPassword,
            ];
            $data = [
                'correlationId' => "123",
                'session' => [
                    'authenticationLimit' => 10,
                ]
            ];
            $response = Http::contentType("application/json")
            ->withBasicAuth('merchant.'.$merchantID, $merchantPassword)
            ->withHeaders([
                'Accept' => 'application/json'
            ])->post(config('BankPayment.ApiUrlTest'). '/merchant/'.$merchantID.'/session', $data)->json();
            $sessionID = $response;
            if ($sessionID['result'] == "SUCCESS") {

                $sessionID =   $sessionID['session']['id'];
                $orderData['sessionID'] = $sessionID ;
                $data = [
                    'sourceOfFunds' => [
                        "provided" => [
                            "card" => [
                                "nameOnCard" => $request->nameOnCard,
                                "number" => $request->CardNumber,
                                "expiry" => [
                                  "month" => $request->expiry_month,
                                  "year" => $request->expiry_year
                                ],
                                "securityCode" => $request->securityCode
                            ]
                        ]
                    ],
                ];

                $orderData['sourceOfFunds'] = $data ;


                $response = Http::contentType("application/json")
                ->withBasicAuth('merchant.'.$merchantID, $merchantPassword)
                ->withHeaders([
                    'Accept' => 'application/json'
                ])->put(config('BankPayment.ApiUrlTest'). '/merchant/'.$merchantID.'/session/'.$sessionID, $data)->json();

                if($response['session']['updateStatus'] == "SUCCESS"){
                    $data = [
                        '3DSecure' => [
                            "authenticationRedirect" => [
                                "responseUrl" => route('api.payment.pay', [$orderID,$sessionID]),
                                "pageGenerationMode" => "SIMPLE"
                            ],
                        ],
                        "apiOperation" => "CHECK_3DS_ENROLLMENT",
                        "order" => [
                            "amount" =>   $totalPrice,
                            "currency" => config('BankPayment.currency')
                        ],
                        "session" => [
                            "id" =>  $sessionID,
                        ],
                    ];

                    $orderData['amount'] =  $totalPrice;
                    $orderData['currency'] = config('BankPayment.currency');

                    $order_id = Crypt::encrypt($order->id);
                    $orderData = Crypt::encrypt($orderData);
                    $data = Crypt::encrypt($data);
                    $user_id = Crypt::encrypt(Auth()->id());
                    $paymentUrl = Route('front.booking.payment') . "?order_id=".$order_id."&&user_id=".$user_id."&&order_data=".$orderData."&&data=".$data;

                    return response()->json([
                        'status' => true,
                        'order' => new OrderResource($order),
                        'payment_url' => $paymentUrl,
                    ]);
                    // return  $htmlBodyContent ;
                }
            }
        }else if($request->payment_type == "points"){

            $oderPriceForPoints = $order->price * 10 ;
            if( auth()->user()->points  <  $oderPriceForPoints ){
                return response()->json([
                    'massage' => "لا يوجد نقاط كافيه لتأكيد الحجز",
                ],422);
            }

            auth()->user()->update([
                'points' => auth()->user()->points - $oderPriceForPoints ,
            ]);

            $order->update([
                'payment_type' => 'points',
            ]);

            return response()->json([
                'status' => true,
                'order' => new OrderResource($order),
            ]);
        }else{
            $order->update([
                'payment_type' => 'cash',
            ]);
            return response()->json([
                'status' => true,
                'order' => new OrderResource($order),
            ]);
        }
    }

     /**
     * @param \App\Models\Order $order
     * @return \App\Http\Resources\OrderResource
     */
    public function orderCheck(Request $request)
    {
        $orderID =  $request->order_id;
        $merchantID = config('BankPayment.merchantID');
        $merchantPassword = config('BankPayment.merchantPassword');
        $order = Order::find($orderID);
        $getOrderDetailsSandBox = MasterCardPayment::getOrderDetailsSandBox($orderID, $merchantID, $merchantPassword);

        if ($getOrderDetailsSandBox['result'] == "SUCCESS"  &&  $getOrderDetailsSandBox['status'] == "CAPTURED") {
            $order->update([
                'payment_status' => $getOrderDetailsSandBox['result']
                // 'payment_data' => $getOrderDetailsSandBox['result']
            ]);
            return response()->json([
                'status' => true,
                'order' => new OrderResource($order),
            ]);
            // $this->currentStep = 5;
        }else if ( $order->payment_type == 'points') {
            return response()->json([
                'status' => true,
                'order' => new OrderResource($order),
            ]);
        }else if ( $order->payment_type == 'cash') {
            return response()->json([
                'status' => true,
                'order' => new OrderResource($order),
            ]);
        }else{
            return response()->json([
                'status' => false,
                'order' => new OrderResource($order),
            ]);
        }
    }


    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/orders",
     *      operationId="getSelectOrdersList",
     *      tags={"Orders"},
     *      summary="Get list of Select orders",
     *      description="Returns list of Select orders",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/OrderResource")
     *       ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      )
     * )
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function select()
    {
        $orders = Order::filter()->paginate();

        return SelectResource::collection($orders);
    }


}
