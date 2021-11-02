<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name'     => 'required',
            'email'    => 'required|email',
        ];
    }


    public function messages()
    {
        return [
            'name.required'  => 'The :attribute هذا الحقل مطلوب.',
            'email.required' => 'The :attribute هذا الحقل مطلوب.',
            'email.email'    => 'ادخل صيغه بريد الكتروني صحيحه',
        ];
    }
}
