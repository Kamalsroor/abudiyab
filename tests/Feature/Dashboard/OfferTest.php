<?php

namespace Tests\Feature\Dashboard;

use Tests\TestCase;
use App\Models\Offer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Astrotomic\Translatable\Validation\RuleFactory;

class OfferTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_display_a_list_of_offers()
    {
        $this->actingAsAdmin();

        Offer::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.offers.index'))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_the_offer_details()
    {
        $this->actingAsAdmin();

        $offer = Offer::factory()->create(['name' => 'Foo']);

        $this->get(route('dashboard.offers.show', $offer))
            ->assertSuccessful()
            ->assertSee('Foo');
    }

    /** @test */
    public function it_can_display_offers_create_form()
    {
        $this->actingAsAdmin();

        $this->get(route('dashboard.offers.create'))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_create_a_new_offer()
    {
        $this->actingAsAdmin();

        $offersCount = Offer::count();

        $response = $this->post(
            route('dashboard.offers.store'),
            Offer::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $response->assertRedirect();

        $offer = Offer::all()->last();

        $this->assertEquals(Offer::count(), $offersCount + 1);

        $this->assertEquals($offer->name, 'Foo');
    }

    /** @test */
    public function it_can_display_the_offers_edit_form()
    {
        $this->actingAsAdmin();

        $offer = Offer::factory()->create();

        $this->get(route('dashboard.offers.edit', $offer))
            ->assertSuccessful();
    }

    /** @test */
    public function it_can_update_the_offer()
    {
        $this->actingAsAdmin();

        $offer = Offer::factory()->create();

        $response = $this->put(
            route('dashboard.offers.update', $offer),
            Offer::factory()->raw(
                RuleFactory::make([
                    '%name%' => 'Foo',
                ])
            )
        );

        $offer->refresh();

        $response->assertRedirect();

        $this->assertEquals($offer->name, 'Foo');
    }

    /** @test */
    public function it_can_delete_the_offer()
    {
        $this->actingAsAdmin();

        $offer = Offer::factory()->create();

        $offersCount = Offer::count();

        $response = $this->delete(route('dashboard.offers.destroy', $offer));

        $response->assertRedirect();

        $this->assertEquals(Offer::count(), $offersCount - 1);
    }

    /** @test */
    public function it_can_filter_offers_by_name()
    {
        $this->actingAsAdmin();

        Offer::factory()->create([
            'name' => 'Foo',
        ]);

        Offer::factory()->create([
            'name' => 'Bar',
        ]);

        $this->get(route('dashboard.offers.index', [
            'name' => 'Fo',
        ]))
            ->assertSuccessful()
            ->assertSee(trans('offers.filter'))
            ->assertSee('Foo')
            ->assertDontSee('Bar');
    }
}
