@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="col-12 mb-4 mt-4">
                <h3 class="text-center">Пользователи</h3>
            </div>

            <div class="col-12">
                <div class="card w-100 p-2">
                    {{-- Если пустой массив --}}
                    {{-- <small class="text-center">Данных нет</small> --}}
                    {{-- END --}}
                    <div class="container">
                        <div class="col-8 mx-auto">
                            <form action="#" method="post">
                                <div class="col-12 mb-5 mt-3">
                                    <h4 class="text-center">Добавить</h4>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Имя</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Фамилия</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Номер телефона</label>
                                    <input
                                        type="tel"
                                        class="form-control"
                                        autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Роль</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Нажмите что бы выбрать</option>
                                        <option value="Администратор">Администратор</option>
                                        <option value="Тренер">Тренер</option>
                                        <option value="Клиент">Клиент</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Вес</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Рост</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn">Отправить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
