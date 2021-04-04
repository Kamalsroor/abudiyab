<?php

namespace App\Http\Controllers\Api;

use App\Models\Branch;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\BranchResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BranchController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the branches.
     * @OA\Get(
     *      path="/branches",
     *      operationId="getBranchesList",
     *      tags={"Branches"},
     *      summary="Get list of branches",
     *      description="Returns list of branches",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/BranchResource")
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
        $branches = Branch::filter()->simplePaginate(3);
        return BranchResource::collection($branches);
    }

    /**
     * Display the specified branch.
     *
     * @OA\Get(
     *      path="/branches/{id}",
     *      operationId="getBranchById",
     *      tags={"Branches"},
     *      summary="Get branch information",
     *      description="Returns branch data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Branch id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Branch")
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
     * @param \App\Models\Branch $branch
     * @return \App\Http\Resources\BranchResource
     */
    public function show(Branch $branch)
    {
        return new BranchResource($branch);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/branches",
     *      operationId="getSelectBranchesList",
     *      tags={"Branches"},
     *      summary="Get list of Select branches",
     *      description="Returns list of Select branches",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/BranchResource")
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
        $branches = Branch::filter()->simplePaginate();

        return SelectResource::collection($branches);
    }
}
