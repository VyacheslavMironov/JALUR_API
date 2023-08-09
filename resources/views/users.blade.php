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
                            <div class="col-7">
                                <span>Имя фамилия</span>
                            </div>
                            <div class="col-4">
                                <span>Номер телефона</span>
                            </div>
                            <div class="col-1"></div>
                        </div>
                        @foreach($users as $el)
                            <div class="row bg-table rounded mb-2">
                            <div class="col-7 d-flex align-items-center">
                                <span>{{ $el->LastName }} {{ $el->FirstName }}</span>
                            </div>
                            <div class="col-4 d-flex align-items-center">
                                <span>{{ $el->Phone }}</span>
                            </div>
                            <div class="col-1 d-flex align-items-center">
                                <a href="{{ route('admin.users.update', ['id' => $el->id]) }}" class="btn">Изменить</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
