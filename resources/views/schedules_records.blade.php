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
                        <a href="{{ route('admin.schedules.create') }}" class="btn btn-panel btn-panel-active m-2">Добавить</a>
                        <a href="{{ route('admin.schedules.time') }}" class="btn btn-panel m-2">Время</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 p-2">
                    <div class="container">
                        @if (count($records))
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Имя</th>
                                    <th scope="col">Фамилия</th>
                                    <th scope="col">Номер телефона</th>
                                    <th scope="col">Возраст</th>
                                    <th scope="col">Рост</th>
                                    <th scope="col">Вес</th>
                                    <th scope="col">Пол</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($records as $el)
                                        <tr>
                                            <td>{{ $el->FirstName }}</td>
                                            <td>{{ $el->LastName }}</td>
                                            <td>{{ $el->Phone }}</td>
                                            <td>{{ $el->Age }}</td>
                                            <td>{{ $el->Height }}</td>
                                            <td>{{ $el->Weight }}</td>
                                            <td>{{ $el->Gender }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h4 class="text-center">Данных нет</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
