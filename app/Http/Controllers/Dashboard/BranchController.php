<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Branch;
use App\Models\Region;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\BranchRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BranchController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * BranchController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Branch::class, 'branch');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branches = Branch::filter()->paginate();
        $regions = Branch::Region;

        return view('dashboard.branches.index', compact('branches','regions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = Region::get()->pluck('name','id');

        return view('dashboard.branches.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\BranchRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BranchRequest $request)
    {
        $branch = Branch::create($request->all());

        $branch->addAllMediaFromTokens();

        flash(trans('branches.messages.created'));

        return redirect()->route('dashboard.branches.show', $branch);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Branch $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
        $regions = Region::get()->pluck('name','id');

        return view('dashboard.branches.show', compact('branch','regions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Branch $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        $regions = Region::get()->pluck('name','id');

        return view('dashboard.branches.edit', compact('branch','regions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\BranchRequest $request
     * @param \App\Models\Branch $branch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BranchRequest $request, Branch $branch)
    {
        $branch->update($request->all());

        $branch->addAllMediaFromTokens();

        flash(trans('branches.messages.updated'));

        return redirect()->route('dashboard.branches.show', $branch);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Branch $branch
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();

        flash(trans('branches.messages.deleted'));

        return redirect()->route('dashboard.branches.index');
    }

   /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Branch::class);

        $branches = Branch::onlyTrashed()->paginate();

        return view('dashboard.branches.trashed', compact('branches'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Branch $branch
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Branch $branch)
    {
        return view('dashboard.branches.show', compact('branch'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Branch $branch
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Branch $branch)
    {
        $this->authorize('restore', $branch);

        $branch->restore();

        flash()->success(trans('branches.messages.restored'));

        return redirect()->route('dashboard.branches.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Branch $branch
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Branch $branch)
    {
        $this->authorize('forceDelete', $branch);

        $branch->forceDelete();

        flash(trans('branches.messages.deleted'));

        return redirect()->route('dashboard.branches.trashed');
    }
}
