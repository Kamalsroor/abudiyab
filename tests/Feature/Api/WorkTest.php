<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Work;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WorkTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_works()
    {
        $this->actingAsAdmin();

        Work::factory()->count(2)->create();

        $this->getJson(route('api.works.index'))
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
    public function test_works_select2_api()
    {
        Work::factory()->count(5)->create();

        $response = $this->getJson(route('api.works.select'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 1);

        $this->assertCount(5, $response->json('data'));

        $response = $this->getJson(route('api.works.select', ['selected_id' => 4]))
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
    public function it_can_display_the_work_details()
    {
        $this->actingAsAdmin();

        $work = Work::factory(['name' => 'Foo'])->create();

        $response = $this->getJson(route('api.works.show', $work))
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
