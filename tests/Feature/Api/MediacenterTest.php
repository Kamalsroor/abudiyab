<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Mediacenter;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MediacenterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_mediacenters()
    {
        $this->actingAsAdmin();

        Mediacenter::factory()->count(2)->create();

        $this->getJson(route('api.mediacenters.index'))
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
    public function test_mediacenters_select2_api()
    {
        Mediacenter::factory()->count(5)->create();

        $response = $this->getJson(route('api.mediacenters.select'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 1);

        $this->assertCount(5, $response->json('data'));

        $response = $this->getJson(route('api.mediacenters.select', ['selected_id' => 4]))
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
    public function it_can_display_the_mediacenter_details()
    {
        $this->actingAsAdmin();

        $mediacenter = Mediacenter::factory(['name' => 'Foo'])->create();

        $response = $this->getJson(route('api.mediacenters.show', $mediacenter))
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
