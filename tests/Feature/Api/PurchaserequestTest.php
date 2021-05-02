<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Purchaserequest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PurchaserequestTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_purchaserequests()
    {
        $this->actingAsAdmin();

        Purchaserequest::factory()->count(2)->create();

        $this->getJson(route('api.purchaserequests.index'))
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
    public function test_purchaserequests_select2_api()
    {
        Purchaserequest::factory()->count(5)->create();

        $response = $this->getJson(route('api.purchaserequests.select'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 1);

        $this->assertCount(5, $response->json('data'));

        $response = $this->getJson(route('api.purchaserequests.select', ['selected_id' => 4]))
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
    public function it_can_display_the_purchaserequest_details()
    {
        $this->actingAsAdmin();

        $purchaserequest = Purchaserequest::factory(['name' => 'Foo'])->create();

        $response = $this->getJson(route('api.purchaserequests.show', $purchaserequest))
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
