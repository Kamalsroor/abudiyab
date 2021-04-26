<?php

namespace App\Http\Controllers\Frontend;

use App\Models\custmer_request;
use App\Http\Requests\frontend\CustmerRequests;
use App\Http\Requests\frontend\ChangePassword;
use App\Models\CustmerRequest;
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
        $CustmerRequest = CustmerRequest::create([
            'user_id' => auth()->id()
        ]);
        $user = User::find(auth()->id());
        $user->name=$request['name'];
        $user->phone=$request['phone'];
        $user->email=$request['email'];
        $user->post_box=$request['post_box'];
        $user->save();
        if($request['identityFace'])
        {
            $CustmerRequest->addMediaFromRequest('identityFace')->toMediaCollection('identityFace');
        }
        if($request['identityBack'])
        {
            $CustmerRequest->addMediaFromRequest('identityBack')->toMediaCollection('identityBack');

        }
        if($request['licenceFace'])
        {
            $CustmerRequest->addMediaFromRequest('licenceFace')->toMediaCollection('licenceFace');
        }
        if($request['licenceBack'])
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
