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
        $date = $this->receiving_date + 86400;

        $this->receiving_date = Carbon::createFromTimestamp($this->receiving_date)->format('Y-m-d H:i:s');
        $this->delivery_date = Carbon::createFromTimestamp($this->delivery_date)->format('Y-m-d H:i:s');
        // $date = Carbon::createFromFormat('Y-m-d H:i:s',$this->receiving_date );

        return [
            'receiving_branche' => ['required', 'exists:branches,id'],
            'delivery_branche' => ['required', 'exists:branches,id'],
            'receiving_date' => ['required'],
            'delivery_date' => ['required','integer' ,'min:'.$date],
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


        /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'delivery_date.min' => 'يجب اي يكون :attribute اكبر من ميعاد التسليم ب 24 ساعة',
        ];
    }


}
