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
                        {{-- <a href="{{ route('admin.schedules') }}" class="btn btn-panel m-2">Список</a> --}}
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

                                <div class="col-8 mx-auto">
                                    <div class="container">
                                        <input
                                            type="hidden"
                                            class="btn-check"
                                            value="{{ $schedule_id }}"
                                            id="btn-check-3"
                                            name="id"
                                            autocomplete="off">
                                        <div class="mb-3">
                                            @if(count($workout))
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
                                            @else
                                                <div class="alert alert-warning" role="alert">
                                                    Данных нет.
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            @if (count($couch))
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
                                            @else
                                                <div class="alert alert-warning" role="alert">
                                                    Данных нет.
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            @if(count($schedule_time))
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
                                            @else
                                                <div class="alert alert-warning" role="alert">
                                                    Данных нет.
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            @if (count($hall))
                                                <label class="form-label">Укажите зал</label>
                                                <select
                                                    class="form-select"
                                                    name="hallId"
                                                    aria-label="Default select example"
                                                    @error('hallId') is-invalid @enderror>
                                                    @foreach($hall as $el)
                                                        <option value="{{ $el->id }}">
                                                            {{ $el->Name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <span class="text-center">
                                                    @error('hallId') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                                </span>
                                            @else
                                                <div class="alert alert-warning" role="alert">
                                                    Данных нет.
                                                </div>
                                            @endif
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Укажите дату</label>
                                            <input type="date" class="form-control" name="dateWork" @error('dateWork') is-invalid @enderror>
                                            <span class="text-center">
                                                @error('dateWork') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>

                                        <div class="mt-3"></div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn">Сохранить</button>
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
