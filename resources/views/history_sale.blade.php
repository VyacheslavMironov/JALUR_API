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
                            <div class="col-3">
                                <span>Имя фамилия</span>
                            </div>
                            <div class="col-3">
                                <span>Название занятия</span>
                            </div>
                            <div class="col-4">
                                <span>Сумма</span>
                            </div>
                            <div class="col-2">
                                <span>Дата пополнения</span>
                            </div>
                        </div>
                        <div class="row bg-table rounded mb-2 p-2">
                            <div class="col-3 d-flex align-items-center">
                                <span>Диана Соколова</span>
                            </div>
                            <div class="col-3 d-flex align-items-center">
                                <span>Название занятия</span>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <span>1200 р</span>
                            </div>
                            <div class="col-2 d-flex align-items-center">
                                <span>01.01.2023</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
