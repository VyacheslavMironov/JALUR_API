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
                        <a href="{{ route('admin.training') }}" class="btn btn-panel btn-panel-active m-2">Список</a>
                        <a href="{{ route('admin.training.type') }}" class="btn btn-panel m-2">Тип</a>
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
                                <div class="row mb-4 mt-2 p-1">
                                    <div class="col-4">
                                        <span>Название</span>
                                    </div>
                                    <div class="col-2">
                                        <span>Тип</span>
                                    </div>
                                    <div class="col-4">
                                        <span>Описание</span>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                                @foreach($workouts as $el)
                                    <div class="row bg-table rounded mb-2 p-1">
                                        <div class="col-4 d-flex align-items-center">
                                            <span>{{ $el->Name }}</span>
                                        </div>
                                        <div class="col-2 d-flex align-items-center">
                                            <span>Тип</span>
                                        </div>
                                        <div class="col-4 d-flex align-items-center">
                                            <span>{{ mb_substr($el->Description, 0, 90) }}...</span>
                                        </div>
                                        <div class="col-2 d-flex align-items-end">
                                            <form action="{{ route('admin.query.workout.delete', ['id' => $el->id]) }}" method="get">
                                                @csrf
                                                <button type="submit" class="btn">Удалить</button>
                                            </form>
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
@endsection
