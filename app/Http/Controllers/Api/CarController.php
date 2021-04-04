<?php

namespace App\Http\Controllers\Api;

use App\Models\Car;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\CarResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CarController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the cars.
     * @OA\Get(
     *      path="/cars",
     *      operationId="getCarsList",
     *      tags={"Cars"},
     *      summary="Get list of cars",
     *      description="Returns list of cars",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/CarResource")
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
        $cars = Car::filter()->simplePaginate();
        return CarResource::collection($cars);
    }

    /**
     * Display the specified car.
     *
     * @OA\Get(
     *      path="/cars/{id}",
     *      operationId="getCarById",
     *      tags={"Cars"},
     *      summary="Get car information",
     *      description="Returns car data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Car id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Car")
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
     * @param \App\Models\Car $car
     * @return \App\Http\Resources\CarResource
     */
    public function show(Car $car)
    {
        return new CarResource($car);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/cars",
     *      operationId="getSelectCarsList",
     *      tags={"Cars"},
     *      summary="Get list of Select cars",
     *      description="Returns list of Select cars",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/CarResource")
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
        $cars = Car::filter()->simplePaginate();

        return SelectResource::collection($cars);
    }
}
