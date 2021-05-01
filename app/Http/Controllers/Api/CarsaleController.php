<?php

namespace App\Http\Controllers\Api;

use App\Models\Carsale;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\CarsaleResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CarsaleController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the carsales.
     * @OA\Get(
     *      path="/carsales",
     *      operationId="getCarsalesList",
     *      tags={"Carsales"},
     *      summary="Get list of carsales",
     *      description="Returns list of carsales",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/CarsaleResource")
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
        $carsales = Carsale::filter()->get();
        return CarsaleResource::collection($carsales);
    }

    /**
     * Display the specified carsale.
     *
     * @OA\Get(
     *      path="/carsales/{id}",
     *      operationId="getCarsaleById",
     *      tags={"Carsales"},
     *      summary="Get carsale information",
     *      description="Returns carsale data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Carsale id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Carsale")
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
     * @param \App\Models\Carsale $carsale
     * @return \App\Http\Resources\CarsaleResource
     */
    public function show(Carsale $carsale)
    {
        return new CarsaleResource($carsale);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/carsales",
     *      operationId="getSelectCarsalesList",
     *      tags={"Carsales"},
     *      summary="Get list of Select carsales",
     *      description="Returns list of Select carsales",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/CarsaleResource")
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
        $carsales = Carsale::filter()->simplePaginate();

        return SelectResource::collection($carsales);
    }
}
