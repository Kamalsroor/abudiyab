<?php
/**
 * @OA\Schema(
 *     title="CarsaleResource",
 *     description="Carsale resource",
 *     @OA\Xml(
 *         name="CarsaleResource"
 *     )
 * )
 */
class CarsaleResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Carsale
     */
    private $data;
}
