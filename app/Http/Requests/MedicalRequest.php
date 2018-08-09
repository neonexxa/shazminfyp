<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicalRequest extends FormRequest
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
            'date' =>'required',
            'p_id' =>'required',
            'med_name' =>'required',
            'hosp' =>'required',
            'doctor' =>'required',
            'doc_spec' =>'required',
            'disease' =>'required',
            'desc' =>'required',
            'f_allergy' =>'required',
            'm_allergy' =>'required',
            'pres' =>'required'
        ];
    }
}
