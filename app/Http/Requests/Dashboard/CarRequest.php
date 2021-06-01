<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Astrotomic\Translatable\Validation\RuleFactory;

class CarRequest extends FormRequest
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
            'category_id' => ['required'],
            'manufactory_id' => ['required'],
            '%description%' => ['sometimes','nullable','string','max:450'],
            'code' => ['required'],
            'price_from_2month_to_6month' => ['required'],
        ]);
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return RuleFactory::make(trans('cars.attributes'));
    }
}
