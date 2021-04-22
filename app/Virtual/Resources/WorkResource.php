<?php
/**
 * @OA\Schema(
 *     title="WorkResource",
 *     description="Work resource",
 *     @OA\Xml(
 *         name="WorkResource"
 *     )
 * )
 */
class WorkResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Work
     */
    private $data;
}
