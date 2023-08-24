@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="col-12">
                <div class="card w-100 p-4 mb-5">
                    <div class="col-12 mb-4 mt-4">
                        <h3 class="text-center">Добавить зал</h3>
                    </div>
                    <div class="col-8 mx-auto">
                        <form action="{{ route('admin.query.create') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                              <label class="form-label">Наименование зала</label>
                              <input type="text" name="name" class="form-control">
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn">Создать</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-12 mb-4 mt-4">
                <h3 class="text-center">Залы</h3>
            </div>
            <div class="col-12">
                <div class="card w-100 p-2">
                    {{-- Если пустой массив --}}
                    {{-- <small class="text-center">Данных нет</small> --}}
                    {{-- END --}}
                    <div class="container">
                        <div class="row mb-4 mt-2">
                            <div class="col-1">
                                <span>#</span>
                            </div>
                            <div class="col-11">
                                <span>Название зала</span>
                            </div>
                        </div>
                        @foreach($halls as $el)
                            <div class="row bg-table rounded mb-2">
                                <div class="col-1 d-flex align-items-center">
                                    <span>{{ $el->id }}</span>
                                </div>
                                <div class="col-10 d-flex align-items-center">
                                    <span>
                                        <a href="{{ route('admin.hall', ['id' => $el->id]) }}" class="text">{{ $el->Name }}</a>
                                    </span>
                                </div>
                                <div class="col-1 d-flex align-items-center">
                                    <form action="{{ route('admin.query.delete') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $el->id }}">
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
@endsection