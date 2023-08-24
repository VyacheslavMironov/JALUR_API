<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'first_name' => ['required', 'min:2', 'max:40'],
            'last_name' => ['required', 'min:2', 'max:40'],
            'phone' => ['required'],
            'role' => ['required'],
            'weight' => ['required'],
            'height' => ['required'],
            'gender' => ['required'],
            'age' => ['required'],
            'password' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'first_name.required' => 'Укажите имя!',
            'last_name.required' => 'Укажите фамилию!',
            'phone.required' => 'Поле ввода номера телефона обязательно к заполнению!\nФормат\n\t+x (xxx) xxx-xx-xx',
            'role.required' => 'Укажите роль!',
            'weight.required' => 'Укажите вес!',
            'height.required' => 'Укажите рост!',
            'gender.required' => 'Укажите принадлежность к половой категории!',
            'age.required' => 'Укажите возраст!',
            'password.required' => 'Укажите пароль!',

            'first_name.min' => 'Имя не может быть меньже :min символов!',
            'last_name.min' => 'Фамилия не может быть меньже :min символов!',

            'first_name.max' => 'Имя не может быть больше :min символов!',
            'last_name.max' => 'Имя не может быть больше :min символов!'
        ];
    }
}
