<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Custmerrequest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustmerrequestTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_custmerrequests()
    {
        $this->actingAsAdmin();

        Custmerrequest::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.custmerrequests.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_custmerrequest_details()
    {
        $this->actingAsAdmin();

        $custmerrequest = Custmerrequest::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.custmerrequests.show', $custmerrequest))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_custmerrequests_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.custmerrequests.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_custmerrequest()
    {
        $this->actingAsAdmin();

        $custmerrequestsCount = Custmerrequest::count();

        $response = $this->post(
            route('dashboard.custmerrequests.store'),
            Custmerrequest::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $response->assertRedirect();

        $custmerrequest = Custmerrequest::all()->last();

        $this->assertEquals(Custmerrequest::count(), $custmerrequestsCount + 1);

        $this->assertEquals($custmerrequest->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_custmerrequests_edit_form()
    {
        $this->actingAsAdmin();

        $custmerrequest = Custmerrequest::factory()->create();

        $this->get(route('dashboard.custmerrequests.edit', $custmerrequest))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_custmerrequest()
    {
        $this->actingAsAdmin();

        $custmerrequest = Custmerrequest::factory()->create();

        $response = $this->put(
            route('dashboard.custmerrequests.update', $custmerrequest),
            Custmerrequest::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $custmerrequest->refresh();

        $response->assertRedirect();

        $this->assertEquals($custmerrequest->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_custmerrequest()
    {
        $this->actingAsAdmin();

        $custmerrequest = Custmerrequest::factory()->create();

        $custmerrequestsCount = Custmerrequest::count();

        $response = $this->delete(route('dashboard.custmerrequests.destroy', $custmerrequest));

        $response->assertRedirect();

        $this->assertEquals(Custmerrequest::count(), $custmerrequestsCount - 1);
    }

    /** @test */
    public function it_can_filter_custmerrequests_by_name()
    {
        $this->actingAsAdmin();

        Custmerrequest::factory()->create([
            'name' => 'Foo',
        ]);

        Custmerrequest::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.custmerrequests.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('custmerrequests.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
