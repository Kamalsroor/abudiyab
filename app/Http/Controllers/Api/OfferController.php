<?php

namespace App\Http\Controllers\Api;

use App\Models\Offer;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\OfferResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class OfferController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the offers.
     * @OA\Get(
     *      path="/offers",
     *      operationId="getOffersList",
     *      tags={"Offers"},
     *      summary="Get list of offers",
     *      description="Returns list of offers",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/OfferResource")
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
        $offers = Offer::filter()->where('type','4')->paginate();
        dd($offers);
        return OfferResource::collection($offers);
    }

    /**
     * Display the specified offer.
     *
     * @OA\Get(
     *      path="/offers/{id}",
     *      operationId="getOfferById",
     *      tags={"Offers"},
     *      summary="Get offer information",
     *      description="Returns offer data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Offer id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Offer")
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
     * @param \App\Models\Offer $offer
     * @return \App\Http\Resources\OfferResource
     */
    public function show(Offer $offer)
    {
        return new OfferResource($offer);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/offers",
     *      operationId="getSelectOffersList",
     *      tags={"Offers"},
     *      summary="Get list of Select offers",
     *      description="Returns list of Select offers",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/OfferResource")
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
        $offers = Offer::filter()->paginate();

        return SelectResource::collection($offers);
    }
}
