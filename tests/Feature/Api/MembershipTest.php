<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Membership;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MembershipTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_all_memberships()
    {
        $this->actingAsAdmin();

        Membership::factory()->count(2)->create();

        $this->getJson(route('api.memberships.index'))
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
    public function test_memberships_select2_api()
    {
        Membership::factory()->count(5)->create();

        $response = $this->getJson(route('api.memberships.select'))
            ->assertSuccessful()
            ->assertJsonStructure([
                'data' => [
                    '*' => ['id', 'text'],
                ],
            ]);

        $this->assertEquals($response->json('data.0.id'), 1);

        $this->assertCount(5, $response->json('data'));

        $response = $this->getJson(route('api.memberships.select', ['selected_id' => 4]))
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
    public function it_can_display_the_membership_details()
    {
        $this->actingAsAdmin();

        $membership = Membership::factory(['name' => 'Foo'])->create();

        $response = $this->getJson(route('api.memberships.show', $membership))
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
