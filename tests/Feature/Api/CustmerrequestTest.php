<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Custmerrequest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustmerrequestTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_custmerrequests()
    {
        $this->actingAsAdmin();

        Custmerrequest::factory()->count(2)->create();

        $this->getJson(route('api.custmerrequests.index'))
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
    public function test_custmerrequests_select2_api()
    {
        Custmerrequest::factory()->count(5)->create();

        $response = $this->getJson(route('api.custmerrequests.select'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 1);

        $this->assertCount(5, $response->json('data'));

        $response = $this->getJson(route('api.custmerrequests.select', ['selected_id' => 4]))
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
    public function it_can_display_the_custmerrequest_details()
    {
        $this->actingAsAdmin();

        $custmerrequest = Custmerrequest::factory(['name' => 'Foo'])->create();

        $response = $this->getJson(route('api.custmerrequests.show', $custmerrequest))
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
