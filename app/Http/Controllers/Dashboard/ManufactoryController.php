<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Manufactory;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\ManufactoryRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ManufactoryController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * ManufactoryController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Manufactory::class, 'manufactory');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufactories = Manufactory::filter()->paginate();

        return view('dashboard.manufactories.index', compact('manufactories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.manufactories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\ManufactoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ManufactoryRequest $request)
    {
        $manufactory = Manufactory::create($request->all());

        $manufactory->addAllMediaFromTokens();

        flash(trans('manufactories.messages.created'));

        return redirect()->route('dashboard.manufactories.show', $manufactory);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Manufactory $manufactory
     * @return \Illuminate\Http\Response
     */
    public function show(Manufactory $manufactory)
    {
        return view('dashboard.manufactories.show', compact('manufactory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Manufactory $manufactory
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufactory $manufactory)
    {
        return view('dashboard.manufactories.edit', compact('manufactory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\ManufactoryRequest $request
     * @param \App\Models\Manufactory $manufactory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ManufactoryRequest $request, Manufactory $manufactory)
    {
        $manufactory->update($request->all());

        $manufactory->addAllMediaFromTokens();

        flash(trans('manufactories.messages.updated'));

        return redirect()->route('dashboard.manufactories.show', $manufactory);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Manufactory $manufactory
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Manufactory $manufactory)
    {
        $manufactory->delete();

        flash(trans('manufactories.messages.deleted'));

        return redirect()->route('dashboard.manufactories.index');
    }

   /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Manufactory::class);

        $manufactories = Manufactory::onlyTrashed()->paginate();

        return view('dashboard.manufactories.trashed', compact('manufactories'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Manufactory $manufactory
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Manufactory $manufactory)
    {
        return view('dashboard.manufactories.show', compact('manufactory'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Manufactory $manufactory
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Manufactory $manufactory)
    {
        $this->authorize('restore', $manufactory);

        $manufactory->restore();

        flash()->success(trans('manufactories.messages.restored'));

        return redirect()->route('dashboard.manufactories.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Manufactory $manufactory
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Manufactory $manufactory)
    {
        $this->authorize('forceDelete', $manufactory);

        $manufactory->forceDelete();

        flash(trans('manufactories.messages.deleted'));

        return redirect()->route('dashboard.manufactories.trashed');
    }
}
