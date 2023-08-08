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
                        <a href="{{ route('admin.schedules') }}" class="btn btn-panel m-2">Все</a>
                        <a href="{{ route('admin.schedules.create') }}" class="btn btn-panel btn-panel-active m-2">Поиск</a>
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
                                        <div class="col-12 mb-5 mt-3">
                                            <h3 class="text-center">Поиск</h3>
                                        </div>
                                        <div class="col-8 mx-auto">
                                            <form>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Поиск по имени</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Поиск по фамилии</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Поиск по тренеру</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Поиск по дню недели</label>
                                                        <select class="form-select" aria-label="Default select example">
                                                            <option value="Понедельник">Понедельник</option>
                                                            <option value="Вторник">Вторник</option>
                                                            <option value="Среда">Среда</option>
                                                            <option value="Четверг">Четверг</option>
                                                            <option value="Пятница">Пятница</option>
                                                            <option value="Суббота">Суббота</option>
                                                            <option value="Восскресенье">Восскресенье</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Поиск по названию тренировки</label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="mt-3"></div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn">Найти</button>
                                                </div>
                                            </form>
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
