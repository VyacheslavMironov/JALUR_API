<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleUpdateRequest extends FormRequest
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
            'id' => ['required'],
            'hallId' => ['required'],
            'workoutId' => ['required'],
            'couch' => ['required'],
            'weekDay' => ['required', 'min:2', 'max:2'],
            'active' => ['required'],
            'scheduleTimeId' => ['required'],
        ];
    }
    public function messages()
    {
        return [
            'id.required' => 'Запись не выбрана!',
            'hallId.required' => 'Выберите зал!',
            'workoutId.required' => 'Выберите тренировку!',
            'couch.required' => 'Выберите тренера!',
            'weekDay.required' => 'Укажите день недели!',
            'active.required' => 'Укажите актуальность расписания!',
            'scheduleTimeId.required' => 'Выберите время начала тренировки!',

            'weekDay.min' => 'День недели должен быть указан в формате: Хх',

            'weekDay.max' => 'День недели должен быть указан в формате: Хх'
        ];
    }
}
