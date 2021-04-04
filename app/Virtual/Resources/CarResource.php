<?php
/**
 * @OA\Schema(
 *     title="CarResource",
 *     description="Car resource",
 *     @OA\Xml(
 *         name="CarResource"
 *     )
 * )
 */
class CarResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Car
     */
    private $data;
}
