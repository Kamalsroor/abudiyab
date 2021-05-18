<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Custmerrequest;
use Illuminate\Routing\Controller;
use App\Http\Requests\Dashboard\CustmerrequestRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Support\Sms;

class CustmerrequestController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * CustmerrequestController constructor.
     */
    public function __construct()
    {
        $this->authorizeResource(Custmerrequest::class, 'custmerrequest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $custmerrequests = Custmerrequest::filter()->orderBy('created_at','desc')->paginate();

        return view('dashboard.custmerrequests.index', compact('custmerrequests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.custmerrequests.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\CustmerrequestRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CustmerrequestRequest $request)
    {
        $custmerrequest = Custmerrequest::create($request->all());

        $custmerrequest->addAllMediaFromTokens();

        flash(trans('custmerrequests.messages.created'));

        return redirect()->route('dashboard.custmerrequests.show', $custmerrequest);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Custmerrequest $custmerrequest
     * @return \Illuminate\Http\Response
     */
    public function show(Custmerrequest $custmerrequest)
    {
        return view('dashboard.custmerrequests.show', compact('custmerrequest'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Custmerrequest $custmerrequest
     * @return \Illuminate\Http\Response
     */
    public function edit(Custmerrequest $custmerrequest)
    {
        return view('dashboard.custmerrequests.edit', compact('custmerrequest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\Dashboard\CustmerrequestRequest $request
     * @param \App\Models\Custmerrequest $custmerrequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CustmerrequestRequest $request, Custmerrequest $custmerrequest)
    {

        $custmerrequest->update(array_merge(
            $request->all(),
            ['is_confirmed' =>'confirmed']
        ));
        $custmerrequest->addAllMediaFromTokens();
        $smsText = "تم الموافقه علي طلب تعديل البيانات لرقم {$custmerrequest->customer->phone} في موقع ابو ذياب لتأجير السيارات ";
        $sms = Sms::SendSms($custmerrequest->customer->phone ,$smsText );


        flash(trans('custmerrequests.messages.updated'));

        return redirect()->route('dashboard.custmerrequests.show', $custmerrequest);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Custmerrequest $custmerrequest
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request , Custmerrequest $custmerrequest)
    {
        $custmerrequest->update(array_merge(['description' =>$request->description],['is_confirmed' =>'rejected'])
        );
        flash(trans('custmerrequests.messages.deleted'));

        return redirect()->route('dashboard.custmerrequests.index');
    }



   /**
     * Display a listing of the trashed resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trashed()
    {
        $this->authorize('viewTrash', Custmerrequest::class);

        $custmerrequests = Custmerrequest::onlyTrashed()->paginate();

        return view('dashboard.custmerrequests.trashed', compact('custmerrequests'));
    }

    /**
     * Display the specified trashed resource.
     *
     * @param \App\Models\Custmerrequest $custmerrequest
     * @return \Illuminate\Http\Response
     */
    public function showTrashed(Custmerrequest $custmerrequest)
    {
        return view('dashboard.custmerrequests.show', compact('custmerrequest'));
    }

    /**
     * Restore the trashed resource.
     *
     * @param \App\Models\Custmerrequest $custmerrequest
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore(Custmerrequest $custmerrequest)
    {
        $this->authorize('restore', $custmerrequest);

        $custmerrequest->restore();

        flash()->success(trans('custmerrequests.messages.restored'));

        return redirect()->route('dashboard.custmerrequests.trashed');
    }

    /**
     * Force delete the specified resource from storage.
     *
     * @param \App\Models\Custmerrequest $custmerrequest
     * @throws \Exception
     * @return \Illuminate\Http\RedirectResponse
     */
    public function forceDelete(Custmerrequest $custmerrequest)
    {
        $this->authorize('forceDelete', $custmerrequest);

        $custmerrequest->forceDelete();

        flash(trans('custmerrequests.messages.deleted'));

        return redirect()->route('dashboard.custmerrequests.trashed');
    }



}
