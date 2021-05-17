<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\AreaPricing;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AreaPricingTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_area_pricings()
    {
        $this->actingAsAdmin();

        AreaPricing::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.area_pricings.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_area_pricing_details()
    {
        $this->actingAsAdmin();

        $area_pricing = AreaPricing::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.area_pricings.show', $area_pricing))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_area_pricings_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.area_pricings.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_area_pricing()
    {
        $this->actingAsAdmin();

        $area_pricingsCount = AreaPricing::count();

        $response = $this->post(
            route('dashboard.area_pricings.store'),
            AreaPricing::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $response->assertRedirect();

        $area_pricing = AreaPricing::all()->last();

        $this->assertEquals(AreaPricing::count(), $area_pricingsCount + 1);

        $this->assertEquals($area_pricing->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_area_pricings_edit_form()
    {
        $this->actingAsAdmin();

        $area_pricing = AreaPricing::factory()->create();

        $this->get(route('dashboard.area_pricings.edit', $area_pricing))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_area_pricing()
    {
        $this->actingAsAdmin();

        $area_pricing = AreaPricing::factory()->create();

        $response = $this->put(
            route('dashboard.area_pricings.update', $area_pricing),
            AreaPricing::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $area_pricing->refresh();

        $response->assertRedirect();

        $this->assertEquals($area_pricing->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_area_pricing()
    {
        $this->actingAsAdmin();

        $area_pricing = AreaPricing::factory()->create();

        $area_pricingsCount = AreaPricing::count();

        $response = $this->delete(route('dashboard.area_pricings.destroy', $area_pricing));

        $response->assertRedirect();

        $this->assertEquals(AreaPricing::count(), $area_pricingsCount - 1);
    }

    /** @test */
    public function it_can_filter_area_pricings_by_name()
    {
        $this->actingAsAdmin();

        AreaPricing::factory()->create([
            'name' => 'Foo',
        ]);

        AreaPricing::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.area_pricings.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('area_pricings.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
