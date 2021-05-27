<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Astrotomic\Translatable\Validation\RuleFactory;

class OfferRequest extends FormRequest
{
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
        return RuleFactory::make([
            '%name%' => ['required', 'string', 'max:255'],
            'discount_type' => ['required'],
            'discount_value' => ['required'],
            'limit' => ['required'],
            'from' => ['required'],
            'to' => ['required'],
            'type' => ['required'],
            'branch_type' => ['required'],
        ]);
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return RuleFactory::make(trans('offers.attributes'));
    }
}
