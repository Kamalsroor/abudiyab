<?php
/**
 * @OA\Schema(
 *     title="RegionResource",
 *     description="Region resource",
 *     @OA\Xml(
 *         name="RegionResource"
 *     )
 * )
 */
class RegionResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Region
     */
    private $data;
}
