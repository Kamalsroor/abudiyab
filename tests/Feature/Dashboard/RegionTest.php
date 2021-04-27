<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Region;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Astrotomic\Translatable\Validation\RuleFactory;

class RegionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_regions()
    {
        $this->actingAsAdmin();

        Region::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.regions.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_region_details()
    {
        $this->actingAsAdmin();

        $region = Region::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.regions.show', $region))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_regions_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.regions.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_region()
    {
        $this->actingAsAdmin();

        $regionsCount = Region::count();

        $response = $this->post(
            route('dashboard.regions.store'),
            Region::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $response->assertRedirect();

        $region = Region::all()->last();

        $this->assertEquals(Region::count(), $regionsCount + 1);

        $this->assertEquals($region->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_regions_edit_form()
    {
        $this->actingAsAdmin();

        $region = Region::factory()->create();

        $this->get(route('dashboard.regions.edit', $region))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_region()
    {
        $this->actingAsAdmin();

        $region = Region::factory()->create();

        $response = $this->put(
            route('dashboard.regions.update', $region),
            Region::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $region->refresh();

        $response->assertRedirect();

        $this->assertEquals($region->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_region()
    {
        $this->actingAsAdmin();

        $region = Region::factory()->create();

        $regionsCount = Region::count();

        $response = $this->delete(route('dashboard.regions.destroy', $region));

        $response->assertRedirect();

        $this->assertEquals(Region::count(), $regionsCount - 1);
    }

    /** @test */
    public function it_can_filter_regions_by_name()
    {
        $this->actingAsAdmin();

        Region::factory()->create([
            'name' => 'Foo',
        ]);

        Region::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.regions.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('regions.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
