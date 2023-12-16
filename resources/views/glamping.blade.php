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
                        <a href="{{ route('admin.glamping') }}" class="btn btn-panel btn-panel-active m-2">Все</a>
                        <a href="{{ route('admin.glamping.create') }}" class="btn btn-panel m-2">Добавить</a>
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
                                        <div class="col-3">
                                            <span>Название</span>
                                        </div>
                                        <div class="col-4">
                                            <span>Описание</span>
                                        </div>
                                        <div class="col-2">
                                            <span>Время проведения</span>
                                        </div>
                                        <div class="col-2">
                                            <span>Дата проведения</span>
                                        </div>
                                        <div class="col-1"></div>
                                    </div>
                                    @foreach($glamping as $el)
                                        <div class="row bg-table rounded mb-2">
                                        <div class="col-3 d-flex align-items-center">
                                            <span>{{ $el['Name'] }}</span>
                                        </div>
                                        <div class="col-5 d-flex align-items-center">
                                            <span>{{ $el['Description'] }}</span>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>{{ $el['Time'] }}</span>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>{{ $el['Date'] }}</span>
                                        </div>
                                        <div class="col-1 d-flex align-items-center">
                                            <a href="#" class="btn">Удалить</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
