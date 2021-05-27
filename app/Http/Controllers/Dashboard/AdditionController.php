<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Addition;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\AdditionRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdditionController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * AdditionController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Addition::class, 'addition');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $additions = Addition::filter()->paginate();

        return view('dashboard.additions.index', compact('additions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.additions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\AdditionRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdditionRequest $request)
    {
        // dd($request->all());
        $addition = Addition::create($request->all());

        $addition->addMediaFromBase64($request->img_base64)->toMediaCollection('default');

        flash(trans('additions.messages.created'));

        return redirect()->route('dashboard.additions.show', $addition);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Addition $addition
     * @return \Illuminate\Http\Response
     */
    public function show(Addition $addition)
    {
        return view('dashboard.additions.show', compact('addition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Addition $addition
     * @return \Illuminate\Http\Response
     */
    public function edit(Addition $addition)
    {
        return view('dashboard.additions.edit', compact('addition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\AdditionRequest $request
     * @param \App\Models\Addition $addition
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AdditionRequest $request, Addition $addition)
    {
        $addition->update($request->all());

        // $addition->addAllMediaFromTokens();
        if($request->img_base64){
            $addition->addMediaFromBase64($request->img_base64)->toMediaCollection('default');
        }

        flash(trans('additions.messages.updated'));

        return redirect()->route('dashboard.additions.show', $addition);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Addition $addition
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Addition $addition)
    {
        $addition->delete();

        flash(trans('additions.messages.deleted'));

        return redirect()->route('dashboard.additions.index');
    }

   /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Addition::class);

        $additions = Addition::onlyTrashed()->paginate();

        return view('dashboard.additions.trashed', compact('additions'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Addition $addition
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Addition $addition)
    {
        return view('dashboard.additions.show', compact('addition'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Addition $addition
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Addition $addition)
    {
        $this->authorize('restore', $addition);

        $addition->restore();

        flash()->success(trans('additions.messages.restored'));

        return redirect()->route('dashboard.additions.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Addition $addition
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Addition $addition)
    {
        $this->authorize('forceDelete', $addition);

        $addition->forceDelete();

        flash(trans('additions.messages.deleted'));

        return redirect()->route('dashboard.additions.trashed');
    }
}
