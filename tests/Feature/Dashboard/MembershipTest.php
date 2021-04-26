<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Membership;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Astrotomic\Translatable\Validation\RuleFactory;

class MembershipTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_memberships()
    {
        $this->actingAsAdmin();

        Membership::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.memberships.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_membership_details()
    {
        $this->actingAsAdmin();

        $membership = Membership::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.memberships.show', $membership))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_memberships_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.memberships.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_membership()
    {
        $this->actingAsAdmin();

        $membershipsCount = Membership::count();

        $response = $this->post(
            route('dashboard.memberships.store'),
            Membership::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $response->assertRedirect();

        $membership = Membership::all()->last();

        $this->assertEquals(Membership::count(), $membershipsCount + 1);

        $this->assertEquals($membership->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_memberships_edit_form()
    {
        $this->actingAsAdmin();

        $membership = Membership::factory()->create();

        $this->get(route('dashboard.memberships.edit', $membership))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_membership()
    {
        $this->actingAsAdmin();

        $membership = Membership::factory()->create();

        $response = $this->put(
            route('dashboard.memberships.update', $membership),
            Membership::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $membership->refresh();

        $response->assertRedirect();

        $this->assertEquals($membership->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_membership()
    {
        $this->actingAsAdmin();

        $membership = Membership::factory()->create();

        $membershipsCount = Membership::count();

        $response = $this->delete(route('dashboard.memberships.destroy', $membership));

        $response->assertRedirect();

        $this->assertEquals(Membership::count(), $membershipsCount - 1);
    }

    /** @test */
    public function it_can_filter_memberships_by_name()
    {
        $this->actingAsAdmin();

        Membership::factory()->create([
            'name' => 'Foo',
        ]);

        Membership::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.memberships.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('memberships.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
