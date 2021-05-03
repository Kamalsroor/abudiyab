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
use Carbon\Carbon;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request ;

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
                        'title' => trans('cars.attributes.shield_price'),
                        'daily' => true,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->shield_price
                    ];
                }
                if ($car->is_insurance) {
                    $data[] = [
                        'id' => "insurance_price",
                        'title' => trans('cars.attributes.insurance_price'),
                        'daily' => true,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->insurance_price
                    ];
                }
                if ($car->is_open_kilometers) {
                       $data[] = [
                        'id' => "open_kilometers_price",
                        'title' => trans('cars.attributes.open_kilometers_price'),
                        'daily' => false,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->open_kilometers_price
                    ];
                }
                if ($car->is_navigation) {
                       $data[] = [
                        'id' => "navigation_price",
                        'title' => trans('cars.attributes.navigation_price'),
                        'daily' => false,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->navigation_price
                    ];
                }
                if ($car->is_home_delivery) {
                       $data[] = [
                        'id' => "home_delivery_price",
                        'title' => trans('cars.attributes.home_delivery_price'),
                        'daily' => false,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->home_delivery_price
                    ];
                }
                if ($car->is_intercity) {
                       $data[] = [
                        'id' => "intercity_price",
                        'title' => trans('cars.attributes.intercity_price'),
                        'daily' => true,
                        'img' => "https://i.pinimg.com/originals/f3/04/f8/f304f8984a6f9cc880a5e0e913b609b2.png",
                        'price' => $car->intercity_price
                    ];
                }
                if ($car->is_baby_seat) {
                       $data[] = [
                        'id' => "baby_seat_price",
                        'title' => trans('cars.attributes.baby_seat_price'),
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
        if ($request->features != null && is_array($request->features))
        {
            $features = [];
            foreach ($request->features as  $feature) {
                $order = Order::find($request->order_id);

                $features[] = [
                    $feature => $order->car->{$feature}
                ];

                // dd($order->car->{$feature});
            }

            $order->update([
                'features_added' => $features,
            ]);

            return response()->json([
                'status' => true,
                'order' => new OrderResource($order),
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
