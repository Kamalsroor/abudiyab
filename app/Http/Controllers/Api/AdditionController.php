<?php

namespace App\Http\Controllers\Api;

use App\Models\Addition;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\AdditionResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdditionController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the additions.
     * @OA\Get(
     *      path="/additions",
     *      operationId="getAdditionsList",
     *      tags={"Additions"},
     *      summary="Get list of additions",
     *      description="Returns list of additions",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/AdditionResource")
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
        $additions = Addition::filter()->simplePaginate();
        return AdditionResource::collection($additions);
    }

    /**
     * Display the specified addition.
     *
     * @OA\Get(
     *      path="/additions/{id}",
     *      operationId="getAdditionById",
     *      tags={"Additions"},
     *      summary="Get addition information",
     *      description="Returns addition data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Addition id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Addition")
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
     * @param \App\Models\Addition $addition
     * @return \App\Http\Resources\AdditionResource
     */
    public function show(Addition $addition)
    {
        return new AdditionResource($addition);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/additions",
     *      operationId="getSelectAdditionsList",
     *      tags={"Additions"},
     *      summary="Get list of Select additions",
     *      description="Returns list of Select additions",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/AdditionResource")
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
        $additions = Addition::filter()->simplePaginate();

        return SelectResource::collection($additions);
    }
}
