<?php

namespace App\Http\Controllers\Api;

use App\Models\Purchaserequest;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\PurchaserequestResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PurchaserequestController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the purchaserequests.
     * @OA\Get(
     *      path="/purchaserequests",
     *      operationId="getPurchaserequestsList",
     *      tags={"Purchaserequests"},
     *      summary="Get list of purchaserequests",
     *      description="Returns list of purchaserequests",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/PurchaserequestResource")
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
        $purchaserequests = Purchaserequest::filter()->simplePaginate();
        return PurchaserequestResource::collection($purchaserequests);
    }

    /**
     * Display the specified purchaserequest.
     *
     * @OA\Get(
     *      path="/purchaserequests/{id}",
     *      operationId="getPurchaserequestById",
     *      tags={"Purchaserequests"},
     *      summary="Get purchaserequest information",
     *      description="Returns purchaserequest data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Purchaserequest id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Purchaserequest")
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
     * @param \App\Models\Purchaserequest $purchaserequest
     * @return \App\Http\Resources\PurchaserequestResource
     */
    public function show(Purchaserequest $purchaserequest)
    {
        return new PurchaserequestResource($purchaserequest);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/purchaserequests",
     *      operationId="getSelectPurchaserequestsList",
     *      tags={"Purchaserequests"},
     *      summary="Get list of Select purchaserequests",
     *      description="Returns list of Select purchaserequests",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/PurchaserequestResource")
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
        $purchaserequests = Purchaserequest::filter()->simplePaginate();

        return SelectResource::collection($purchaserequests);
    }
}
