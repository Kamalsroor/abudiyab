<?php

namespace App\Http\Requests\Api;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class OrderStep1Request extends FormRequest
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

        $date = Carbon::createFromFormat('Y-m-d H:i:s', $this->receiving_date);
        $date = $date->addDays(1);

        return [
            'receiving_branche' => ['required', 'exists:branches,id'],
            'delivery_branche' => ['required', 'exists:branches,id'],
            'receiving_date' => ['required', 'date_format:Y-m-d H:i:s'],
            'delivery_date' => ['required', 'date_format:Y-m-d H:i:s','after:'.$date],
            'car_id' => ['required', 'exists:cars,id'],
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
