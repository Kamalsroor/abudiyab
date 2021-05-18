<?php

namespace App\Http\Controllers\Api;

use App\Models\AreaPricing;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\AreaPricingResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AreaPricingController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the area_pricings.
     * @OA\Get(
     *      path="/area_pricings",
     *      operationId="getAreaPricingsList",
     *      tags={"AreaPricings"},
     *      summary="Get list of area_pricings",
     *      description="Returns list of area_pricings",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/AreaPricingResource")
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
        $area_pricings = AreaPricing::filter()->simplePaginate();
        return AreaPricingResource::collection($area_pricings);
    }

    /**
     * Display the specified area_pricing.
     *
     * @OA\Get(
     *      path="/area_pricings/{id}",
     *      operationId="getAreaPricingById",
     *      tags={"AreaPricings"},
     *      summary="Get area_pricing information",
     *      description="Returns area_pricing data",
     *      @OA\Parameter(
     *          name="id",
     *          description="AreaPricing id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/AreaPricing")
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
     * @param \App\Models\AreaPricing $area_pricing
     * @return \App\Http\Resources\AreaPricingResource
     */
    public function show(AreaPricing $area_pricing)
    {
        return new AreaPricingResource($area_pricing);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/area_pricings",
     *      operationId="getSelectAreaPricingsList",
     *      tags={"AreaPricings"},
     *      summary="Get list of Select area_pricings",
     *      description="Returns list of Select area_pricings",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/AreaPricingResource")
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
        $area_pricings = AreaPricing::filter()->simplePaginate();

        return SelectResource::collection($area_pricings);
    }
}
