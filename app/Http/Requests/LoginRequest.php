<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'phone' => ['required', 'min:18', 'max:18'],
            'password' => ['required', 'min:6', 'max:16']
        ];
    }

    public function messages()
    {
        return [
            'phone.required' => 'Это обязательное поле!',
            'password.required' => 'Это обязательное поле!',

            'phone.min' => 'Телефон не может быть меньше :min символов!',
            'password.min' =>'Пароль не может быть меньше :min символов!',

            'phone.max' => 'Телефон не может быть больше :max символов!',
            'password.max' => 'Пароль не может быть больше :max символов!'
        ];
    }
}
