<?php
/**
 * @OA\Schema(
 *     title="PurchaserequestResource",
 *     description="Purchaserequest resource",
 *     @OA\Xml(
 *         name="PurchaserequestResource"
 *     )
 * )
 */
class PurchaserequestResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Purchaserequest
     */
    private $data;
}
