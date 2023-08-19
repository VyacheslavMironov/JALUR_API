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
                        @if (count($schedule))
                            @foreach ($schedule as $el)
                                {{ $el }}
                            @endforeach
                        @else
                            <h4 class="text-center">Данных нет</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection