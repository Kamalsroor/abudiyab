<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\AreaPricing;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AreaPricingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_area_pricings()
    {
        $this->actingAsAdmin();

        AreaPricing::factory()->count(2)->create();

        $this->getJson(route('api.area_pricings.index'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'name',
                    ],
                ],
            ]);
    }

    /** @test */
    public function test_area_pricings_select2_api()
    {
        AreaPricing::factory()->count(5)->create();

        $response = $this->getJson(route('api.area_pricings.select'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 1);

        $this->assertCount(5, $response->json('data'));

        $response = $this->getJson(route('api.area_pricings.select', ['selected_id' => 4]))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 4);

        $this->assertCount(5, $response->json('data'));
    }

    /** @test */
    public function it_can_display_the_area_pricing_details()
    {
        $this->actingAsAdmin();

        $area_pricing = AreaPricing::factory(['name' => 'Foo'])->create();

        $response = $this->getJson(route('api.area_pricings.show', $area_pricing))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'name',
                ],
            ]);

        $this->assertEquals($response->json('data.name'), 'Foo');
    }
}
