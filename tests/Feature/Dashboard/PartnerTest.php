<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Partner;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PartnerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_partners()
    {
        $this->actingAsAdmin();

        Partner::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.partners.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_partner_details()
    {
        $this->actingAsAdmin();

        $partner = Partner::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.partners.show', $partner))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_partners_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.partners.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_partner()
    {
        $this->actingAsAdmin();

        $partnersCount = Partner::count();

        $response = $this->post(
            route('dashboard.partners.store'),
            Partner::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $response->assertRedirect();

        $partner = Partner::all()->last();

        $this->assertEquals(Partner::count(), $partnersCount + 1);

        $this->assertEquals($partner->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_partners_edit_form()
    {
        $this->actingAsAdmin();

        $partner = Partner::factory()->create();

        $this->get(route('dashboard.partners.edit', $partner))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_partner()
    {
        $this->actingAsAdmin();

        $partner = Partner::factory()->create();

        $response = $this->put(
            route('dashboard.partners.update', $partner),
            Partner::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $partner->refresh();

        $response->assertRedirect();

        $this->assertEquals($partner->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_partner()
    {
        $this->actingAsAdmin();

        $partner = Partner::factory()->create();

        $partnersCount = Partner::count();

        $response = $this->delete(route('dashboard.partners.destroy', $partner));

        $response->assertRedirect();

        $this->assertEquals(Partner::count(), $partnersCount - 1);
    }

    /** @test */
    public function it_can_filter_partners_by_name()
    {
        $this->actingAsAdmin();

        Partner::factory()->create([
            'name' => 'Foo',
        ]);

        Partner::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.partners.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('partners.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
