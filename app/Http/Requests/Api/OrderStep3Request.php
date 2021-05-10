<?php

namespace App\Http\Requests\Api;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class OrderStep3Request extends FormRequest
{

    /**
     * Determine if the supervisor is authorized to make this request.
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
            'order_id' => ['required', 'exists:orders,id'],
            'payment_type' => ['required', 'in:visa,cash'],
            'nameOnCard' => ['required_if:payment_type,visa', 'string','max:200'],
            'CardNumber' => ['required_if:payment_type,visa', 'numeric','digits_between:10,20'],
            'expiry_month' => ['required_if:payment_type,visa','max:2'],
            'expiry_year' => ['required_if:payment_type,visa','max:2'],
            'securityCode' => ['required_if:payment_type,visa','numeric','digits_between:2,4'],
        ];
    }



    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return trans('orders.attributes');
    }
}
