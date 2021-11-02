<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CorporateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'company' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'company.required' => 'The :attribute هذا الحقل مطلوب.',
        ];
    }
}
