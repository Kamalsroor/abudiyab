<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Branch;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Astrotomic\Translatable\Validation\RuleFactory;

class BranchTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_branches()
    {
        $this->actingAsAdmin();

        Branch::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.branches.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_branch_details()
    {
        $this->actingAsAdmin();

        $branch = Branch::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.branches.show', $branch))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_branches_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.branches.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_branch()
    {
        $this->actingAsAdmin();

        $branchesCount = Branch::count();

        $response = $this->post(
            route('dashboard.branches.store'),
            Branch::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $response->assertRedirect();

        $branch = Branch::all()->last();

        $this->assertEquals(Branch::count(), $branchesCount + 1);

        $this->assertEquals($branch->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_branches_edit_form()
    {
        $this->actingAsAdmin();

        $branch = Branch::factory()->create();

        $this->get(route('dashboard.branches.edit', $branch))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_branch()
    {
        $this->actingAsAdmin();

        $branch = Branch::factory()->create();

        $response = $this->put(
            route('dashboard.branches.update', $branch),
            Branch::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $branch->refresh();

        $response->assertRedirect();

        $this->assertEquals($branch->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_branch()
    {
        $this->actingAsAdmin();

        $branch = Branch::factory()->create();

        $branchesCount = Branch::count();

        $response = $this->delete(route('dashboard.branches.destroy', $branch));

        $response->assertRedirect();

        $this->assertEquals(Branch::count(), $branchesCount - 1);
    }

    /** @test */
    public function it_can_filter_branches_by_name()
    {
        $this->actingAsAdmin();

        Branch::factory()->create([
            'name' => 'Foo',
        ]);

        Branch::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.branches.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('branches.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
