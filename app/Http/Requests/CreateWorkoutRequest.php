<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateWorkoutRequest extends FormRequest
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
            'type_workout_id' => ['required'],
            'name' => ['required'],
            'description' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'type_workout_id.required' => 'Укажите тип тренировки!',
            'name.required' => 'Укажите название тренировки!',
            'description.required' => 'Введите описание!',
        ];
    }
}
