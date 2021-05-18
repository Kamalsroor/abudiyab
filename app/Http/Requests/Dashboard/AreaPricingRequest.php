<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class AreaPricingRequest extends FormRequest
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
        return [
            'price' => ['required', 'array'],
            'price.*.*' => ['required', 'max:8'],
        ];
    }

    public function messages()
    {
        return [
            'price.*.*.max' => 'يجب أن لا يتجاوز طول السعر 8 ارقامٍ/رقماً.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return trans('area_pricings.attributes');
    }
}
