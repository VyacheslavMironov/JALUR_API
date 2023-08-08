@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="col-12 mb-4 mt-4">
                <h3 class="text-center">История записей</h3>
            </div>
            <div class="col-12">
                <div class="d-flex  justify-content-between">
                    <div class="col-12 d-flex">
                        <a href="{{ route('admin.history.note') }}" class="btn btn-panel btn-panel-active m-2">Все</a>
                        <a href="{{ route('admin.history.note.search') }}" class="btn btn-panel m-2">Поиск</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 p-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="container">
                                    <div class="row mb-4 mt-2">
                                        <div class="col-2">
                                            <span>Клиент</span>
                                        </div>
                                        <div class="col-3">
                                            <span>Номер телефона</span>
                                        </div>
                                        <div class="col-2">
                                            <span>Тренировка + тип</span>
                                        </div>
                                        <div class="col-2">
                                            <span>Тренер</span>
                                        </div>
                                        <div class="col-1">
                                            <span>День</span>
                                        </div>
                                        <div class="col-2">
                                            <span>Время</span>
                                        </div>
                                    </div>
                                    <div class="row bg-table rounded mb-2">
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-3 d-flex align-items-center">
                                            <span>+7 (ххх) ххх-хх-хх</span>
                                        </div>
                                        <div class="col-2">
                                            <div>
                                                <span>Название тренировки</span>
                                            </div>
                                            <div>
                                                <span>
                                                    <small>Тип тренировки</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-1 d-flex align-items-center">
                                            <span>ПН</span>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>14:00</span>
                                        </div>
                                    </div>
                                    <div class="row bg-table rounded mb-2">
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-3 d-flex align-items-center">
                                            <span>+7 (ххх) ххх-хх-хх</span>
                                        </div>
                                        <div class="col-2">
                                            <div>
                                                <span>Название тренировки</span>
                                            </div>
                                            <div>
                                                <span>
                                                    <small>Тип тренировки</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-1 d-flex align-items-center">
                                            <span>ПН</span>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>14:00</span>
                                        </div>
                                    </div>
                                    <div class="row bg-table rounded mb-2">
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-3 d-flex align-items-center">
                                            <span>+7 (ххх) ххх-хх-хх</span>
                                        </div>
                                        <div class="col-2">
                                            <div>
                                                <span>Название тренировки</span>
                                            </div>
                                            <div>
                                                <span>
                                                    <small>Тип тренировки</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-1 d-flex align-items-center">
                                            <span>ПН</span>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>14:00</span>
                                        </div>
                                    </div>
                                    <div class="row bg-table rounded mb-2">
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-3 d-flex align-items-center">
                                            <span>+7 (ххх) ххх-хх-хх</span>
                                        </div>
                                        <div class="col-2">
                                            <div>
                                                <span>Название тренировки</span>
                                            </div>
                                            <div>
                                                <span>
                                                    <small>Тип тренировки</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-1 d-flex align-items-center">
                                            <span>ПН</span>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>14:00</span>
                                        </div>
                                    </div>
                                    <div class="row bg-table rounded mb-2">
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-3 d-flex align-items-center">
                                            <span>+7 (ххх) ххх-хх-хх</span>
                                        </div>
                                        <div class="col-2">
                                            <div>
                                                <span>Название тренировки</span>
                                            </div>
                                            <div>
                                                <span>
                                                    <small>Тип тренировки</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-1 d-flex align-items-center">
                                            <span>ПН</span>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>14:00</span>
                                        </div>
                                    </div>
                                    <div class="row bg-table rounded mb-2">
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-3 d-flex align-items-center">
                                            <span>+7 (ххх) ххх-хх-хх</span>
                                        </div>
                                        <div class="col-2">
                                            <div>
                                                <span>Название тренировки</span>
                                            </div>
                                            <div>
                                                <span>
                                                    <small>Тип тренировки</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-1 d-flex align-items-center">
                                            <span>ПН</span>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>14:00</span>
                                        </div>
                                    </div>
                                    <div class="row bg-table rounded mb-2">
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-3 d-flex align-items-center">
                                            <span>+7 (ххх) ххх-хх-хх</span>
                                        </div>
                                        <div class="col-2">
                                            <div>
                                                <span>Название тренировки</span>
                                            </div>
                                            <div>
                                                <span>
                                                    <small>Тип тренировки</small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Соколова Д</span>
                                        </div>
                                        <div class="col-1 d-flex align-items-center">
                                            <span>ПН</span>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>14:00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
