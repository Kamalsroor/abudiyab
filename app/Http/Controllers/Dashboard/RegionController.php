<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Region;
use App\Models\Branch;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\RegionRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RegionController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * RegionController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Region::class, 'region');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::filter()->paginate();

        return view('dashboard.regions.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = Branch::get()->pluck('name','id');
        return view('dashboard.regions.create',compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\RegionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(RegionRequest $request)
    {
        $region = Region::create($request->all());
        if ( $request->has('master_id')) {
            $branch = Branch::find($request->master_id);
            $branch->code = $region->id ;
            $branch->save();
        }
        flash(trans('regions.messages.created'));

        return redirect()->route('dashboard.regions.show', $region);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Region $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        return view('dashboard.regions.show', compact('region'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Region $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        $branches = Branch::get()->pluck('name','id');
        return view('dashboard.regions.edit', compact('region','branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\RegionRequest $request
     * @param \App\Models\Region $region
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(RegionRequest $request, Region $region)
    {
        $region->update($request->all());
        if ( $request->has('master_id')) {
            $branch = Branch::find($request->master_id);
            $branch->code = $region->id ;
            $branch->save();
        }
        flash(trans('regions.messages.updated'));

        return redirect()->route('dashboard.regions.show', $region);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Region $region
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Region $region)
    {
        $region->delete();

        flash(trans('regions.messages.deleted'));

        return redirect()->route('dashboard.regions.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Region::class);

        $regions = Region::onlyTrashed()->paginate();

        return view('dashboard.regions.trashed', compact('regions'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Region $region
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Region $region)
    {
        return view('dashboard.regions.show', compact('region'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Region $region
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Region $region)
    {
        $this->authorize('restore', $region);

        $region->restore();

        flash()->success(trans('regions.messages.restored'));

        return redirect()->route('dashboard.regions.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Region $region
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Region $region)
    {
        $this->authorize('forceDelete', $region);

        $region->forceDelete();

        flash(trans('regions.messages.deleted'));

        return redirect()->route('dashboard.regions.trashed');
    }
}
