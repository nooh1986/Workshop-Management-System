<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SalaryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'employee' => 'required',
            'year'     => 'required',
            'month'    => 'required',
        ];
    }


    public function messages()
    {
        return [
            'employee.required' => 'The :attribute هذا الحقل مطلوب.',
            'year.required'     => 'The :attribute هذا الحقل مطلوب.',
            'month.required'    => 'The :attribute هذا الحقل مطلوب.',
        ];
    }
}
