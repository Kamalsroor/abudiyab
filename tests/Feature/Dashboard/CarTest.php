<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Car;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Astrotomic\Translatable\Validation\RuleFactory;

class CarTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_cars()
    {
        $this->actingAsAdmin();

        Car::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.cars.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_car_details()
    {
        $this->actingAsAdmin();

        $car = Car::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.cars.show', $car))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_cars_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.cars.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_car()
    {
        $this->actingAsAdmin();

        $carsCount = Car::count();

        $response = $this->post(
            route('dashboard.cars.store'),
            Car::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $response->assertRedirect();

        $car = Car::all()->last();

        $this->assertEquals(Car::count(), $carsCount + 1);

        $this->assertEquals($car->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_cars_edit_form()
    {
        $this->actingAsAdmin();

        $car = Car::factory()->create();

        $this->get(route('dashboard.cars.edit', $car))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_car()
    {
        $this->actingAsAdmin();

        $car = Car::factory()->create();

        $response = $this->put(
            route('dashboard.cars.update', $car),
            Car::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $car->refresh();

        $response->assertRedirect();

        $this->assertEquals($car->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_car()
    {
        $this->actingAsAdmin();

        $car = Car::factory()->create();

        $carsCount = Car::count();

        $response = $this->delete(route('dashboard.cars.destroy', $car));

        $response->assertRedirect();

        $this->assertEquals(Car::count(), $carsCount - 1);
    }

    /** @test */
    public function it_can_filter_cars_by_name()
    {
        $this->actingAsAdmin();

        Car::factory()->create([
            'name' => 'Foo',
        ]);

        Car::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.cars.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('cars.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
