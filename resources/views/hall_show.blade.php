@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="col-12">
                <div class="card w-100 p-4 mb-5">
                    <div class="col-12 mb-4 mt-4">
                        <h3 class="text-center">Обновить информацию о зале</h3>
                    </div>
                    <div class="col-8 mx-auto">
                        <form action="{{ route('admin.query.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $hall->id }}">
                            <div class="mb-3">
                              <label class="form-label">Наименование зала</label>
                              <input type="text" name="name" class="form-control" value="{{ $hall->Name }}">
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
@endsection