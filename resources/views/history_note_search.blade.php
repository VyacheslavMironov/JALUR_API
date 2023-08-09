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
                                        <div class="col-12 mb-5 mt-3">
                                            <h3 class="text-center">Поиск</h3>
                                        </div>
                                        <div class="col-8 mx-auto">
                                            <form action="{{ route('admin.note.history.filter') }}" method="post">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Поиск по имени</label>
                                                            <input type="text" name="FirstName" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Поиск по фамилии</label>
                                                            <input type="text" name="LastName" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Поиск по номеру телефона</label>
                                                        <input id="exampleInputTelephone" type="tel" name="Phone" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Поиск по тренеру</label>
                                                        <input type="text"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Поиск по дню недели</label>
                                                        <select class="form-select" name="WeekDay" aria-label="Default select example">
                                                            <option value="Пн">Понедельник</option>
                                                            <option value="Вт">Вторник</option>
                                                            <option value="Ср">Среда</option>
                                                            <option value="Чт">Четверг</option>
                                                            <option value="Пт">Пятница</option>
                                                            <option value="Сб">Суббота</option>
                                                            <option value="Вс">Восскресенье</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Поиск по названию тренировки</label>
                                                        <input type="text"  class="form-control">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#exampleInputTelephone")
                .mask("+7 (999) 999-99-99");
        });
    </script>
@endsection
