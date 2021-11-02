<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeePaymentRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'employee_id' => 'required',
            'year'        => 'required',
            'month'       => 'required',
            'amount'      => 'required|numeric',
            'date'        => 'required|date',
        ];
    }


    public function messages()
    {
        return [
            'employee_id.required' => 'The :attribute هذا الحقل مطلوب.',
            'year.required'        => 'The :attribute هذا الحقل مطلوب.',
            'month.required'       => 'The :attribute هذا الحقل مطلوب.',
            'amount.required'      => 'The :attribute هذا الحقل مطلوب.',
            'amount.numeric'       => 'The :attribute هذا الحقل يجب ان يكون رقم.',
            'date.required'        => 'The :attribute هذا الحقل مطلوب.',
            'date.date'            => 'يجب ادخال تاريخ صالح.',
        ];
    }
}
