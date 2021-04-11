<?php

namespace App\Http\Controllers\Api;

use App\Models\Partner;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\PartnerResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PartnerController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the partners.
     * @OA\Get(
     *      path="/partners",
     *      operationId="getPartnersList",
     *      tags={"Partners"},
     *      summary="Get list of partners",
     *      description="Returns list of partners",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/PartnerResource")
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
        $partners = Partner::filter()->simplePaginate();
        return PartnerResource::collection($partners);
    }

    /**
     * Display the specified partner.
     *
     * @OA\Get(
     *      path="/partners/{id}",
     *      operationId="getPartnerById",
     *      tags={"Partners"},
     *      summary="Get partner information",
     *      description="Returns partner data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Partner id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Partner")
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
     * @param \App\Models\Partner $partner
     * @return \App\Http\Resources\PartnerResource
     */
    public function show(Partner $partner)
    {
        return new PartnerResource($partner);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/partners",
     *      operationId="getSelectPartnersList",
     *      tags={"Partners"},
     *      summary="Get list of Select partners",
     *      description="Returns list of Select partners",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/PartnerResource")
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
        $partners = Partner::filter()->simplePaginate();

        return SelectResource::collection($partners);
    }
}
