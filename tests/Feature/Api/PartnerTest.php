<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Partner;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PartnerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_partners()
    {
        $this->actingAsAdmin();

        Partner::factory()->count(2)->create();

        $this->getJson(route('api.partners.index'))
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
    public function test_partners_select2_api()
    {
        Partner::factory()->count(5)->create();

        $response = $this->getJson(route('api.partners.select'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 1);

        $this->assertCount(5, $response->json('data'));

        $response = $this->getJson(route('api.partners.select', ['selected_id' => 4]))
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
    public function it_can_display_the_partner_details()
    {
        $this->actingAsAdmin();

        $partner = Partner::factory(['name' => 'Foo'])->create();

        $response = $this->getJson(route('api.partners.show', $partner))
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
