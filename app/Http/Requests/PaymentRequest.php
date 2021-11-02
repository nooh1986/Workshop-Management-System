<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentRequest extends FormRequest
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
            'date'   => 'required|date',
            'amount' => 'required|numeric',
            'company_id'     => 'required',
        ];
    }

    public function messages()
    {
        return [
            'date.required'       => 'The :attribute هذا الحقل مطلوب.',
            'date.date'           => 'يجب ادخال تاريخ صالح.',
            'amount.required'     => 'The :attribute هذا الحقل مطلوب.',
            'amount.numeric'      => 'The :attribute هذا الحقل يجب ان يكون رقم.',
            'company_id.required' => 'The :attribute هذا الحقل مطلوب.',
        ];
    }
}
