<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
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
            'experience' =>'required',
            'f_id' =>'required',
            'f_name' =>'required',
            'f_phone' =>'required',
            'f_email' =>'required',
            'f_date' =>'required',
            'f_comment' =>'required',
            'f_record' =>'required'
        ];
    }
}
