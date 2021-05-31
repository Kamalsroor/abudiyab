<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\ResetPasswordCode;
use Illuminate\Auth\Events\Login;
use App\Models\ResetPasswordToken;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\Api\ResetOldUserRequest;
use App\Http\Requests\Api\ForgetOldUserRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Notifications\Accounts\PasswordUpdatedNotification;
use App\Http\Requests\Api\ResetPasswordCodeRequest;
use App\Notifications\Accounts\SendForgetPasswordCodeNotification;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

class OldCustomerController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Send the forget password code to the user.
     *
     * @param \App\Http\Requests\Api\ForgetOldUserRequest $request
     * @throws \Illuminate\Validation\ValidationException
     * @return \Illuminate\Http\JsonResponse
     */
    public function forget(ForgetOldUserRequest $request)
    {

        $user = User::where(function (Builder $query) use ($request) {
            // $query->where('email', $request->id_number);
            $query->Where('phone', $request->phone_number);
        })->first();


        if (! $user) {
            throw ValidationException::withMessages([
                'phone_number' => [trans('auth.failed-old-user-forget')],
            ]);
        }

        $resetPasswordCode = ResetPasswordCode::Create( [
            'username' => $request->phone_number,
            // 'code' => Str::random(6),
            'code' => rand(100000 , 999999),
        ]);

        try {
            $smsText = trans('auth.messages.sent-old-user-code' , [
                'code' => $resetPasswordCode->code,
            ]) ;
                // dd($smsText);
            // $smsPhone = "+966554001171";
            $smsPhone = "+966".$request->phone_number;
            // dd($smsPhone);
            // $smsPhone = "+201012316954";

            $client = new Client();
            $res = $client->get('http://sms.netpowers.net/http/api.php?id=abudiyab&password=abu@net0029&to='.$smsPhone.'&sender=AbuDiyab-AD&msg='.$smsText);

            // $user->notify(new SendForgetPasswordCodeNotification($resetPasswordCode->code));
        } catch (\Exception $exception) {
        }

        if (app()->environment('local')) {
            Storage::disk('public')->append(
                'verification.txt',
                "The reset password code for user {$request->username} is {$resetPasswordCode->code} generated at ".now()->toDateTimeString()."\n"
            );
        }

        return response()->json([
            'message' => trans('auth.messages.forget-old-user-code-sent' , [
                'number' => $request->phone_number,
            ]),
            'links' => [
                'code' => [
                    'href' => route('api.password.code'),
                    'method' => 'POST',
                ],
            ],
        ]);
    }

    /**
     * Get the reset password token using verification code.
     *
     * @param \App\Http\Requests\Api\ResetPasswordCodeRequest $request
     * @throws \Illuminate\Validation\ValidationException
     * @return \Illuminate\Http\JsonResponse
     */
    public function code(ResetPasswordCodeRequest $request)
    {
        $resetPasswordCode = ResetPasswordCode::where('username', $request->username)
            ->where('code', $request->code)
            ->first();
        $user = User::where(function (Builder $query) use ($request) {
            $query->where('email', $request->username);
            $query->orWhere('phone', $request->username);
        })->first();
        if (! $resetPasswordCode || $resetPasswordCode->isExpired() || ! $user) {
            throw ValidationException::withMessages([
                'code' => [
                    trans('auth.failed-code-forget')
                ],
            ]);
        }

        $resetPasswordCode->delete();

        ResetPasswordToken::forceCreate([
            'user_id' => $user->id,
            'token' => $token = Str::random(80),
        ]);

        return response()->json([
            'reset_token' => $token,
            'links' => [
                'reset' => [
                    'href' => route('api.password.reset'),
                    'method' => 'POST',
                ],
            ],
        ]);
    }

    public function reset(ResetOldUserRequest $request)
    {
        $resetPasswordToken = ResetPasswordToken::where($request->only('token'))->first();

        if (! $resetPasswordToken || $resetPasswordToken->isExpired()) {
            throw ValidationException::withMessages([
                'token' => [
                    trans('validation.exists', [
                        'attribute' => trans('auth.attributes.token'),
                    ]),
                ],
            ]);
        }

        $user = $resetPasswordToken->user;

        $user->update([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        try {
            $smsText = trans('auth.messages.reset-old-user-data') ;
                // dd($smsText);
            // $smsPhone = "+966554001171";
            // $smsPhone = "+966556622715";
            // $smsPhone = "+966557435335";
            $smsPhone = "+966".$user->phone;
            // dd($smsPhone);
            // $smsPhone = "+201012316954";

            $client = new Client();
            $res = $client->get('http://sms.netpowers.net/http/api.php?id=abudiyab&password=abu@net0029&to='.$smsPhone.'&sender=AbuDiyab-AD&msg='.$smsText);
        } catch (\Exception $exception) {
        }

        $resetPasswordToken->delete();
        if (Auth::attempt(['email' => $user->email ,'password' => $request->password])) {
            $attempt=true;
        }

        return $user->getResource()->additional([
            'attempt'=>$attempt,
            'user_id'=> Auth()->id(),
            'token' => $user->createTokenForDevice(
                $request->header('user-agent')
            ),
        ]);
    }
}
