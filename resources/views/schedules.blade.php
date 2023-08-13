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

                            <!-- 09:00 -->
                            <div class="mt-1 d-flex justify-content-around">
                                <div class="flex-8 card text-center align-items-center bg-table">
                                <span class="mt-3">
                                    <b>09:00</b>
                                </span>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '09:00')
                                        @if ($el['WeekDay'] == 'Пн')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '09:00')
                                        @if ($el['WeekDay'] == 'Вт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '09:00')
                                        @if ($el['WeekDay'] == 'Ср')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '09:00')
                                        @if ($el['WeekDay'] == 'Чт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '09:00')
                                        @if ($el['WeekDay'] == 'Пт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '09:00')
                                        @if ($el['WeekDay'] == 'Сб')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '09:00')
                                        @if ($el['WeekDay'] == 'Вс')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                            </div>

                            <!-- 10:00 -->
                            <div class="mt-1 d-flex justify-content-around">
                                <div class="flex-8 card text-center align-items-center bg-table">
                                <span class="mt-3">
                                    <b>10:00</b>
                                </span>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '10:00')
                                        @if ($el['WeekDay'] == 'Пн')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '10:00')
                                        @if ($el['WeekDay'] == 'Вт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '10:00')
                                        @if ($el['WeekDay'] == 'Ср')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '10:00')
                                        @if ($el['WeekDay'] == 'Чт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '10:00')
                                        @if ($el['WeekDay'] == 'Пт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '10:00')
                                        @if ($el['WeekDay'] == 'Сб')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '10:00')
                                        @if ($el['WeekDay'] == 'Вс')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                            </div>

                            <!-- 16:00 -->
                            <div class="mt-1 d-flex justify-content-around">
                                <div class="flex-8 card text-center align-items-center bg-table">
                                <span class="mt-3">
                                    <b>16:00</b>
                                </span>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '16:00')
                                        @if ($el['WeekDay'] == 'Пн')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '16:00')
                                        @if ($el['WeekDay'] == 'Вт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '16:00')
                                        @if ($el['WeekDay'] == 'Ср')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '16:00')
                                        @if ($el['WeekDay'] == 'Чт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '16:00')
                                        @if ($el['WeekDay'] == 'Пт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '16:00')
                                        @if ($el['WeekDay'] == 'Сб')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '16:00')
                                        @if ($el['WeekDay'] == 'Вс')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                            </div>

                            <!-- 17:00 -->
                            <div class="mt-1 d-flex justify-content-around">
                                <div class="flex-8 card text-center align-items-center bg-table">
                                <span class="mt-3">
                                    <b>17:00</b>
                                </span>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '17:00')
                                        @if ($el['WeekDay'] == 'Пн')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '17:00')
                                        @if ($el['WeekDay'] == 'Вт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '17:00')
                                        @if ($el['WeekDay'] == 'Ср')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '17:00')
                                        @if ($el['WeekDay'] == 'Чт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '17:00')
                                        @if ($el['WeekDay'] == 'Пт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '17:00')
                                        @if ($el['WeekDay'] == 'Сб')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '17:00')
                                        @if ($el['WeekDay'] == 'Вс')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                            </div>

                            <!-- 18:00 -->
                            <div class="mt-1 d-flex justify-content-around">
                                <div class="flex-8 card text-center align-items-center bg-table">
                                <span class="mt-3">
                                    <b>18:00</b>
                                </span>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:00')
                                        @if ($el['WeekDay'] == 'Пн')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:00')
                                        @if ($el['WeekDay'] == 'Вт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:00')
                                        @if ($el['WeekDay'] == 'Ср')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:00')
                                        @if ($el['WeekDay'] == 'Чт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:00')
                                        @if ($el['WeekDay'] == 'Пт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:00')
                                        @if ($el['WeekDay'] == 'Сб')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:00')
                                        @if ($el['WeekDay'] == 'Вс')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                            </div>

                            <!-- 18:30 -->
                            <div class="mt-1 d-flex justify-content-around">
                                <div class="flex-8 card text-center align-items-center bg-table">
                                <span class="mt-3">
                                    <b>18:30</b>
                                </span>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:30')
                                        @if ($el['WeekDay'] == 'Пн')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:30')
                                        @if ($el['WeekDay'] == 'Вт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:30')
                                        @if ($el['WeekDay'] == 'Ср')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:30')
                                        @if ($el['WeekDay'] == 'Чт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:30')
                                        @if ($el['WeekDay'] == 'Пт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:30')
                                        @if ($el['WeekDay'] == 'Сб')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '18:30')
                                        @if ($el['WeekDay'] == 'Вс')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                            </div>

                            <!-- 19:00 -->
                            <div class="mt-1 d-flex justify-content-around">
                                <div class="flex-8 card text-center align-items-center bg-table">
                                <span class="mt-3">
                                    <b>19:00</b>
                                </span>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '19:00')
                                        @if ($el['WeekDay'] == 'Пн')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '19:00')
                                        @if ($el['WeekDay'] == 'Вт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '19:00')
                                        @if ($el['WeekDay'] == 'Ср')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '19:00')
                                        @if ($el['WeekDay'] == 'Чт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '19:00')
                                        @if ($el['WeekDay'] == 'Пт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '19:00')
                                        @if ($el['WeekDay'] == 'Сб')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '19:00')
                                        @if ($el['WeekDay'] == 'Вс')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                            </div>

                            <!-- 20:00 -->
                            <div class="mt-1 d-flex justify-content-around">
                                <div class="flex-8 card text-center align-items-center bg-table">
                                <span class="mt-3">
                                    <b>20:00</b>
                                </span>
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '20:00')
                                        @if ($el['WeekDay'] == 'Пн')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '20:00')
                                        @if ($el['WeekDay'] == 'Вт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '20:00')
                                        @if ($el['WeekDay'] == 'Ср')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '20:00')
                                        @if ($el['WeekDay'] == 'Чт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '20:00')
                                        @if ($el['WeekDay'] == 'Пт')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '20:00')
                                        @if ($el['WeekDay'] == 'Сб')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                                <div class="flex-8 card text-center align-items-center bg-table-body">
                                @foreach ($schedules as $el)
                                    @if (mb_substr($el['StartTime'], 0, 5) == '20:00')
                                        @if ($el['WeekDay'] == 'Вс')
                                            <span>
                                                <b>{{ $el['Name']['Name'] }}</b><br>
                                                <small>{{ mb_substr($el['Couch']['FirstName'], 0, 1)}}. {{ $el['Couch']['LastName'] }}</small>
                                            </span>
                                        @endif
                                    @endif
                                @endforeach
                                </div>
                            </div>
                        </div>
                   @endif
                </div>
            </div>
        </div>
    </div>
@endsection
