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
                        <a href="{{ route('admin.schedules') }}" class="btn btn-panel btn-panel-active m-2">Список</a>
                        <a href="{{ route('admin.schedules.create') }}" class="btn btn-panel m-2">Добавить</a>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-2">
                        <button class="btn w-100">Фильтр</button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 p-2">
                    {{-- Если пустой массив --}}
                    {{-- <small class="text-center">Данных нет</small> --}}
                    {{-- END --}}
                    <div class="header-card-table">
                        <div class="row">
                            <div class="col-3 d-flex align-items-center">
                                <strong class="w-100 text-center d-block">Треннивка</strong>
                            </div>
                            <div class="col-3 d-flex align-items-center">
                                <strong class="w-100 text-center d-block">Тренер</strong>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <strong class="w-100 text-center d-block">Время начала тренировки</strong>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <strong class="w-100 text-center d-block">Время окончания тренировки</strong>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                    <div class="body-card-table mt-3">

                        @foreach($schedules as $el)
                            <div class="col-12 rounded-5 card-table-item mt-2 p-2">
                            <div class="row">
                                <div class="col-3">
                                    <div class="w-100 d-flex align-items-center card p-1">
                                        <span>
                                            <b>{{ $el['Name']['Name'] }}</b>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="w-100 d-flex align-items-center card p-1">
                                        <span>
                                            <b>{{ $el['Couch']['LastName'] }} {{ $el['Couch']['FirstName'] }}</b>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="w-100 d-flex align-items-center card p-1">
                                        <span>
                                            <b>{{ mb_substr($el['StartTime'], 0, 5) }}</b>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="w-100 d-flex align-items-center card p-1">
                                        <span>
                                            <b>{{ mb_substr($el['EndTime'], 0, 5) }}</b>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="w-100 d-flex align-items-center d-flex justify-content-around">
                                        <a href="{{ route('admin.schedules.update', ['id' => $el['Id']]) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(243, 243, 243, 1);">
                                                <path d="m7 17.013 4.413-.015 9.632-9.54c.378-.378.586-.88.586-1.414s-.208-1.036-.586-1.414l-1.586-1.586c-.756-.756-2.075-.752-2.825-.003L7 12.583v4.43zM18.045 4.458l1.589 1.583-1.597 1.582-1.586-1.585 1.594-1.58zM9 13.417l6.03-5.973 1.586 1.586-6.029 5.971L9 15.006v-1.589z"></path>
                                                <path d="M5 21h14c1.103 0 2-.897 2-2v-8.668l-2 2V19H8.158c-.026 0-.053.01-.079.01-.033 0-.066-.009-.1-.01H5V5h6.847l2-2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2z"></path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('admin.query.schedules.delete', ['id' => $el['Id']]) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(243, 243, 243, 1);">
                                                <path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
