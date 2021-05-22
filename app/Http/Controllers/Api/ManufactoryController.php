<?php

namespace App\Http\Controllers\Api;

use App\Models\Manufactory;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\ManufactoryResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ManufactoryController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the manufactories.
     * @OA\Get(
     *      path="/manufactories",
     *      operationId="getManufactoriesList",
     *      tags={"Manufactories"},
     *      summary="Get list of manufactories",
     *      description="Returns list of manufactories",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/ManufactoryResource")
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
        $manufactories = Manufactory::filter()->paginate();
        return ManufactoryResource::collection($manufactories);
    }

    /**
     * Display the specified manufactory.
     *
     * @OA\Get(
     *      path="/manufactories/{id}",
     *      operationId="getManufactoryById",
     *      tags={"Manufactories"},
     *      summary="Get manufactory information",
     *      description="Returns manufactory data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Manufactory id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Manufactory")
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
     * @param \App\Models\Manufactory $manufactory
     * @return \App\Http\Resources\ManufactoryResource
     */
    public function show(Manufactory $manufactory)
    {
        return new ManufactoryResource($manufactory);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/manufactories",
     *      operationId="getSelectManufactoriesList",
     *      tags={"Manufactories"},
     *      summary="Get list of Select manufactories",
     *      description="Returns list of Select manufactories",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/ManufactoryResource")
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
        $manufactories = Manufactory::filter()->paginate();

        return SelectResource::collection($manufactories);
    }
}
