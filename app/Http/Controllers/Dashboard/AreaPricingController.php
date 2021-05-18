<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\AreaPricing;
use App\Models\Region;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\AreaPricingRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AreaPricingController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * AreaPricingController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(AreaPricing::class, 'area_pricing');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $area_pricings_array = [];
        $area_pricings = AreaPricing::get()->groupBy('region_id');
        foreach ($area_pricings as $key => $area_pricing) {
            $area_pricings_array[$key] =  $area_pricing->groupBy('region_to_id')->toArray();
        }
        $Regions = Region::filter()->get();

        return view('dashboard.area_pricings.index', compact('area_pricings','Regions','area_pricings_array'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.area_pricings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\AreaPricingRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AreaPricingRequest $request)
    {
        foreach ($request->price as $frist_region_id => $frist_region) {
            foreach ($frist_region as $second_region => $price) {
                AreaPricing::updateOrCreate([
                    'region_id' => $frist_region_id,
                    'region_to_id' => $second_region
                ],[
                    'price' => str_replace(',' , '' , $price),
                ]);
            }
        }

        flash(trans('area_pricings.messages.created'));

        return redirect()->route('dashboard.area_pricings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\AreaPricing $area_pricing
     * @return \Illuminate\Http\Response
     */
    public function show(AreaPricing $area_pricing)
    {
        return view('dashboard.area_pricings.show', compact('area_pricing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\AreaPricing $area_pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(AreaPricing $area_pricing)
    {
        return view('dashboard.area_pricings.edit', compact('area_pricing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\AreaPricingRequest $request
     * @param \App\Models\AreaPricing $area_pricing
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AreaPricingRequest $request, AreaPricing $area_pricing)
    {
        $area_pricing->update($request->all());

        flash(trans('area_pricings.messages.updated'));

        return redirect()->route('dashboard.area_pricings.show', $area_pricing);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\AreaPricing $area_pricing
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(AreaPricing $area_pricing)
    {
        $area_pricing->delete();

        flash(trans('area_pricings.messages.deleted'));

        return redirect()->route('dashboard.area_pricings.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', AreaPricing::class);

        $area_pricings = AreaPricing::onlyTrashed()->paginate();

        return view('dashboard.area_pricings.trashed', compact('area_pricings'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\AreaPricing $area_pricing
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(AreaPricing $area_pricing)
    {
        return view('dashboard.area_pricings.show', compact('area_pricing'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\AreaPricing $area_pricing
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(AreaPricing $area_pricing)
    {
        $this->authorize('restore', $area_pricing);

        $area_pricing->restore();

        flash()->success(trans('area_pricings.messages.restored'));

        return redirect()->route('dashboard.area_pricings.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\AreaPricing $area_pricing
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(AreaPricing $area_pricing)
    {
        $this->authorize('forceDelete', $area_pricing);

        $area_pricing->forceDelete();

        flash(trans('area_pricings.messages.deleted'));

        return redirect()->route('dashboard.area_pricings.trashed');
    }
}
