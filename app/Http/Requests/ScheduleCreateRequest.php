<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleCreateRequest extends FormRequest
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
            'hallId' => ['required'],
            'workoutId' => ['required'],
            'couch' => ['required'],
            'scheduleTimeId' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'hallId.required' => 'Выберите зал!',
            'workoutId.required' => 'Выберите тренировку!',
            'couch.required' => 'Выберите тренера!',
            'scheduleTimeId.required' => 'Выберите время начала тренировки!'
        ];
    }
}
