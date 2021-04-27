<?php

namespace App\Http\Controllers\Api;

use App\Models\Custmerrequest;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\CustmerrequestResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CustmerrequestController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the custmerrequests.
     * @OA\Get(
     *      path="/custmerrequests",
     *      operationId="getCustmerrequestsList",
     *      tags={"Custmerrequests"},
     *      summary="Get list of custmerrequests",
     *      description="Returns list of custmerrequests",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/CustmerrequestResource")
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
        $custmerrequests = Custmerrequest::filter()->simplePaginate();
        return CustmerrequestResource::collection($custmerrequests);
    }

    /**
     * Display the specified custmerrequest.
     *
     * @OA\Get(
     *      path="/custmerrequests/{id}",
     *      operationId="getCustmerrequestById",
     *      tags={"Custmerrequests"},
     *      summary="Get custmerrequest information",
     *      description="Returns custmerrequest data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Custmerrequest id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Custmerrequest")
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
     * @param \App\Models\Custmerrequest $custmerrequest
     * @return \App\Http\Resources\CustmerrequestResource
     */
    public function show(Custmerrequest $custmerrequest)
    {
        return new CustmerrequestResource($custmerrequest);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/custmerrequests",
     *      operationId="getSelectCustmerrequestsList",
     *      tags={"Custmerrequests"},
     *      summary="Get list of Select custmerrequests",
     *      description="Returns list of Select custmerrequests",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/CustmerrequestResource")
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
        $custmerrequests = Custmerrequest::filter()->simplePaginate();

        return SelectResource::collection($custmerrequests);
    }
}
