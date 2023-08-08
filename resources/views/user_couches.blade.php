@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="col-12 mb-4 mt-4">
                <h3 class="text-center">Пользователи</h3>
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
                        <div class="row bg-table rounded mb-2 p-2">
                            <div class="col-2 d-flex align-items-center">
                                <img
                                    src="https://sun9-52.userapi.com/impg/0-K-o0gbAkL_zIdc70Y0hH9s9VUkSCL93mdLSg/B267CGHPvO0.jpg?size=1013x737&quality=95&sign=6445aeae562b7ecc4044e400cac725fc&type=album"
                                    alt="Имя Фамилия"
                                    id="user-img-admin"
                                    class="img-fluid rounded">
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <span>Диана Соколова</span>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <span>+7 (ххх) ххх-хх-хх</span>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-end">
                                <a href="{{ route('admin.users.update') }}" class="btn">Подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
