<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Purchaserequest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PurchaserequestTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_purchaserequests()
    {
        $this->actingAsAdmin();

        Purchaserequest::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.purchaserequests.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_purchaserequest_details()
    {
        $this->actingAsAdmin();

        $purchaserequest = Purchaserequest::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.purchaserequests.show', $purchaserequest))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_purchaserequests_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.purchaserequests.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_purchaserequest()
    {
        $this->actingAsAdmin();

        $purchaserequestsCount = Purchaserequest::count();

        $response = $this->post(
            route('dashboard.purchaserequests.store'),
            Purchaserequest::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $response->assertRedirect();

        $purchaserequest = Purchaserequest::all()->last();

        $this->assertEquals(Purchaserequest::count(), $purchaserequestsCount + 1);

        $this->assertEquals($purchaserequest->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_purchaserequests_edit_form()
    {
        $this->actingAsAdmin();

        $purchaserequest = Purchaserequest::factory()->create();

        $this->get(route('dashboard.purchaserequests.edit', $purchaserequest))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_purchaserequest()
    {
        $this->actingAsAdmin();

        $purchaserequest = Purchaserequest::factory()->create();

        $response = $this->put(
            route('dashboard.purchaserequests.update', $purchaserequest),
            Purchaserequest::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $purchaserequest->refresh();

        $response->assertRedirect();

        $this->assertEquals($purchaserequest->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_purchaserequest()
    {
        $this->actingAsAdmin();

        $purchaserequest = Purchaserequest::factory()->create();

        $purchaserequestsCount = Purchaserequest::count();

        $response = $this->delete(route('dashboard.purchaserequests.destroy', $purchaserequest));

        $response->assertRedirect();

        $this->assertEquals(Purchaserequest::count(), $purchaserequestsCount - 1);
    }

    /** @test */
    public function it_can_filter_purchaserequests_by_name()
    {
        $this->actingAsAdmin();

        Purchaserequest::factory()->create([
            'name' => 'Foo',
        ]);

        Purchaserequest::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.purchaserequests.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('purchaserequests.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
