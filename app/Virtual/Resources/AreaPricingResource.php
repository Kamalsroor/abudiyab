<?php
/**
 * @OA\Schema(
 *     title="AreaPricingResource",
 *     description="AreaPricing resource",
 *     @OA\Xml(
 *         name="AreaPricingResource"
 *     )
 * )
 */
class AreaPricingResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\AreaPricing
     */
    private $data;
}
