<?php
/**
 * @OA\Schema(
 *     title="OfferResource",
 *     description="Offer resource",
 *     @OA\Xml(
 *         name="OfferResource"
 *     )
 * )
 */
class OfferResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Offer
     */
    private $data;
}
