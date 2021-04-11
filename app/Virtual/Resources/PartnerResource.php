<?php
/**
 * @OA\Schema(
 *     title="PartnerResource",
 *     description="Partner resource",
 *     @OA\Xml(
 *         name="PartnerResource"
 *     )
 * )
 */
class PartnerResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Partner
     */
    private $data;
}
