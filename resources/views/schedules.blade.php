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
                        <a href="{{ route('admin.schedules') }}" class="btn btn-panel btn-panel-active m-2">Список</a>
                        <a href="{{ route('admin.schedules.create') }}" class="btn btn-panel m-2">Добавить</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 p-2">
                    {{-- Если пустой массив --}}
                    @if (count($schedules) == 0)
                        <small class="text-center p-4">
                            <strong>Данных нет</strong>
                        </small>
                    @else
                        <div class="schedules">
                            <div class="d-flex justify-content-around">
                                <div class="flex-8 card text-center align-items-center bg-table">
                                    <div class="mt-2"></div>
                                    <strong class="w-100 d-block">Время</strong>
                                    <div class="mt-2"></div>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table">
                                    <div class="mt-2"></div>
                                    <strong class="w-100 d-block">Понедельник</strong>
                                    <div class="mt-2"></div>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table">
                                    <div class="mt-2"></div>
                                    <strong class="w-100 d-block">Вторник</strong>
                                    <div class="mt-2"></div>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table">
                                    <div class="mt-2"></div>
                                    <strong class="w-100 d-block">Среда</strong>
                                    <div class="mt-2"></div>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table">
                                    <div class="mt-2"></div>
                                    <strong class="w-100 d-block">Четверг</strong>
                                    <div class="mt-2"></div>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table">
                                    <div class="mt-2"></div>
                                    <strong class="w-100 d-block">Пятница</strong>
                                    <div class="mt-2"></div>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table">
                                    <div class="mt-2"></div>
                                    <strong class="w-100 d-block">Суббота</strong>
                                    <div class="mt-2"></div>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table">
                                    <div class="mt-2"></div>
                                    <strong class="w-100 d-block">Восскресенье</strong>
                                    <div class="mt-2"></div>
                                </div>
                            </div>
                            {{-- Тело --}}
                            @if(count($schedules) > 0)
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '09:00')
                                        <div class="mt-1 d-flex justify-content-around">
                                            <div class="flex-8 card text-center align-items-center bg-table">
                                            <span class="mt-3">
                                                <b>{{ mb_substr($el['StartTime'], 0, 5) }}</b>
                                            </span>
                                            </div>
                                            <div class="flex-8 card text-center align-items-center bg-table-body">
                                                @if ($el['WeekDay'] == 'Пн')
                                                    <span>
                                                        <b>{{ $el['Name']['Name'] }}</b><br>
                                                        <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="flex-8 card text-center align-items-center bg-table-body">
                                                @if ($el['WeekDay'] == 'Вт')
                                                    <span>
                                                        <b>{{ $el['Name']['Name'] }}</b><br>
                                                        <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="flex-8 card text-center align-items-center bg-table-body">
                                                @if ($el['WeekDay'] == 'Ср')
                                                    <span>
                                                        <b>{{ $el['Name']['Name'] }}</b><br>
                                                        <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="flex-8 card text-center align-items-center bg-table-body">
                                                @if ($el['WeekDay'] == 'Чт')
                                                    <span>
                                                        <b>{{ $el['Name']['Name'] }}</b><br>
                                                        <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="flex-8 card text-center align-items-center bg-table-body">
                                                @if ($el['WeekDay'] == 'Пт')
                                                    <span>
                                                        <b>{{ $el['Name']['Name'] }}</b><br>
                                                        <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="flex-8 card text-center align-items-center bg-table-body">
                                                @if ($el['WeekDay'] == 'Сб')
                                                    <span>
                                                        <b>{{ $el['Name']['Name'] }}</b><br>
                                                        <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="flex-8 card text-center align-items-center bg-table-body">
                                                @if ($el['WeekDay'] == 'Вс')
                                                    <span>
                                                        <b>{{ $el['Name']['Name'] }}</b><br>
                                                        <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                   @endif
                </div>
            </div>
        </div>
    </div>
@endsection
