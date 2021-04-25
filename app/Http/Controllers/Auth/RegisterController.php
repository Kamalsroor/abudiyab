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
            'name ' => ['required', 'string', 'max:255'],
            'password' => ['required','confirmed', 'max:255'],
            'id_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'min:8','unique:users']
        ], [], trans('dashboard.auth.register'));
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
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'id_number' => $data['id_number'],
            'type' => User::CUSTOMER_TYPE,
            'password' => Hash::make($data['password']),
        ]);
        $newUser->addMediaFromRequest('identity')->toMediaCollection('identity');
        $newUser->addMediaFromRequest('licence')->toMediaCollection('licence');
        return $newUser;

    }
}
