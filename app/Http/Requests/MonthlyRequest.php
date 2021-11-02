<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MonthlyRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'year'  => 'required',
            'month' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'year.required'  => 'The :attribute هذا الحقل مطلوب.',
            'month.required' => 'The :attribute هذا الحقل مطلوب.',
        ];
    }
}
