<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Manufactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Astrotomic\Translatable\Validation\RuleFactory;

class ManufactoryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_manufactories()
    {
        $this->actingAsAdmin();

        Manufactory::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.manufactories.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_manufactory_details()
    {
        $this->actingAsAdmin();

        $manufactory = Manufactory::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.manufactories.show', $manufactory))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_manufactories_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.manufactories.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_manufactory()
    {
        $this->actingAsAdmin();

        $manufactoriesCount = Manufactory::count();

        $response = $this->post(
            route('dashboard.manufactories.store'),
            Manufactory::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $response->assertRedirect();

        $manufactory = Manufactory::all()->last();

        $this->assertEquals(Manufactory::count(), $manufactoriesCount + 1);

        $this->assertEquals($manufactory->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_manufactories_edit_form()
    {
        $this->actingAsAdmin();

        $manufactory = Manufactory::factory()->create();

        $this->get(route('dashboard.manufactories.edit', $manufactory))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_manufactory()
    {
        $this->actingAsAdmin();

        $manufactory = Manufactory::factory()->create();

        $response = $this->put(
            route('dashboard.manufactories.update', $manufactory),
            Manufactory::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $manufactory->refresh();

        $response->assertRedirect();

        $this->assertEquals($manufactory->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_manufactory()
    {
        $this->actingAsAdmin();

        $manufactory = Manufactory::factory()->create();

        $manufactoriesCount = Manufactory::count();

        $response = $this->delete(route('dashboard.manufactories.destroy', $manufactory));

        $response->assertRedirect();

        $this->assertEquals(Manufactory::count(), $manufactoriesCount - 1);
    }

    /** @test */
    public function it_can_filter_manufactories_by_name()
    {
        $this->actingAsAdmin();

        Manufactory::factory()->create([
            'name' => 'Foo',
        ]);

        Manufactory::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.manufactories.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('manufactories.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
