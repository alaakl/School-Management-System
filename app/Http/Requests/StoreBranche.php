<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBranche extends FormRequest
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

            'Name_Branche_Ar' => 'required',
            'Name_Branche_En' => 'required',
            'Class_id' => 'required',
            'Grade_id' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'Name_Branche_Ar.required' => trans('Branche_trans.required_ar'),
            'Name_Branche_En.required' => trans('Branche_trans.required_en'),
            'Grade_id.required' => trans('Branche_trans.Grade_id_required'),
            'Class_id.required' => trans('Branche_trans.Class_id_required'),
        ];
    }
}
