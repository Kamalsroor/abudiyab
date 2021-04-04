<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_orders()
    {
        $this->actingAsAdmin();

        Order::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.orders.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_order_details()
    {
        $this->actingAsAdmin();

        $order = Order::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.orders.show', $order))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_orders_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.orders.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_order()
    {
        $this->actingAsAdmin();

        $ordersCount = Order::count();

        $response = $this->post(
            route('dashboard.orders.store'),
            Order::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $response->assertRedirect();

        $order = Order::all()->last();

        $this->assertEquals(Order::count(), $ordersCount + 1);

        $this->assertEquals($order->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_orders_edit_form()
    {
        $this->actingAsAdmin();

        $order = Order::factory()->create();

        $this->get(route('dashboard.orders.edit', $order))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_order()
    {
        $this->actingAsAdmin();

        $order = Order::factory()->create();

        $response = $this->put(
            route('dashboard.orders.update', $order),
            Order::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $order->refresh();

        $response->assertRedirect();

        $this->assertEquals($order->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_order()
    {
        $this->actingAsAdmin();

        $order = Order::factory()->create();

        $ordersCount = Order::count();

        $response = $this->delete(route('dashboard.orders.destroy', $order));

        $response->assertRedirect();

        $this->assertEquals(Order::count(), $ordersCount - 1);
    }

    /** @test */
    public function it_can_filter_orders_by_name()
    {
        $this->actingAsAdmin();

        Order::factory()->create([
            'name' => 'Foo',
        ]);

        Order::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.orders.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('orders.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
