<?php

namespace App\Http\Controllers\Api;

use App\Models\Slider;
use Illuminate\Routing\Controller;
use App\Http\Resources\SelectResource;
use App\Http\Resources\SliderResource;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SliderController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display a listing of the sliders.
     * @OA\Get(
     *      path="/sliders",
     *      operationId="getSlidersList",
     *      tags={"Sliders"},
     *      summary="Get list of sliders",
     *      description="Returns list of sliders",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/SliderResource")
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
        $sliders = Slider::filter()->simplePaginate();
        return SliderResource::collection($sliders);
    }

    /**
     * Display the specified slider.
     *
     * @OA\Get(
     *      path="/sliders/{id}",
     *      operationId="getSliderById",
     *      tags={"Sliders"},
     *      summary="Get slider information",
     *      description="Returns slider data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Slider id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *           @OA\JsonContent(ref="#/components/schemas/Slider")
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
     * @param \App\Models\Slider $slider
     * @return \App\Http\Resources\SliderResource
     */
    public function show(Slider $slider)
    {
        return new SliderResource($slider);
    }

    /**
     * Display a listing of the resource.
    * @OA\Get(
     *      path="/select/sliders",
     *      operationId="getSelectSlidersList",
     *      tags={"Sliders"},
     *      summary="Get list of Select sliders",
     *      description="Returns list of Select sliders",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\JsonContent(ref="#/components/schemas/SliderResource")
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
        $sliders = Slider::filter()->simplePaginate();

        return SelectResource::collection($sliders);
    }
}
