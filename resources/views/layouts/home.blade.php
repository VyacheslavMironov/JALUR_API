<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JALUR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @vite(['resources/css/app.css'])
</head>
<body>
    <main class="container-fluid">
        <div class="row row-container">
            <div class="menu col-lg-3">
                <div id="fx-menu">
                    <div class="card bx-top-menu p-3">
                        <div class="row h-100">
                            <div class="col-5">
                                <img
                                    src="https://sun9-52.userapi.com/impg/0-K-o0gbAkL_zIdc70Y0hH9s9VUkSCL93mdLSg/B267CGHPvO0.jpg?size=1013x737&quality=95&sign=6445aeae562b7ecc4044e400cac725fc&type=album"
                                    alt="logo JALUR"
                                    id="logo-img"
                                    class="img-fluid rounded-circle">
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <h3 class="text-light">
                                    Панель<br>
                                    администратора
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="menu-body mt-5 p-3">
                        <ul>
                            <li class="mt-3">
                                <a href="{{ route('admin.schedules') }}" class="nav-item btn bx-button-menu menu-active">Расписание</a>
                            </li>
                            <li class="mt-3">
                                <a href="{{ route('admin.history.note') }}" class="nav-item btn bx-button-menu">История записей</a>
                            </li>
                            <li class="mt-3">
                                <a href="{{ route('admin.training') }}" class="nav-item btn bx-button-menu">Занятия</a>
                            </li>
                            <li class="mt-3">
                                <a href="{{ route('admin.users') }}" class="nav-item btn bx-button-menu">Пользователи</a>
                            </li>
                            <li class="mt-3">
                                <a href="{{ route('admin.history.sale') }}" class="nav-item btn bx-button-menu">История покупок</a>
                            </li>
                            <li class="mt-3">
                                <a href="{{ route('admin.users.couch') }}" class="nav-item btn bx-button-menu">Тренера</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 mt-3 row-component">
                <div class="header">
                    <div class="row">
                        <div class="col-8"></div>
                        <div class="col-4">
                            <div class="position-fixed w-20-e">
                                <div class="card w-100 p-2">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-3">
                                                <img
                                                    src="https://sun9-52.userapi.com/impg/0-K-o0gbAkL_zIdc70Y0hH9s9VUkSCL93mdLSg/B267CGHPvO0.jpg?size=1013x737&quality=95&sign=6445aeae562b7ecc4044e400cac725fc&type=album"
                                                    alt="logo JALUR"
                                                    id="user-img-admin"
                                                    class="img-fluid rounded-circle">
                                            </div>
                                            <div class="col-7">
                                                <strong>{{ session()->get('first_name') }} {{ session()->get('last_name') }}</strong>
                                                <div>
                                                    <small{{ session()->get('phone') }}</small>
                                                </div>
                                            </div>
                                            <div class="col-2 d-flex align-items-center justify-content-center">
                                                <form action="{{ route('admin.users.logout') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ session()->get('id') }}">
                                                    <button class="btn p-0" type="submit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" style="fill: rgb(255 255 255);">
                                                            <path d="M19.002 3h-14c-1.103 0-2 .897-2 2v4h2V5h14v14h-14v-4h-2v4c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.898-2-2-2z"></path>
                                                            <path d="m11 16 5-4-5-4v3.001H3v2h8z"></path>
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="content" class="row mt-7-e">
                    @if (\Session::has('error'))
                        <div class="toast se-toast mt-2" id="seToastError" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="toast-header">
                                <strong class="me-auto">Ошибка</strong>
                                <button type="button" id="seToastButtonClose" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body text-white bg-danger">
                                {!! \Session::get('error') !!}
                            </div>
                        </div>
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
