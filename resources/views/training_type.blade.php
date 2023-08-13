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
                                <form action="{{ route('admin.query.type.workout.create') }}" method="post">
                                    @csrf
                                    <div class="col-12 mb-5 mt-3">
                                        <h4 class="text-center">Добавить тип</h4>
                                    </div>
                                    <div class="col-8 mx-auto">
                                        <div class="mb-3">
                                            <label class="form-label">Укажите тип тренировки</label>
                                            <input
                                                type="text"
                                                name="name"
                                                class="form-control"
                                                autocomplete="off"
                                                @error('name') is-invalid @enderror>
                                            <span>
                                                @error('name') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
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
                        @foreach($type_workout as $el)
                            <div class="col-4 mb-4">
                                <div class="card p-1">
                                    <div class="col-12 d-flex justify-content-between align-items-center">
                                        <span>{{ $el->Name }}</span>
                                        <form action="{{ route('admin.query.type.workout.delete', ['id' => $el->id]) }}" method="get">
                                            @csrf
                                            <button type="submit" class="btn">Удалить</button>
                                        </form>
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
