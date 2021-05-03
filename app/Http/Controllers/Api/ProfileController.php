<?php

namespace App\Http\Controllers\Api;

use Illuminate\Routing\Controller;
use App\Http\Requests\Api\ProfileRequest;
use App\Models\Custmerrequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ProfileController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Display the authenticated user resource.
     *
     * @return \Illuminate\Http\Resources\Json\JsonResource
     */
    public function show()
    {
        return auth()->user()->getResource();
    }

    /**
     * Update the authenticated user profile.
     *
     * @param \App\Http\Requests\Api\ProfileRequest $request
     * @return \Illuminate\Http\Resources\Json\JsonResource
     */
    public function update(ProfileRequest $request)
    {

        $user = auth()->user();
        $user->update($request->allWithHashedPassword());

        if ($request->hasFile('avatar')) {
            $user->addMediaFromRequest('avatar')
                ->toMediaCollection('avatars');
        }
        if($request->hasFile('identityFace')||
            $request->hasFile('identityBack')||
            $request->hasFile('licenceFace')||
            $request->hasFile('licenceBack')
        )
        {
            $CustmerRequest = Custmerrequest::create([
                'user_id' => $user->id,
            ]);

            if ($request->hasFile('identityFace')) {
                $CustmerRequest->addMediaFromRequest('identityFace')->toMediaCollection('identityFace');
            }
            if ($request->hasFile('identityBack')) {
                $CustmerRequest->addMediaFromRequest('identityBack')->toMediaCollection('identityBack');
            }
            if ($request->hasFile('licenceFace')) {
                $CustmerRequest->addMediaFromRequest('licenceFace')->toMediaCollection('licenceFace');
            }
            if ($request->hasFile('licenceBack')) {
                $CustmerRequest->addMediaFromRequest('licenceBack')->toMediaCollection('licenceBack');
            }
        }

        return $user->refresh()->getResource();
    }
}
