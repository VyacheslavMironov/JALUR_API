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
                        <div class="col-8 mx-auto">
                            <form action="{{ route('admin.query.users.update') }}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="col-12 mb-5 mt-3">
                                    <h4 class="text-center">Добавить</h4>
                                </div>
                                <div class="row">
                                    <input
                                        type="hidden"
                                        class="form-control"
                                        name="id"
                                        value="{{ $user->id }}">
                                    <input
                                        type="hidden"
                                        class="form-control"
                                        name="image_old"
                                        value="{{ $user->Image }}">
                                    <input
                                        type="hidden"
                                        class="form-control"
                                        name="gender"
                                        value="{{ $user->Gender }}">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Имя</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="first_name"
                                                value="{{ $user->FirstName }}"
                                                autocomplete="off"
                                                @error('first_name') is-invalid @enderror>
                                            <span class="text-center">
                                                @error('first_name') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Фамилия</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="last_name"
                                                value="{{ $user->LastName }}"
                                                autocomplete="off"
                                                @error('last_name') is-invalid @enderror>
                                            <span class="text-center">
                                                @error('last_name') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Номер телефона</label>
                                    <input
                                        id="exampleInputTelephone"
                                        type="tel"
                                        class="form-control"
                                        name="phone"
                                        value="{{ $user->Phone }}"
                                        autocomplete="off"
                                        @error('phone') is-invalid @enderror>
                                    <span class="text-center">
                                        @error('phone') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                    </span>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Возраст</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                name="age"
                                                value="{{ $user->Age }}"
                                                autocomplete="off"
                                                @error('age') is-invalid @enderror>
                                            <span class="text-center">
                                                @error('age') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Роль</label>
                                            <select id="role" onchange="roleRead()" class="form-select" name="role" aria-label="Default select example" @error('role') is-invalid @enderror>
                                                <option @if ($user->Role == null) selected @endif>Нажмите что бы выбрать</option>
                                                <option @if ($user->Role == 'Администратор') selected @endif value="Администратор">Администратор</option>
                                                <option @if ($user->Role == 'Тренер') selected @endif value="Тренер">Тренер</option>
                                                <option @if ($user->Role == 'Клиент') selected @endif value="Клиент">Клиент</option>
                                            </select>
                                            <span class="text-center">
                                                @error('role') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div id="user-couch-data" class="row d-none">
                                    <div class="mb-3">
                                        <label class="form-label">Фотография</label>
                                        <input
                                            type="file"
                                            class="form-control"
                                            name="image"
                                            autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Описание тренера</label>
                                        <textarea class="form-control" name="description" cols="30" rows="10" autocomplete="off">{{ $user->Description }}</textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Вес</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="weight"
                                                value="{{ $user->Weight }}"
                                                autocomplete="off"
                                                @error('weight') is-invalid @enderror>
                                            <span class="text-center">
                                                @error('weight') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Рост</label>
                                            <input
                                                type="text"
                                                class="form-control"
                                                name="height"
                                                value="{{ $user->Height }}"
                                                autocomplete="off"
                                                @error('height') is-invalid @enderror>
                                            <span class="text-center">
                                                @error('height') <span class="invalid-feedback d-block">{{ $message }}</span> @enderror
                                            </span>
                                        </div>
                                    </div>
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
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#exampleInputTelephone")
                .mask("+7 (999) 999-99-99");
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#exampleInputTelephone")
                .mask("+7 (999) 999-99-99");
        });
        function roleRead()
        {
            let selectedOption = $('#role').val();
            if (selectedOption == 'Тренер')
            {
                document.getElementById('user-couch-data').classList.remove('d-none');
                document.getElementById('user-couch-data').classList.add('d-block');
            }
            else
            {
                document.getElementById('user-couch-data').classList.remove('d-block');
                document.getElementById('user-couch-data').classList.add('d-none');
            }
        }

    </script>
@endsection
