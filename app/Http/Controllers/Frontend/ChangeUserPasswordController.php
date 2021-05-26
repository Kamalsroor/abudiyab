<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\Api\ForgetPasswordRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use App\Models\ResetPasswordCode;
use Illuminate\Support\Str;
use App\Notifications\Accounts\SendForgetPasswordCodeNotification;
use App\Http\Requests\Api\ResetPasswordCodeRequest;
use App\Models\ResetPasswordToken;
use App\Http\Requests\Api\ResetPasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Login;
use App\Notifications\Accounts\PasswordUpdatedNotification;

class ChangeUserPasswordController extends Controller
{
    //
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
            return false;
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
            return false;
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
