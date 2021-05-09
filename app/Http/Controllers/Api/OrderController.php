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
use App\Payment\MasterCardPayment;
use Carbon\Carbon;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request ;
use Illuminate\Support\Facades\Crypt;
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
        $orders = Order::where('user_id' , auth()->user()->id)->with('car')->filter()->simplePaginate();
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
                return response()->json(['status' => false,'massage' => 'السياره غير متوفرة في هذه الفرع' ], 200);
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
        // Moyasar::setApiKey(config('moyasar.Test_Secret_Key'));
        // $card = [
        //     "type" => Moyasar::CREDIT_CARD,
        //    "name" => "Abdulaziz Nasser",
        //    "number" => "4111111111111111",
        //    "cvc" => 331,
        //    "month" => 12,
        //    "year" => 2021
        //      ];
        //  return Moyasar::PayCreate("10000"  ,$card,  "bag payment", "SAR");




        $merchantID = "TEST3000000721";
        $merchantPassword = "0c7fb828291074dc52486465bbf18e69";

        // $merchantID = "3000000721";
        // $merchantPassword = "8c9e1db3899b93bd92348bc176cc109c";

        $sessionID = MasterCardPayment::createSessionSandBox(7070, $merchantID, $merchantPassword);
        $successURL = "completeCallback";
        $failURL = "errorCallback";
        $totalPrice = 5000;
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
            'order_id' => 7070,
            'session_id' => $sessionID,
            'merchant_name' => $siteName,
        ];

        // dd($sessionID);
        $createTransactionAuthorize = MasterCardPayment::createTransactionAuthorize(7070, $merchantID, $merchantPassword,$sessionID);
        dd($createTransactionAuthorize);


        // $invoice = Invoice::fromArray($data);
        // $invoice->setClient($this->client);
        // $invoiceService = new \Moyasar\Providers\InvoiceService();
        // $invoice = $invoiceService->create();
        // return response()->json(['status' => false,'data' => $request->all() ], 200);

        if ($request->features != null && is_array($request->features))
        {
            $features = [];
            foreach ($request->features as  $feature) {
                $order = Order::find($request->order_id);

                $features[$feature] = $order->car->{$feature};

                // dd($order->car->{$feature});
            }

            $order->update([
                'features_added' => $features,
            ]);
            $order_id = Crypt::encrypt($order->id);
            $user_id = Crypt::encrypt(Auth()->id());
            $paymentUrl = Route('front.booking.payment') . "?order_id=".$order_id."&&user_id=".$user_id;

            return response()->json([
                'status' => true,
                'order' => new OrderResource($order),
                'payment_url' => $paymentUrl,
            ]);
        }
       else{
         return response()->json(['status' => false,'massage' => 'يرجي التأكيد من البيانات' ], 200);
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
        $orders = Order::filter()->simplePaginate();

        return SelectResource::collection($orders);
    }


}
