<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Work;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WorkTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_works()
    {
        $this->actingAsAdmin();

        Work::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.works.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_work_details()
    {
        $this->actingAsAdmin();

        $work = Work::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.works.show', $work))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_works_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.works.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_work()
    {
        $this->actingAsAdmin();

        $worksCount = Work::count();

        $response = $this->post(
            route('dashboard.works.store'),
            Work::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $response->assertRedirect();

        $work = Work::all()->last();

        $this->assertEquals(Work::count(), $worksCount + 1);

        $this->assertEquals($work->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_works_edit_form()
    {
        $this->actingAsAdmin();

        $work = Work::factory()->create();

        $this->get(route('dashboard.works.edit', $work))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_work()
    {
        $this->actingAsAdmin();

        $work = Work::factory()->create();

        $response = $this->put(
            route('dashboard.works.update', $work),
            Work::factory()->raw([
                'name' => 'Foo'
            ])
        );

        $work->refresh();

        $response->assertRedirect();

        $this->assertEquals($work->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_work()
    {
        $this->actingAsAdmin();

        $work = Work::factory()->create();

        $worksCount = Work::count();

        $response = $this->delete(route('dashboard.works.destroy', $work));

        $response->assertRedirect();

        $this->assertEquals(Work::count(), $worksCount - 1);
    }

    /** @test */
    public function it_can_filter_works_by_name()
    {
        $this->actingAsAdmin();

        Work::factory()->create([
            'name' => 'Foo',
        ]);

        Work::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.works.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('works.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
