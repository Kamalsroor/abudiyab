<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Validation\Rule;
class BranchRequest extends FormRequest
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
            'code' => ['required'],
            'p_coud' => ['required'],
            'tele_number' => ['required', 'size:10'],
            'work_time' => ['required', 'array'],
            'work_time.openAllDays' => ['required', 'in:0,1'],
            'work_time.alldays' => ['required_if:work_time.openAllDays,0'],
            'work_time.alldays.afternone.timeopen' => ['required_if:work_time.alldays.period,1'],
            'work_time.alldays.afternone.timeclose' => ['required_if:work_time.alldays.period,1'],
        ]);
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return RuleFactory::make(trans('branches.attributes'));
    }
}
