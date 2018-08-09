<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckupRequest extends FormRequest
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
            'cek_date' =>'required',
            'cek_id' =>'required',
            'cek_name' =>'required',
            'cek_address' =>'required',
            'cek_age' =>'required',
            'cek_phone' =>'required',
            'cek_hospital' =>'required',
            'cek_weight' =>'required',
            'cek_height' =>'required',
            'cek_bmi' =>'required',
            'cek_bp' =>'required',
            'cek_bone' =>'required',
            'cek_blood' =>'required'
        ];
    }
}
