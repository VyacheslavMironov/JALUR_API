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
                        <div class="row mb-4 mt-2">
                            <div class="col-5">
                                <span>Имя фамилия</span>
                            </div>
                            <div class="col-2">
                                <span>Роль</span>
                            </div>
                            <div class="col-4">
                                <span>Номер телефона</span>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        <div class="row bg-table rounded mb-2">
                            <div class="col-5 d-flex align-items-center">
                                <span>Диана Соколова</span>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <span>Роль 1</span>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <span>+7 (ххх) ххх-хх-хх</span>
                            </div>
                            <div class="col-1 d-flex align-items-center">
                                <a href="{{ route('admin.users.update') }}" class="btn">Изменить</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
