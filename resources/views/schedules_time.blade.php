@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="col-12 mb-4 mt-4">
                <h3 class="text-center">Расписание</h3>
            </div>
            <div class="col-12">
                <div class="d-flex  justify-content-between">
                    <div class="col-12 d-flex">
                        {{-- <a href="{{ route('admin.schedules') }}" class="btn btn-panel m-2">Список</a> --}}
                        <a href="{{ route('admin.schedules.create') }}" class="btn btn-panel m-2">Добавить</a>
                        <a href="{{ route('admin.schedules.time') }}" class="btn btn-panel btn-panel-active m-2">Время</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 p-2">
                    <div class="container">
                        <div class="col-7 mx-auto">
                            <form action="{{ route('admin.query.schedule.time.create') }}" method="post">
                                @csrf
                                <div class="mb-5 mt-3">
                                    <h4 class="text-center">Добавить время</h4>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Укажите время начала тренировки</label>
                                    <input
                                        class="form-control"
                                        type="time"
                                        name="startTime"
                                        @error('startTime') is-invalid @enderror>
                                    <span class="text-center">
                                        @error('startTime') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                    </span>
                                </div>
                                <button type="submit" class="btn">Отправить</button>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5">
                        <br>
                        <div class="mb-4">
                            <h4 class="text-center">Время расписания</h4>
                        </div>
                        <div class="col-7 mx-auto">
                            <table class="table table-hover table-bordered table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Время</th>
                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schedule_times as $schedule_time)
                                        <tr>
                                            <th scope="row"># {{ $schedule_time->id }}</th>
                                            <td>{{ mb_substr($schedule_time->StartTime, 0, 5) }}</td>
                                            <td class="d-flex justify-content-end">
                                                <form action="{{ route('admin.query.schedule.time.delete') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="Id" value="{{ $schedule_time->id }}">
                                                    <input type="submit" class="btn btn-danger" value="Удалить">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
