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
                        <a href="{{ route('admin.training.type') }}" class="btn btn-panel m-2">Тип</a>
                        <a href="{{ route('admin.training.create') }}" class="btn btn-panel btn-panel-active m-2">Добавить</a>
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
                                <form action="{{ route('admin.query.workout.create') }}" enctype="multipart/form-data" method="post">
                                    @csrf
                                    <div class="col-12 mb-5 mt-3">
                                        <h4 class="text-center">Добавить</h4>
                                    </div>
                                    <div class="col-8 mx-auto">
                                        <div class="mb-3">
                                            <label class="form-label">Укажите название</label>
                                            <input
                                                name="name"
                                                type="text"
                                                class="form-control"
                                                autocomplete="off"
                                                @error('name') is-invalid @enderror>
                                            <span>
                                                @error('name') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Выберите  тренера</label>
                                            <select class="form-select" aria-label="Default select example" name="couch" @error('couch') is-invalid @enderror>
                                                <option selected>Нажмите что бы выбрать</option>
                                                @foreach($workout as $el)
                                                    <option value="{{ $el->id }}">{{$el->FirstName}} {{ $el->LastName }}</option>
                                                @endforeach
                                            </select>
                                            <span>
                                                @error('couch') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Выберите  тип</label>
                                            <select class="form-select" name="type_workout_id" aria-label="Default select example" @error('type_workout_id') is-invalid @enderror>
                                                @foreach($type_workout as $el)
                                                    <option value="{{ $el->id }}">{{ $el->Name }}</option>
                                                @endforeach
                                            </select>
                                            <span>
                                                @error('type_workout_id') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Выберите обложку</label>
                                            <input
                                                name="image"
                                                type="file"
                                                class="form-control"
                                                autocomplete="off"
                                                @error('image') is-invalid @enderror>
                                            <span>
                                                @error('image') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Описание</label>
                                            <textarea name="description" id="" cols="30" rows="10" class="form-control" @error('description') is-invalid @enderror></textarea>
                                            <span>
                                                @error('description') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
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
            </div>
        </div>
    </div>
@endsection
