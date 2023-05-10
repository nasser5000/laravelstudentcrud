<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createstudentrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //students table fields are required
            'student_name'=>'required',
            'student_mail'=>'required',
            'student_phone'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'student_name.required'=>'the student name is required',
            'student_mail.required'=>'the student mail is required',
            'student_phone.required'=>'the student phone is required',
        ];
    }
}
