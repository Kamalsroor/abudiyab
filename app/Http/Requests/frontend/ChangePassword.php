<?php

namespace App\Http\Requests\frontend;
use App\Rules\PasswordRule;
use App\Http\Requests\Concerns\WithHashedPassword;

use Illuminate\Foundation\Http\FormRequest;

class ChangePassword extends FormRequest
{
    use WithHashedPassword;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'old_password' => ['required_with:password', new PasswordRule(auth()->user()->password)],
            'password' => ['required','confirmed'],
        ];
    }
}
