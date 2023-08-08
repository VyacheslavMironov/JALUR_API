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
                    </div>
                    <div class="col-2"></div>
                    <div class="col-2">
                        <button class="btn w-100">Фильтр</button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 p-2">
                    <div class="container">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 mb-5 mt-3">
                                    <h3 class="text-center">Добавить</h3>
                                </div>
                                <div class="col-3">
                                    <ul>
                                        <li class="mb-2">
                                            <input type="checkbox" class="btn-check"  id="btn-check-1" name="day" autocomplete="off">
                                            <label class="btn btn-panel w-100" for="btn-check-1">Понедельник</label>
                                        </li>
                                        <li class="mb-2">
                                            <input type="checkbox" class="btn-check"  id="btn-check-2" name="day" autocomplete="off">
                                            <label class="btn btn-panel w-100" for="btn-check-2">Вторник</label>
                                        </li>
                                        <li class="mb-2">
                                            <input type="checkbox" class="btn-check"  id="btn-check-3" name="day" autocomplete="off">
                                            <label class="btn btn-panel w-100" for="btn-check-3">Среда</label>
                                        </li>
                                        <li class="mb-2">
                                            <input type="checkbox" class="btn-check"  id="btn-check-4" name="day" autocomplete="off">
                                            <label class="btn btn-panel w-100" for="btn-check-4">Четверг</label>
                                        </li>
                                        <li class="mb-2">
                                            <input type="checkbox" class="btn-check"  id="btn-check-5" name="day" autocomplete="off">
                                            <label class="btn btn-panel w-100" for="btn-check-5">Пятница</label>
                                        </li>
                                        <li class="mb-2">
                                            <input type="checkbox" class="btn-check"  id="btn-check-6" name="day" autocomplete="off">
                                            <label class="btn btn-panel w-100" for="btn-check-6">Суббота</label>
                                        </li>
                                        <li class="mb-2">
                                            <input type="checkbox" class="btn-check"  id="btn-check-7" name="day" autocomplete="off">
                                            <label class="btn btn-panel w-100" for="btn-check-7">Восскресенье</label>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-9">
                                    <div class="container">
                                        <div class="mb-3">
                                            <label class="form-label">Выберите тренировку</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                autocomplete="off">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Выберите  тренера</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Нажмите что бы выбрать</option>
                                                <option value="1">Игорь Петров</option>
                                                <option value="2">Ольга Ивановна</option>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Укажите время начала</label>
                                                    <input
                                                        type="time"
                                                        class="form-control"
                                                        autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Укажите конечное время</label>
                                                    <input
                                                        type="time"
                                                        class="form-control"
                                                        autocomplete="off">
                                                </div>
                                            </div>
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
