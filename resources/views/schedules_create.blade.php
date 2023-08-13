@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="col-12 mb-4 mt-4">
                <h3 class="text-center">Расписание</h3>
            </div>
            <div class="col-12">
                <div class="d-flex  justify-content-between">
                    <div class="col-8 d-flex">
                        <a href="{{ route('admin.schedules') }}" class="btn btn-panel m-2">Список</a>
                        <a href="{{ route('admin.schedules.create') }}" class="btn btn-panel btn-panel-active m-2">Добавить</a>
                        <a href="{{ route('admin.schedules.time') }}" class="btn btn-panel m-2">Время</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 p-2">
                    <div class="container">
                        <form action="{{ route($form) }}" method="post">
                            @csrf
                            <input type="hidden" name="active" value="1">
                            <div class="row">
                                <div class="col-12 mb-5 mt-3">
                                    <h3 class="text-center">Добавить</h3>
                                </div>
                                <div class="col-3">
                                    <ul>
                                        <li class="mb-2">
                                            <input
                                                type="checkbox"
                                                class="btn-check"
                                                value="Пн"
                                                id="btn-check-1"
                                                name="weekDay"
                                                autocomplete="off"
                                                @if ($schedule)
                                                    @if ($schedule->WeekDay == 'Пн') checked @endif
                                                @endif
                                                @error('weekDay') is-invalid @enderror>
                                            <label class="btn btn-panel w-100" for="btn-check-1">Понедельник</label>
                                        </li>
                                        <li class="mb-2">
                                            <input
                                                type="checkbox"
                                                class="btn-check"
                                                value="Вт"
                                                id="btn-check-2"
                                                name="weekDay"
                                                autocomplete="off"
                                                @if ($schedule)
                                                    @if ($schedule->WeekDay == 'Вт') checked @endif
                                                @endif
                                                @error('weekDay') is-invalid @enderror>
                                            <label class="btn btn-panel w-100" for="btn-check-2">Вторник</label>
                                        </li>
                                        <li class="mb-2">
                                            <input
                                                type="checkbox"
                                                class="btn-check"
                                                value="Ср"
                                                id="btn-check-3"
                                                name="weekDay"
                                                autocomplete="off"
                                                @if ($schedule)
                                                    @if ($schedule->WeekDay == 'Ср') checked @endif
                                                @endif
                                                @error('weekDay') is-invalid @enderror>
                                            <label class="btn btn-panel w-100" for="btn-check-3">Среда</label>
                                        </li>
                                        <li class="mb-2">
                                            <input
                                                type="checkbox"
                                                class="btn-check"
                                                value="Чт"
                                                id="btn-check-4"
                                                name="weekDay"
                                                autocomplete="off"
                                                @if ($schedule)
                                                    @if ($schedule->WeekDay == 'Чт') checked @endif
                                                @endif
                                                @error('weekDay') is-invalid @enderror>
                                            <label class="btn btn-panel w-100" for="btn-check-4">Четверг</label>
                                        </li>
                                        <li class="mb-2">
                                            <input
                                                type="checkbox"
                                                class="btn-check"
                                                value="Пт"
                                                id="btn-check-5"
                                                name="weekDay"
                                                autocomplete="off"
                                                @if ($schedule)
                                                    @if ($schedule->WeekDay == 'Пт') checked @endif
                                                @endif
                                                @error('weekDay') is-invalid @enderror>
                                            <label class="btn btn-panel w-100" for="btn-check-5">Пятница</label>
                                        </li>
                                        <li class="mb-2">
                                            <input
                                                type="checkbox"
                                                class="btn-check"
                                                value="Сб"
                                                id="btn-check-6"
                                                name="weekDay"
                                                autocomplete="off"
                                                @if ($schedule)
                                                    @if ($schedule->WeekDay == 'Сб') checked @endif
                                                @endif
                                                @error('weekDay') is-invalid @enderror>
                                            <label class="btn btn-panel w-100" for="btn-check-6">Суббота</label>
                                        </li>
                                        <li class="mb-2">
                                            <input
                                                type="checkbox"
                                                class="btn-check"
                                                value="Вс"
                                                id="btn-check-7"
                                                name="weekDay"
                                                autocomplete="off"
                                                @if ($schedule)
                                                    @if ($schedule->WeekDay == 'Вс') checked @endif
                                                @endif
                                                @error('weekDay') is-invalid @enderror>
                                            <label class="btn btn-panel w-100" for="btn-check-7">Восскресенье</label>
                                        </li>
                                    </ul>
                                    <span class="text-center">
                                        @error('weekDay') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                    </span>
                                </div>

                                <div class="col-9">
                                    <div class="container">
                                        <input
                                            type="hidden"
                                            class="btn-check"
                                            value="{{ $schedule_id }}"
                                            id="btn-check-3"
                                            name="id"
                                            autocomplete="off">
                                        <div class="mb-3">
                                            <label class="form-label">Выберите тренировку</label>
                                            <select
                                                class="form-select"
                                                name="workoutId"
                                                aria-label="Default select example"
                                                @error('workoutId') is-invalid @enderror>
                                                <option @if ($schedule == null) selected @endif>Нажмите что бы выбрать</option>
                                                @foreach($workout as $el)
                                                    <option value="{{ $el->id }}"
                                                        @if ($schedule)
                                                            @if ($schedule->WorkoutId == $el->id) selected @endif
                                                        @endif>{{ $el->Name }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-center">
                                                @error('workoutId') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Выберите  тренера</label>
                                            <select
                                                class="form-select"
                                                name="couch"
                                                aria-label="Default select example"
                                                @error('couch') is-invalid @enderror>
                                                <option @if ($schedule == null) selected @endif>Нажмите что бы выбрать</option>
                                                @foreach($couch as $el)
                                                    <option value="{{ $el->id }}"
                                                        @if ($schedule)
                                                            @if ($schedule->Couch == $el->id) selected @endif
                                                        @endif>
                                                        {{ $el->LastName }} {{ $el->FirstName }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <span class="text-center">
                                                @error('couch') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Укажите время начала</label>
                                            <select
                                                class="form-select"
                                                name="scheduleTimeId"
                                                aria-label="Default select example"
                                                @error('scheduleTimeId') is-invalid @enderror>
                                                @foreach($schedule_time as $el)
                                                    <option value="{{ $el->id }}">
                                                        {{ mb_substr($el->StartTime, 0, 5) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <span class="text-center">
                                                @error('scheduleTimeId') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                        <div class="mt-3"></div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn">Отправить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
