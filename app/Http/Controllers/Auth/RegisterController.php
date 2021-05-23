<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use AhmedAliraqi\LaravelMediaUploader\Entities\Concerns\HasUploader;
use App\Models\Custmerrequest;
use Settings;

class RegisterController extends Controller implements HasMedia
{
    use InteractsWithMedia;
    use HasUploader;
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required','string', 'max:255'],
            'password' => ['required','confirmed', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'min:8','unique:users'],
            'identityFace' => ['required'],
            'identityBack' => ['required'],
            'licenceFace' => ['required'],
            'licenceBack' => ['required'],
        ], [], trans('dashboard.auth.register'))->validateWithBag('register');
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $newUser=User::create([
            'name' => $data['username'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'type' => User::CUSTOMER_TYPE,
            'membership_id' => Settings::get('membership_default','1'),
            'password' => Hash::make($data['password']),
        ]);


        $CustmerRequest = Custmerrequest::create([
            'user_id' => $newUser['id'],
        ]);
        $CustmerRequest->addMediaFromRequest('identityFace')->toMediaCollection('identityFace');
        $CustmerRequest->addMediaFromRequest('identityBack')->toMediaCollection('identityBack');
        $CustmerRequest->addMediaFromRequest('licenceFace')->toMediaCollection('licenceFace');
        $CustmerRequest->addMediaFromRequest('licenceBack')->toMediaCollection('licenceBack');
        return $newUser;
    }
}
