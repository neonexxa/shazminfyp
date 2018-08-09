<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DaftarRequest extends FormRequest
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
            'reg_date' =>'required',
            'reg_id' =>'required',
            'reg_name' =>'required',
            'reg_address' =>'required',
            'reg_age' =>'required',
            'reg_religion' =>'required',
            'reg_phone' =>'required'
        ];
    }
}
