<?php
/**
 * @OA\Schema(
 *     title="MediacenterResource",
 *     description="Mediacenter resource",
 *     @OA\Xml(
 *         name="MediacenterResource"
 *     )
 * )
 */
class MediacenterResource
{
    /**
     * @OA\Property(
     *     title="Data",
     *     description="Data wrapper"
     * )
     *
     * @var \App\Virtual\Models\Mediacenter
     */
    private $data;
}
