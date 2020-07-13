<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fname'   => 'required',
            'lname'   => 'required',
            'email'   => 'required|email',
            'tel'     => 'required',
            'message' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'fname.required'   => 'กรุณาระบุ',
            'lname.required'   => 'กรุณาระบุ',
            'email.required'   => 'กรุณาระบุ',
            'email.email'      => 'รูปแบบอีเมล์ไม่ถูกต้อง',
            'tel.required'     => 'กรุณาระบุ',
            'message.required' => 'กรุณาระบุ',
        ];
    }

    public function validationData()
    {
        return $this->all();
    }
}
