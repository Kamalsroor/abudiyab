<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\WorkCandidates;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\Feedback\FeedbackRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class WorkCandidatesController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * FeedbackController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(WorkCandidates::class, 'application');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = WorkCandidates::paginate();

        return view('dashboard.applications.index', compact('applications'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Feedback $feedback
     * @return \Illuminate\Http\Response
     */
    public function show(WorkCandidates $application)
    {
        $application->markAsRead();
        return view('dashboard.applications.show', compact('application'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\WorkCandidates $feedback
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(WorkCandidates $application)
    {
        $application->delete();

        flash(trans('applications.messages.deleted'));

        return redirect()->route('dashboard.applications.index');
    }

    /**
     * Mark the selected messages as read.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function read(Request $request)
    {
        WorkCandidates::query()
            ->whereIn('id', $request->input('items', []))
            ->update(['read_at' => now()]);

        return redirect()->route('dashboard.applications.index');
    }

    /**
     * Mark the selected messages as unread.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function unread(Request $request)
    {
        WorkCandidates::query()
            ->whereIn('id', $request->input('items', []))
            ->update(['read_at' => null]);

        return redirect()->route('dashboard.applications.index');
    }
}
