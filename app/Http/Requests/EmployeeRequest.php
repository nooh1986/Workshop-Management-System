<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name'   => 'required|unique:employees,name,' .$this->id,
            'salary' => 'required|numeric',
        ];
    }
    

    public function messages()
    {
        return [
            'name.required'   => 'The :attribute هذا الحقل مطلوب.',
            'name.unique'     => 'The :attribute هذا الاسم تم استخدامه مسبقا.',
            'salary.required' => 'The :attribute هذا الحقل مطلوب.',
            'salary.numeric'  => 'The :attribute هذا الحقل يجب ان يكون رقم.',
        ];
    }
}
