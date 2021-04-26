<?php
/**
 * @OA\Schema(
 *     title="MembershipResource",
 *     description="Membership resource",
 *     @OA\Xml(
 *         name="MembershipResource"
 *     )
 * )
 */
class MembershipResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Membership
     */
    private $data;
}
