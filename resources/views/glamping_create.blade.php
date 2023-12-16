@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="col-12 mb-4 mt-4">
                <h3 class="text-center">Добавить глемпинг</h3>
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
                                        <div class="col-12 mb-5 mt-3">
                                        </div>
                                        <div class="col-8 mx-auto">
                                            <form action="{{ route('admin.history.note.search.filter') }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Наименование</label>
                                                            <input type="text" name="Name" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Описание</label>
                                                            <input type="text" name="Description" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Изображение</label>
                                                        <input type="file" name="Image" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Дата провидения</label>
                                                        <input type="date" name="Date"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Время провидения</label>
                                                        <input type="time"  class="form-control">
                                                    </div>
                                                </div>
                                                <div class="mt-3"></div>
                                                <div class="d-flex justify-content-end">
                                                    <button type="submit" class="btn">Создать</button>
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
