<?php

namespace App\Http\Controllers\Api;

use App\Models\Mediacenter;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\MediacenterResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MediacenterController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the mediacenters.
     * @OA\Get(
     *      path="/mediacenters",
     *      operationId="getMediacentersList",
     *      tags={"Mediacenters"},
     *      summary="Get list of mediacenters",
     *      description="Returns list of mediacenters",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/MediacenterResource")
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
        $mediacenters = Mediacenter::filter()->simplePaginate();
        return MediacenterResource::collection($mediacenters);
    }

    /**
     * Display the specified mediacenter.
     *
     * @OA\Get(
     *      path="/mediacenters/{id}",
     *      operationId="getMediacenterById",
     *      tags={"Mediacenters"},
     *      summary="Get mediacenter information",
     *      description="Returns mediacenter data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Mediacenter id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Mediacenter")
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
     * @param \App\Models\Mediacenter $mediacenter
     * @return \App\Http\Resources\MediacenterResource
     */
    public function show(Mediacenter $mediacenter)
    {
        return new MediacenterResource($mediacenter);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/mediacenters",
     *      operationId="getSelectMediacentersList",
     *      tags={"Mediacenters"},
     *      summary="Get list of Select mediacenters",
     *      description="Returns list of Select mediacenters",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/MediacenterResource")
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
        $mediacenters = Mediacenter::filter()->simplePaginate();

        return SelectResource::collection($mediacenters);
    }
}
