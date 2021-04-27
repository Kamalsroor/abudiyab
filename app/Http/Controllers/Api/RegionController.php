<?php

namespace App\Http\Controllers\Api;

use App\Models\Region;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\RegionResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RegionController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the regions.
     * @OA\Get(
     *      path="/regions",
     *      operationId="getRegionsList",
     *      tags={"Regions"},
     *      summary="Get list of regions",
     *      description="Returns list of regions",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/RegionResource")
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
        $regions = Region::filter()->simplePaginate();
        return RegionResource::collection($regions);
    }

    /**
     * Display the specified region.
     *
     * @OA\Get(
     *      path="/regions/{id}",
     *      operationId="getRegionById",
     *      tags={"Regions"},
     *      summary="Get region information",
     *      description="Returns region data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Region id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Region")
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
     * @param \App\Models\Region $region
     * @return \App\Http\Resources\RegionResource
     */
    public function show(Region $region)
    {
        return new RegionResource($region);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/regions",
     *      operationId="getSelectRegionsList",
     *      tags={"Regions"},
     *      summary="Get list of Select regions",
     *      description="Returns list of Select regions",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/RegionResource")
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
        $regions = Region::filter()->simplePaginate();

        return SelectResource::collection($regions);
    }
}
