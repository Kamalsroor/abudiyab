<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Astrotomic\Translatable\Validation\RuleFactory;

class MembershipRequest extends FormRequest
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
            'rental_discount' => ['min:0','max:100','numeric'],
            'ratio_points' => ['min:0','numeric'],
            'extra_hours' => ['min:0','numeric'],
            'allowed_Kilos' => ['min:0','numeric'],
            'delivery_discount_regions' => ['min:0','max:100','numeric'],
        ]);
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return RuleFactory::make(trans('memberships.attributes'));
    }
}
