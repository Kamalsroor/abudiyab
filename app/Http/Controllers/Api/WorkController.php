<?php

namespace App\Http\Controllers\Api;

use App\Models\Work;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\WorkResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WorkController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the works.
     * @OA\Get(
     *      path="/works",
     *      operationId="getWorksList",
     *      tags={"Works"},
     *      summary="Get list of works",
     *      description="Returns list of works",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/WorkResource")
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
        $works = Work::filter()->simplePaginate();
        return WorkResource::collection($works);
    }

    /**
     * Display the specified work.
     *
     * @OA\Get(
     *      path="/works/{id}",
     *      operationId="getWorkById",
     *      tags={"Works"},
     *      summary="Get work information",
     *      description="Returns work data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Work id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Work")
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
     * @param \App\Models\Work $work
     * @return \App\Http\Resources\WorkResource
     */
    public function show(Work $work)
    {
        return new WorkResource($work);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/works",
     *      operationId="getSelectWorksList",
     *      tags={"Works"},
     *      summary="Get list of Select works",
     *      description="Returns list of Select works",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/WorkResource")
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
        $works = Work::filter()->simplePaginate();

        return SelectResource::collection($works);
    }
}
