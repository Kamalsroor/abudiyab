<?php
/**
 * @OA\Schema(
 *     title="CustmerrequestResource",
 *     description="Custmerrequest resource",
 *     @OA\Xml(
 *         name="CustmerrequestResource"
 *     )
 * )
 */
class CustmerrequestResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Custmerrequest
     */
    private $data;
}
