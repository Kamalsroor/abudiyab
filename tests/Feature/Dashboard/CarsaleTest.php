<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Carsale;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarsaleTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_carsales()
    {
        $this->actingAsAdmin();

        Carsale::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.carsales.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_carsale_details()
    {
        $this->actingAsAdmin();

        $carsale = Carsale::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.carsales.show', $carsale))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_carsales_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.carsales.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_carsale()
    {
        $this->actingAsAdmin();

        $carsalesCount = Carsale::count();

        $response = $this->post(
            route('dashboard.carsales.store'),
            Carsale::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $response->assertRedirect();

        $carsale = Carsale::all()->last();

        $this->assertEquals(Carsale::count(), $carsalesCount + 1);

        $this->assertEquals($carsale->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_carsales_edit_form()
    {
        $this->actingAsAdmin();

        $carsale = Carsale::factory()->create();

        $this->get(route('dashboard.carsales.edit', $carsale))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_carsale()
    {
        $this->actingAsAdmin();

        $carsale = Carsale::factory()->create();

        $response = $this->put(
            route('dashboard.carsales.update', $carsale),
            Carsale::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $carsale->refresh();

        $response->assertRedirect();

        $this->assertEquals($carsale->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_carsale()
    {
        $this->actingAsAdmin();

        $carsale = Carsale::factory()->create();

        $carsalesCount = Carsale::count();

        $response = $this->delete(route('dashboard.carsales.destroy', $carsale));

        $response->assertRedirect();

        $this->assertEquals(Carsale::count(), $carsalesCount - 1);
    }

    /** @test */
    public function it_can_filter_carsales_by_name()
    {
        $this->actingAsAdmin();

        Carsale::factory()->create([
            'name' => 'Foo',
        ]);

        Carsale::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.carsales.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('carsales.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
