<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Mediacenter;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\MediacenterRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class MediacenterController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * MediacenterController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Mediacenter::class, 'mediacenter');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediacenters = Mediacenter::filter()->paginate();

        return view('dashboard.mediacenters.index', compact('mediacenters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mediacenters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\MediacenterRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(MediacenterRequest $request)
    {
        $mediacenter = Mediacenter::create($request->all());

        $mediacenter->addAllMediaFromTokens();

        flash(trans('mediacenters.messages.created'));

        return redirect()->route('dashboard.mediacenters.show', $mediacenter);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Mediacenter $mediacenter
     * @return \Illuminate\Http\Response
     */
    public function show(Mediacenter $mediacenter)
    {
        return view('dashboard.mediacenters.show', compact('mediacenter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Mediacenter $mediacenter
     * @return \Illuminate\Http\Response
     */
    public function edit(Mediacenter $mediacenter)
    {
        return view('dashboard.mediacenters.edit', compact('mediacenter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\MediacenterRequest $request
     * @param \App\Models\Mediacenter $mediacenter
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(MediacenterRequest $request, Mediacenter $mediacenter)
    {
        $mediacenter->update($request->all());

        $mediacenter->addAllMediaFromTokens();

        flash(trans('mediacenters.messages.updated'));

        return redirect()->route('dashboard.mediacenters.show', $mediacenter);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Mediacenter $mediacenter
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Mediacenter $mediacenter)
    {
        $mediacenter->delete();

        flash(trans('mediacenters.messages.deleted'));

        return redirect()->route('dashboard.mediacenters.index');
    }

   /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Mediacenter::class);

        $mediacenters = Mediacenter::onlyTrashed()->paginate();

        return view('dashboard.mediacenters.trashed', compact('mediacenters'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Mediacenter $mediacenter
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Mediacenter $mediacenter)
    {
        return view('dashboard.mediacenters.show', compact('mediacenter'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Mediacenter $mediacenter
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Mediacenter $mediacenter)
    {
        $this->authorize('restore', $mediacenter);

        $mediacenter->restore();

        flash()->success(trans('mediacenters.messages.restored'));

        return redirect()->route('dashboard.mediacenters.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Mediacenter $mediacenter
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Mediacenter $mediacenter)
    {
        $this->authorize('forceDelete', $mediacenter);

        $mediacenter->forceDelete();

        flash(trans('mediacenters.messages.deleted'));

        return redirect()->route('dashboard.mediacenters.trashed');
    }
}
