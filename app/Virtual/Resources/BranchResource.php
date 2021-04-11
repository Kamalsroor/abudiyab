<?php
/**
 * @OA\Schema(
 *     title="BranchResource",
 *     description="Branch resource",
 *     @OA\Xml(
 *         name="BranchResource"
 *     )
 * )
 */
class BranchResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Branch
     */
    private $data;
}
