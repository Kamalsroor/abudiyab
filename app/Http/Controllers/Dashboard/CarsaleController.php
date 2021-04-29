<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Carsale;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\CarsaleRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CarsaleController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * CarsaleController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Carsale::class, 'carsale');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carsales = Carsale::filter()->paginate();

        return view('dashboard.carsales.index', compact('carsales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.carsales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\CarsaleRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CarsaleRequest $request)
    {
        $carsale = Carsale::create($request->all());

        flash(trans('carsales.messages.created'));

        return redirect()->route('dashboard.carsales.show', $carsale);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Carsale $carsale
     * @return \Illuminate\Http\Response
     */
    public function show(Carsale $carsale)
    {
        return view('dashboard.carsales.show', compact('carsale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Carsale $carsale
     * @return \Illuminate\Http\Response
     */
    public function edit(Carsale $carsale)
    {
        return view('dashboard.carsales.edit', compact('carsale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\CarsaleRequest $request
     * @param \App\Models\Carsale $carsale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CarsaleRequest $request, Carsale $carsale)
    {
        $carsale->update($request->all());

        flash(trans('carsales.messages.updated'));

        return redirect()->route('dashboard.carsales.show', $carsale);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Carsale $carsale
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Carsale $carsale)
    {
        $carsale->delete();

        flash(trans('carsales.messages.deleted'));

        return redirect()->route('dashboard.carsales.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Carsale::class);

        $carsales = Carsale::onlyTrashed()->paginate();

        return view('dashboard.carsales.trashed', compact('carsales'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Carsale $carsale
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Carsale $carsale)
    {
        return view('dashboard.carsales.show', compact('carsale'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Carsale $carsale
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Carsale $carsale)
    {
        $this->authorize('restore', $carsale);

        $carsale->restore();

        flash()->success(trans('carsales.messages.restored'));

        return redirect()->route('dashboard.carsales.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Carsale $carsale
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Carsale $carsale)
    {
        $this->authorize('forceDelete', $carsale);

        $carsale->forceDelete();

        flash(trans('carsales.messages.deleted'));

        return redirect()->route('dashboard.carsales.trashed');
    }
}
