<?php

namespace App\Http\Controllers\Frontend;

use App\Models\custmer_request;
use App\Http\Requests\frontend\CustmerRequests;
use App\Http\Requests\frontend\ChangePassword;
use App\Models\Custmerrequest;
use App\Models\User;
use Illuminate\Routing\Controller;

class CustmerRequestController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CustmerRequests $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createCustmerRequest(CustmerRequests $request)
    {

        $user = User::find(auth()->id());
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->post_box=$request->post_box;
        $user->save();
        if($request->hasFile('identityFace')||
            $request->hasFile('identityBack')||
            $request->hasFile('licenceFace')||
            $request->hasFile('licenceBack')
        )
        {

            $CustmerRequest = Custmerrequest::create([
                'user_id' => auth()->id()
            ]);
        }

        if($request->hasFile('identityFace'))
        {
            $CustmerRequest->addMediaFromRequest('identityFace')->toMediaCollection('identityFace');
        }
        if($request->hasFile('identityBack'))
        {
            $CustmerRequest->addMediaFromRequest('identityBack')->toMediaCollection('identityBack');

        }
        if($request->hasFile('licenceFace'))
        {
            $CustmerRequest->addMediaFromRequest('licenceFace')->toMediaCollection('licenceFace');
        }
        if($request->hasFile('licenceBack'))
        {
            $CustmerRequest->addMediaFromRequest('licenceBack')->toMediaCollection('licenceBack');
        }
        flash()->overlay(" ", 'تم تعديل البيانات بنجاح');

        return redirect(route('front.profile'));
    }
    public function changePassword(ChangePassword $request)
    {
        $user = auth()->user();
        $user->update($request->allWithHashedPassword());
        flash()->overlay(" ", 'تم تغير كلمه السر');

        return redirect(route('front.profile'));
    }
}
