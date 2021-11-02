<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CutRequest extends FormRequest
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
            'company_id' => 'required',
            'date'       => 'required|date',
            'code'       => 'required|unique:cuts,code,' .$this->id,
            'count'      => 'required|numeric',
            'cost'       => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'company_id.required' => 'The :attribute هذا الحقل مطلوب.',
            'date.required'       => 'The :attribute هذا الحقل مطلوب.',
            'date.date'           => 'يجب ادخال تاريخ صالح.',
            'code.required'       => 'The :attribute هذا الحقل مطلوب.',
            'code.unique'         => 'The :attribute هذا الاسم تم استخدامه مسبقا.',
            'count.required'      => 'The :attribute هذا الحقل مطلوب.',
            'count.numeric'       => 'The :attribute هذا الحقل يجب ان يكون رقم.',
            'cost.required'       => 'The :attribute هذا الحقل مطلوب.',
            'cost.numeric'        => 'The :attribute هذا الحقل يجب ان يكون رقم.'
        ];
    }
}
