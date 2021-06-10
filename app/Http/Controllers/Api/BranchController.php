<?php

namespace App\Http\Controllers\Api;

use App\Models\Branch;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\BranchResource;
use App\Http\Resources\CarResource;
use App\Models\Car;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

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
    public function index(Request $request)
    {
        // dd();
        if ($request->all) {
            $branches = Branch::filter()->get();
        }else{
            $branches = Branch::filter()->paginate(15);
        }
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
        $branches = Branch::filter()->get();

        return SelectResource::collection($branches);
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
    public function selectForWeb()
    {
        $branches = Branch::filter()->paginate();

        return SelectResource::collection($branches);
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
    public function selectByCarId(Request $request)
    {
        $receiving = Branch::whereHas('CarsInStock' , function ($q) use($request)
        {
            $q->where('car_id' , $request->car_id)->where('count' ,'>',0);
        })->get();
        $delivery = Branch::filter()->get();

        if($receiving->count())
        {
            $car = Car::find($request->car_id);
            // dd($car);
            return  response()->json([
                'receiving' => SelectResource::collection($receiving),
                'delivery' => SelectResource::collection($delivery),
                'Car' => new CarResource($car),
            ]);
        }
        else{
            return response()->json(['status' => false,'massage' => 'عميلنا العزيز نعتذر لكم لعدم توفر السياره في الوقت الحالي يمكنكم حجز سياره اخري' ], 422);
        }

    }
}
