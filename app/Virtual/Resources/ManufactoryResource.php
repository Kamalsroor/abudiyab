<?php
/**
 * @OA\Schema(
 *     title="ManufactoryResource",
 *     description="Manufactory resource",
 *     @OA\Xml(
 *         name="ManufactoryResource"
 *     )
 * )
 */
class ManufactoryResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Manufactory
     */
    private $data;
}
