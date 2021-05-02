<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Mediacenter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Astrotomic\Translatable\Validation\RuleFactory;

class MediacenterTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_mediacenters()
    {
        $this->actingAsAdmin();

        Mediacenter::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.mediacenters.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_mediacenter_details()
    {
        $this->actingAsAdmin();

        $mediacenter = Mediacenter::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.mediacenters.show', $mediacenter))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_mediacenters_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.mediacenters.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_mediacenter()
    {
        $this->actingAsAdmin();

        $mediacentersCount = Mediacenter::count();

        $response = $this->post(
            route('dashboard.mediacenters.store'),
            Mediacenter::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $response->assertRedirect();

        $mediacenter = Mediacenter::all()->last();

        $this->assertEquals(Mediacenter::count(), $mediacentersCount + 1);

        $this->assertEquals($mediacenter->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_mediacenters_edit_form()
    {
        $this->actingAsAdmin();

        $mediacenter = Mediacenter::factory()->create();

        $this->get(route('dashboard.mediacenters.edit', $mediacenter))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_mediacenter()
    {
        $this->actingAsAdmin();

        $mediacenter = Mediacenter::factory()->create();

        $response = $this->put(
            route('dashboard.mediacenters.update', $mediacenter),
            Mediacenter::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $mediacenter->refresh();

        $response->assertRedirect();

        $this->assertEquals($mediacenter->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_mediacenter()
    {
        $this->actingAsAdmin();

        $mediacenter = Mediacenter::factory()->create();

        $mediacentersCount = Mediacenter::count();

        $response = $this->delete(route('dashboard.mediacenters.destroy', $mediacenter));

        $response->assertRedirect();

        $this->assertEquals(Mediacenter::count(), $mediacentersCount - 1);
    }

    /** @test */
    public function it_can_filter_mediacenters_by_name()
    {
        $this->actingAsAdmin();

        Mediacenter::factory()->create([
            'name' => 'Foo',
        ]);

        Mediacenter::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.mediacenters.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('mediacenters.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
