<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Purchaserequest;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\PurchaserequestRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PurchaserequestController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * PurchaserequestController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Purchaserequest::class, 'purchaserequest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchaserequests = Purchaserequest::filter()->paginate();

        return view('dashboard.purchaserequests.index', compact('purchaserequests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.purchaserequests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\PurchaserequestRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PurchaserequestRequest $request)
    {
        $purchaserequest = Purchaserequest::create($request->all());

        flash(trans('purchaserequests.messages.created'));

        return redirect()->route('dashboard.purchaserequests.show', $purchaserequest);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Purchaserequest $purchaserequest
     * @return \Illuminate\Http\Response
     */
    public function show(Purchaserequest $purchaserequest)
    {
        return view('dashboard.purchaserequests.show', compact('purchaserequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Purchaserequest $purchaserequest
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchaserequest $purchaserequest)
    {
        return view('dashboard.purchaserequests.edit', compact('purchaserequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\PurchaserequestRequest $request
     * @param \App\Models\Purchaserequest $purchaserequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PurchaserequestRequest $request, Purchaserequest $purchaserequest)
    {
        $purchaserequest->update($request->all());

        flash(trans('purchaserequests.messages.updated'));

        return redirect()->route('dashboard.purchaserequests.show', $purchaserequest);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Purchaserequest $purchaserequest
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Purchaserequest $purchaserequest)
    {
        $purchaserequest->delete();

        flash(trans('purchaserequests.messages.deleted'));

        return redirect()->route('dashboard.purchaserequests.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Purchaserequest::class);

        $purchaserequests = Purchaserequest::onlyTrashed()->paginate();

        return view('dashboard.purchaserequests.trashed', compact('purchaserequests'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Purchaserequest $purchaserequest
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Purchaserequest $purchaserequest)
    {
        return view('dashboard.purchaserequests.show', compact('purchaserequest'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Purchaserequest $purchaserequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Purchaserequest $purchaserequest)
    {
        $this->authorize('restore', $purchaserequest);

        $purchaserequest->restore();

        flash()->success(trans('purchaserequests.messages.restored'));

        return redirect()->route('dashboard.purchaserequests.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Purchaserequest $purchaserequest
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Purchaserequest $purchaserequest)
    {
        $this->authorize('forceDelete', $purchaserequest);

        $purchaserequest->forceDelete();

        flash(trans('purchaserequests.messages.deleted'));

        return redirect()->route('dashboard.purchaserequests.trashed');
    }
}
