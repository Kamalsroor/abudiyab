<?php

namespace App\Http\Controllers\Api;

use App\Models\Membership;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\MembershipResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MembershipController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the memberships.
     * @OA\Get(
     *      path="/memberships",
     *      operationId="getMembershipsList",
     *      tags={"Memberships"},
     *      summary="Get list of memberships",
     *      description="Returns list of memberships",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/MembershipResource")
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
        $memberships = Membership::filter()->simplePaginate();
        return MembershipResource::collection($memberships);
    }

    /**
     * Display the specified membership.
     *
     * @OA\Get(
     *      path="/memberships/{id}",
     *      operationId="getMembershipById",
     *      tags={"Memberships"},
     *      summary="Get membership information",
     *      description="Returns membership data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Membership id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Membership")
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
     * @param \App\Models\Membership $membership
     * @return \App\Http\Resources\MembershipResource
     */
    public function show(Membership $membership)
    {
        return new MembershipResource($membership);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/memberships",
     *      operationId="getSelectMembershipsList",
     *      tags={"Memberships"},
     *      summary="Get list of Select memberships",
     *      description="Returns list of Select memberships",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/MembershipResource")
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
        $memberships = Membership::filter()->simplePaginate();

        return SelectResource::collection($memberships);
    }
}
