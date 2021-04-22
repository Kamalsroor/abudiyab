<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Work;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\WorkRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WorkController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * WorkController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Work::class, 'work');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $works = Work::filter()->paginate();

        return view('dashboard.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.works.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\WorkRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(WorkRequest $request)
    {
        $work = Work::create($request->all());

        flash(trans('works.messages.created'));

        return redirect()->route('dashboard.works.show', $work);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        return view('dashboard.works.show', compact('work'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        return view('dashboard.works.edit', compact('work'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\WorkRequest $request
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(WorkRequest $request, Work $work)
    {
        $work->update($request->all());

        flash(trans('works.messages.updated'));

        return redirect()->route('dashboard.works.show', $work);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Work $work
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Work $work)
    {
        $work->delete();

        flash(trans('works.messages.deleted'));

        return redirect()->route('dashboard.works.index');
    }

    /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Work::class);

        $works = Work::onlyTrashed()->paginate();

        return view('dashboard.works.trashed', compact('works'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Work $work)
    {
        return view('dashboard.works.show', compact('work'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Work $work
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Work $work)
    {
        $this->authorize('restore', $work);

        $work->restore();

        flash()->success(trans('works.messages.restored'));

        return redirect()->route('dashboard.works.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Work $work
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Work $work)
    {
        $this->authorize('forceDelete', $work);

        $work->forceDelete();

        flash(trans('works.messages.deleted'));

        return redirect()->route('dashboard.works.trashed');
    }
}
