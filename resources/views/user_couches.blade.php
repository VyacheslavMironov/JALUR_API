@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="col-12 mb-4 mt-4">
                <h3 class="text-center">Пользователи</h3>
            </div>
            <div class="col-12">
                <div class="d-flex  justify-content-between">
                    <div class="col-12 d-flex">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-panel btn-panel-active m-2">Добавить</a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 p-2">
                    {{-- Если пустой массив --}}
                    {{-- <small class="text-center">Данных нет</small> --}}
                    {{-- END --}}
                    <div class="container">
                        <div class="row mb-4 mt-2 p-2">
                            <div class="col-2"></div>
                            <div class="col-4">
                                <span>Имя фамилия</span>
                            </div>
                            <div class="col-4">
                                <span>Номер телефона</span>
                            </div>
                            <div class="col-2">
                            </div>
                        </div>
                        @foreach($users as $el)
                            <div class="row bg-table rounded mb-2 p-2">
                                <div class="col-2 d-flex align-items-center">
                                    <img
                                        @if ($el->Image)
                                            src="{{ asset('/storage/'.$el->Image) }}"
                                        @else
                                            src="https://sun9-52.userapi.com/impg/0-K-o0gbAkL_zIdc70Y0hH9s9VUkSCL93mdLSg/B267CGHPvO0.jpg?size=1013x737&quality=95&sign=6445aeae562b7ecc4044e400cac725fc&type=album"
                                        @endif
                                        alt="{{ $el->LastName }} {{ $el->FirstName }}"
                                        id="user-img-admin"
                                        class="img-fluid rounded">
                                </div>
                                <div class="col-4 d-flex align-items-center">
                                    <span>{{ $el->LastName }} {{ $el->FirstName }}</span>
                                </div>
                                <div class="col-4 d-flex align-items-center">
                                    <span>{{ $el->Phone }}</span>
                                </div>
                                <div class="col-2 d-flex align-items-center justify-content-end">
                                    <a href="{{ route('admin.users.update', ['id' => $el->id]) }}" class="btn">Подробнее</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
