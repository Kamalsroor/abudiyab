<?php
/**
 * @OA\Schema(
 *     title="AdditionResource",
 *     description="Addition resource",
 *     @OA\Xml(
 *         name="AdditionResource"
 *     )
 * )
 */
class AdditionResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Addition
     */
    private $data;
}
