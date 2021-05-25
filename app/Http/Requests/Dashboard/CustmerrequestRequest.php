<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class CustmerrequestRequest extends FormRequest
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
            'id_number' => ['required', 'numeric', 'size:10'],
            'id_expiry_date' => ['required', 'date', 'max:255'],
            'nationality' => ['required', 'string', 'max:255'],
            'driver_number' => ['required', 'numeric', 'size:10'],
            'driver_id_expiry_date' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return trans('custmerrequests.attributes');
    }
}
