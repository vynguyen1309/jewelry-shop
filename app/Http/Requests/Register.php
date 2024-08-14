<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'fullname' => ['required', 'min:6'],
            'username' => ['required', 'min:6'],
            'email' => ['required'],
            'password' => ['required', 'min:8']
        ];
    }
    public function messages(){
        return [
            'fullname.required'=>"Fullname không được bỏ trống",
            'fullname.min'=>"fullname phải có ít nhất 6 kí tự",
            'username.required'=>"username không được bỏ trống",
            'username.min'=>"username phải có ít nhất 6 kí tự",
            'email.required'=>"Email không được bỏ trống",
            'password.required'=>"Password không được bỏ trống",
            'password.min'=>"Password phải ít nhất 8 kí tự"
        ];
    }
}
