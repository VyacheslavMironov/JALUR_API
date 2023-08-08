@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="full-window d-flex align-items-center">
            <div class="col-3 mx-auto">
                <div class="card w-100 p-4">
                    <div class="col-12 mt-5">
                        <div class="col-4 mx-auto">
                            <img
                                src="https://sun9-52.userapi.com/impg/0-K-o0gbAkL_zIdc70Y0hH9s9VUkSCL93mdLSg/B267CGHPvO0.jpg?size=1013x737&quality=95&sign=6445aeae562b7ecc4044e400cac725fc&type=album"
                                alt="logo JALUR"
                                id="logo-img"
                                class="img-fluid rounded-circle">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mt-5"></div>
                        <h4 class="text-center">Вход в панель администратора</h4>
                        <div class="mt-5"></div>
                    </div>
                    <div class="col-12">
                        <div class="container">
                            <form action="#" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputPhone" class="form-label">Введите номер телефона</label>
                                    <input
                                        type="tel"
                                        name="phone"
                                        class="form-control"
                                        id="exampleInputPhone"
                                        autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword" class="form-label">Введите пароль администратора</label>
                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        id="exampleInputPassword"
                                        autocomplete="off">
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn">Войти</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
