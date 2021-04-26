<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Membership;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\MembershipRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MembershipController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * MembershipController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Membership::class, 'membership');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberships = Membership::filter()->paginate();

        return view('dashboard.memberships.index', compact('memberships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.memberships.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\MembershipRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MembershipRequest $request)
    {
        $membership = Membership::create($request->all());

        $membership->addAllMediaFromTokens();

        flash(trans('memberships.messages.created'));

        return redirect()->route('dashboard.memberships.show', $membership);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Membership $membership
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
        return view('dashboard.memberships.show', compact('membership'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Membership $membership
     * @return \Illuminate\Http\Response
     */
    public function edit(Membership $membership)
    {
        return view('dashboard.memberships.edit', compact('membership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\MembershipRequest $request
     * @param \App\Models\Membership $membership
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MembershipRequest $request, Membership $membership)
    {
        $membership->update($request->all());

        $membership->addAllMediaFromTokens();

        flash(trans('memberships.messages.updated'));

        return redirect()->route('dashboard.memberships.show', $membership);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Membership $membership
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Membership $membership)
    {
        $membership->delete();

        flash(trans('memberships.messages.deleted'));

        return redirect()->route('dashboard.memberships.index');
    }

   /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Membership::class);

        $memberships = Membership::onlyTrashed()->paginate();

        return view('dashboard.memberships.trashed', compact('memberships'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Membership $membership
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Membership $membership)
    {
        return view('dashboard.memberships.show', compact('membership'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Membership $membership
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Membership $membership)
    {
        $this->authorize('restore', $membership);

        $membership->restore();

        flash()->success(trans('memberships.messages.restored'));

        return redirect()->route('dashboard.memberships.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Membership $membership
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Membership $membership)
    {
        $this->authorize('forceDelete', $membership);

        $membership->forceDelete();

        flash(trans('memberships.messages.deleted'));

        return redirect()->route('dashboard.memberships.trashed');
    }
}
