<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CarsaleRequest extends FormRequest
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
            'car_id' => ['required', 'string', 'max:255'],
            'couter' => ['required', 'numeric'],
            'color_interior' => ['required', 'string'],
            'color_exterior' => ['required', 'string'],
            'quantity' => ['required', 'numeric'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return trans('carsales.attributes');
    }
}
