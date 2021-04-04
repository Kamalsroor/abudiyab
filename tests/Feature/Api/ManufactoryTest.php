<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Manufactory;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManufactoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_manufactories()
    {
        $this->actingAsAdmin();

        Manufactory::factory()->count(2)->create();

        $this->getJson(route('api.manufactories.index'))
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
    public function test_manufactories_select2_api()
    {
        Manufactory::factory()->count(5)->create();

        $response = $this->getJson(route('api.manufactories.select'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 1);

        $this->assertCount(5, $response->json('data'));

        $response = $this->getJson(route('api.manufactories.select', ['selected_id' => 4]))
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
    public function it_can_display_the_manufactory_details()
    {
        $this->actingAsAdmin();

        $manufactory = Manufactory::factory(['name' => 'Foo'])->create();

        $response = $this->getJson(route('api.manufactories.show', $manufactory))
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
