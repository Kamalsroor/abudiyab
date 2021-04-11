<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Partner;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\PartnerRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PartnerController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * PartnerController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Partner::class, 'partner');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::filter()->paginate();

        return view('dashboard.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\PartnerRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PartnerRequest $request)
    {
        $partner = Partner::create($request->all());

        $partner->addAllMediaFromTokens();

        flash(trans('partners.messages.created'));

        return redirect()->route('dashboard.partners.show', $partner);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        return view('dashboard.partners.show', compact('partner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('dashboard.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\PartnerRequest $request
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PartnerRequest $request, Partner $partner)
    {
        $partner->update($request->all());

        $partner->addAllMediaFromTokens();

        flash(trans('partners.messages.updated'));

        return redirect()->route('dashboard.partners.show', $partner);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Partner $partner
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Partner $partner)
    {
        $partner->delete();

        flash(trans('partners.messages.deleted'));

        return redirect()->route('dashboard.partners.index');
    }

   /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Partner::class);

        $partners = Partner::onlyTrashed()->paginate();

        return view('dashboard.partners.trashed', compact('partners'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Partner $partner)
    {
        return view('dashboard.partners.show', compact('partner'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Partner $partner
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Partner $partner)
    {
        $this->authorize('restore', $partner);

        $partner->restore();

        flash()->success(trans('partners.messages.restored'));

        return redirect()->route('dashboard.partners.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Partner $partner
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Partner $partner)
    {
        $this->authorize('forceDelete', $partner);

        $partner->forceDelete();

        flash(trans('partners.messages.deleted'));

        return redirect()->route('dashboard.partners.trashed');
    }
}
