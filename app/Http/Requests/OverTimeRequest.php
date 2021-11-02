<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OverTimeRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'year'        => 'required',
            'month'       => 'required',
            'employee_id' => 'required',
            'count'       => 'required|numeric',
            'date'        => 'required|date',
        ];
    }
    

    public function messages()
    {
        return [
            'year.required'        => 'The :attribute هذا الحقل مطلوب.',
            'month.required'       => 'The :attribute هذا الحقل مطلوب.',
            'employee_id.required' => 'The :attribute هذا الحقل مطلوب.',
            'count.required'       => 'The :attribute هذا الحقل مطلوب.',
            'count.numeric'        => 'The :attribute هذا الحقل يجب ان يكون رقم.',
            'date.required'        => 'The :attribute هذا الحقل مطلوب.',
            'date.date'            => 'إدخل تاريخ صالح.',
        ];
    }
}
