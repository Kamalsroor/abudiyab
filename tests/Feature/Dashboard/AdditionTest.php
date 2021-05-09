<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Addition;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Astrotomic\Translatable\Validation\RuleFactory;

class AdditionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_additions()
    {
        $this->actingAsAdmin();

        Addition::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.additions.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_addition_details()
    {
        $this->actingAsAdmin();

        $addition = Addition::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.additions.show', $addition))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_additions_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.additions.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_addition()
    {
        $this->actingAsAdmin();

        $additionsCount = Addition::count();

        $response = $this->post(
            route('dashboard.additions.store'),
            Addition::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $response->assertRedirect();

        $addition = Addition::all()->last();

        $this->assertEquals(Addition::count(), $additionsCount + 1);

        $this->assertEquals($addition->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_additions_edit_form()
    {
        $this->actingAsAdmin();

        $addition = Addition::factory()->create();

        $this->get(route('dashboard.additions.edit', $addition))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_addition()
    {
        $this->actingAsAdmin();

        $addition = Addition::factory()->create();

        $response = $this->put(
            route('dashboard.additions.update', $addition),
            Addition::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $addition->refresh();

        $response->assertRedirect();

        $this->assertEquals($addition->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_addition()
    {
        $this->actingAsAdmin();

        $addition = Addition::factory()->create();

        $additionsCount = Addition::count();

        $response = $this->delete(route('dashboard.additions.destroy', $addition));

        $response->assertRedirect();

        $this->assertEquals(Addition::count(), $additionsCount - 1);
    }

    /** @test */
    public function it_can_filter_additions_by_name()
    {
        $this->actingAsAdmin();

        Addition::factory()->create([
            'name' => 'Foo',
        ]);

        Addition::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.additions.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('additions.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
