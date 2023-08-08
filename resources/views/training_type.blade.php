@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="col-12 mb-4 mt-4">
                <h3 class="text-center">Тренировки</h3>
            </div>
            <div class="col-12">
                <div class="d-flex  justify-content-between">
                    <div class="col-12 d-flex">
                        <a href="{{ route('admin.training') }}" class="btn btn-panel m-2">Список</a>
                        <a href="{{ route('admin.training.type') }}" class="btn btn-panel btn-panel-active m-2">Тип</a>
                        <a href="{{ route('admin.training.create') }}" class="btn btn-panel m-2">Добавить</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 p-2">
                    {{-- Если пустой массив --}}
                    {{-- <small class="text-center">Данных нет</small> --}}
                    {{-- END --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="container">
                                <form action="#" method="post">
                                    <div class="col-12 mb-5 mt-3">
                                        <h4 class="text-center">Добавить тип</h4>
                                    </div>
                                    <div class="col-8 mx-auto">
                                        <div class="mb-3">
                                            <label class="form-label">Укажите тип тренировки</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                autocomplete="off">
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn">Добавить</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 mb-5">
                    <div class="container">
                        <h4 class="text-center">Существующие типы</h4>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-4 mb-4">
                            <div class="card p-1">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span>Название типа</span>
                                    <form action="#" method="post">
                                        <button type="submit" class="btn">Удалить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card p-1">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span>Название типа</span>
                                    <form action="#" method="post">
                                        <button type="submit" class="btn">Удалить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card p-1">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span>Название типа</span>
                                    <form action="#" method="post">
                                        <button type="submit" class="btn">Удалить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card p-1">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span>Название типа</span>
                                    <form action="#" method="post">
                                        <button type="submit" class="btn">Удалить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 mb-4">
                            <div class="card p-1">
                                <div class="col-12 d-flex justify-content-between align-items-center">
                                    <span>Название типа</span>
                                    <form action="#" method="post">
                                        <button type="submit" class="btn">Удалить</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
