<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Addition;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AdditionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_additions()
    {
        $this->actingAsAdmin();

        Addition::factory()->count(2)->create();

        $this->getJson(route('api.additions.index'))
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
    public function test_additions_select2_api()
    {
        Addition::factory()->count(5)->create();

        $response = $this->getJson(route('api.additions.select'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 1);

        $this->assertCount(5, $response->json('data'));

        $response = $this->getJson(route('api.additions.select', ['selected_id' => 4]))
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
    public function it_can_display_the_addition_details()
    {
        $this->actingAsAdmin();

        $addition = Addition::factory(['name' => 'Foo'])->create();

        $response = $this->getJson(route('api.additions.show', $addition))
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
