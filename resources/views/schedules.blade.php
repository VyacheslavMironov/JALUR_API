@extends('layouts.home')

@section('content')
    
    <div class="wrapper">
        <div class="">
            <div class="col-12 mb-4 mt-4">
                <h3 class="text-center">Расписание</h3>
            </div>
            <div class="col-12">
                <div class="d-flex  justify-content-between">
                    <div class="col-12 d-flex">
                        {{-- <a href="{{ route('admin.schedules') }}" class="btn btn-panel btn-panel-active m-2">Список</a> --}}
                        <a href="{{ route('admin.schedules.create') }}" class="btn btn-panel m-2">Добавить</a>
                        <a href="{{ route('admin.schedules.time') }}" class="btn btn-panel m-2">Время</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 p-2">
                    <div class="schedules">
                        <div class="mt-2 mb-3">
                            <div class="row">
                                <div class="col-3 mx-auto" style="
                                background-color: #f6f6f6;
                                border-radius: 1em;
                            ">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <a href="{{ route('admin.schedules', ['hallId' => $hallId, "month" => $monthDown, "year" => $yearDown]) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" style="fill: #977585;">
                                                <path d="M12.707 17.293 8.414 13H18v-2H8.414l4.293-4.293-1.414-1.414L4.586 12l6.707 6.707z"></path>
                                            </svg>
                                        </a>
                                        <strong class="col-9 text-center">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" style="fill: #977585;">
                                                    <path d="M21 20V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2zM9 18H7v-2h2v2zm0-4H7v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2zm2-5H5V7h14v2z"></path>
                                                </svg>
                                                <div class="col-1"></div>
                                            </span>
                                            <span>{{ $monthName }}</span>
                                            <span>{{ $year }}</span>
                                        </strong>
                                        <a href="{{ route('admin.schedules', ['hallId' => $hallId, "month" => $monthUp, "year" => $yearUp]) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" style="fill: #977585;">
                                                <path d="m11.293 17.293 1.414 1.414L19.414 12l-6.707-6.707-1.414 1.414L15.586 11H6v2h9.586z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="weks" class="d-flex justify-content-around">
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
                        @foreach ($calendar as $week)
                            <div class="d-flex">
                                @foreach ($week as $day)
                                    @if (count($day) == 0)
                                        <div class="flex-8 card align-items-center bg-table-body">
                                            {{-- <div class="mt-3 mb-3"></div> --}}
                                        </div>
                                    @else
                                        <div class="flex-8 card align-items-center bg-table-body">
                                            <div class="mt-2">
                                                <b class="text-center">{{ $day['Day'] }}</b>
                                            </div>
                                                <ul class="w-100">
                                                    @foreach ($day['ValueWork'] as $work)
                                                        <li class="mb-2">
                                                            <a href="{{ route('admin.schedules_for_day', ['hallId' => $work->HallId, 'day' => $day['Day'], 'month' => $month, 'year' => $year]) }}">
                                                                <div>
                                                                    <span>{{ mb_substr($work->Time['StartTime'], 0, 5) }}</span>
                                                                    <strong>{{ $work->Workout['Name'] }}</strong>
                                                                    <span>({{ mb_substr($work->CouchUser['LastName'], 0, 1) }}.{{ $work->CouchUser['FirstName'] }})</span>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            <div class="mb-2"></div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
