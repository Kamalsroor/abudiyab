<?php

namespace App\Http\Controllers\Frontend;

use App\Models\custmer_request;
use App\Http\Requests\frontend\CustmerRequests;
use App\Http\Requests\frontend\ChangePassword;
use App\Models\Custmerrequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CustmerRequestController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CustmerRequests $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public $image=false;
    public $user;
    public $request;
    public $previousRequest;
    public function createCustmerRequest(CustmerRequests $request)
    {
        $user = User::find(auth()->id());
        $user->name=$request->name;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->post_box=$request->post_box;
        $user->save();
        $this->user=$user;
        if($request->hasFile('identityFace')||
            $request->hasFile('identityBack')||
            $request->hasFile('licenceFace')||
            $request->hasFile('licenceBack')
        )
        {

            $CustmerRequest = Custmerrequest::create([
                'user_id' => auth()->id()
            ]);
            $this->request=$CustmerRequest;
        }

        if($request->hasFile('identityFace'))
        {
            $CustmerRequest->addMediaFromRequest('identityFace')->toMediaCollection('identityFace');
        }
        else{
            if ($this->request != null) {
                # code...
                $this->changeRequestImages('identityFace');
            }
        }

        if($request->hasFile('identityBack'))
        {
            $CustmerRequest->addMediaFromRequest('identityBack')->toMediaCollection('identityBack');
        }
        else{
            if ($this->request != null) {
            $this->changeRequestImages('identityBack');
            }
        }

        if($request->hasFile('licenceFace'))
        {
            $CustmerRequest->addMediaFromRequest('licenceFace')->toMediaCollection('licenceFace');
        }
        else{
            if ($this->request != null) {
            $this->changeRequestImages('licenceFace');
            }
        }

        if($request->hasFile('licenceBack'))
        {
            $CustmerRequest->addMediaFromRequest('licenceBack')->toMediaCollection('licenceBack');
        }
        else{
            if ($this->request != null) {
            $this->changeRequestImages('licenceBack');
            }
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
    public function changeRequestImages($name){
       if($this->image==false)
       {
           $this->previousRequest = Custmerrequest::where('user_id',auth()->id())->orderBy('created_at', 'DESC')->skip(1)->take(1)->first();

           $this->image=true;
           $this->request->addMediaFromUrl($this->previousRequest->getFirstMediaUrl($name))->toMediaCollection($name);
       }
       else{

        $this->request->addMediaFromUrl($this->previousRequest->getFirstMediaUrl($name))->toMediaCollection($name);

       }

            // dd($images->getFirstMediaUrl('licenceBack'));

    }
    public function convertBase64ToImage(Request $request)
    {
        dd($request);
        $image = $request->image;  // your base64 encoded
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        // $imageName = str_random(10).'.'.'png';
        // \File::put(storage_path(). '/' . $imageName, base64_decode($image));
    }
}
