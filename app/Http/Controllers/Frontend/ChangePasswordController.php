<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use App\Models\ResetPasswordCode;
use Illuminate\Auth\Events\Login;
use App\Models\ResetPasswordToken;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Requests\Api\ResetPasswordRequest;
use App\Http\Requests\Api\ForgetPasswordRequest;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Notifications\Accounts\PasswordUpdatedNotification;
use App\Http\Requests\Api\ResetPasswordCodeRequest;
use App\Notifications\Accounts\SendForgetPasswordCodeNotification;

class ChangePasswordController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Send the forget password code to the user.
     *
     * @param \App\Http\Requests\Api\ForgetPasswordRequest $request
     * @throws \Illuminate\Validation\ValidationException
     * @return \Illuminate\Http\JsonResponse
     */
    public function forget(ForgetPasswordRequest $request)
    {
        $user = User::where(function (Builder $query) use ($request) {
            $query->where('email', $request->username);
            $query->orWhere('phone', $request->username);
        })->first();

        if (! $user) {
            throw ValidationException::withMessages([
                'username' => [trans('auth.failed')],
            ]);
        }

        $resetPasswordCode = ResetPasswordCode::updateOrCreate([
            'username' => $request->username,
        ], [
            'username' => $request->username,
            'code' => Str::random(6),
        ]);

        try {
            $user->notify(new SendForgetPasswordCodeNotification($resetPasswordCode->code));
        } catch (\Exception $exception) {
            return response()->json(['msg' => 'error']);
        }

        return [$request->username,$resetPasswordCode->code];
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
            return false;
        }

        $resetPasswordCode->delete();

        ResetPasswordToken::forceCreate([
            'user_id' => $user->id,
            'token' => $token = Str::random(80),
        ]);

        return $token;
    }

    public function reset(ResetPasswordRequest $request)
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
            'password' => Hash::make($request->password),
        ]);

        try {
            $user->notify(new PasswordUpdatedNotification());
        } catch (\Exception $exception) {

        }

        event(new Login('sanctum', $user, false));

        $resetPasswordToken->delete();

        return true;
    }
}
