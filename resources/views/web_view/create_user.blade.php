@extends('layouts.web_view_home')

@section('content')
    <div class="mb-5">
        <a href="{{ route('web.view') }}" class="btn text-center w-100">Назад</a>
    </div>
    <div class="w-100 d-flex align-items-center">
        <div class="row">
            <div class="mb-4">
                <h3 class="text-center">Регистрация</h3>
            </div>
            <form action="{{ route('web.view.user.query.create') }}" method="post" class="mb-5">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Введите имя</label>
                  <input type="text" name="FirstName" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Введите фамилию</label>
                    <input type="text" name="LastName" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Укажите вес</label>
                    <input type="number" name="Weight" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Укажите рост</label>
                    <input type="number" name="Height" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Сколько вам лет?</label>
                    <input type="number" name="Age" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Укажите пол</label>
                    <div class="form-check">
                        <input class="form-check-input" name="Gender" value="Мужчина" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Мужчина
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" name="Gender" value="Женщина" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Женщина
                        </label>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Укажите номер телефона</label>
                    <input type="tel" id="exampleInputTelephone" class="form-control" name="Phone">
                </div>
                <button type="submit" class="btn w-100">Зарегистрироваться</button>
            </form> 
        </div>   
    </div>
    <div class="mt-15"><br></div>

    <script type="text/javascript">
        $(window).on("load", function() {
            $("html, body").animate({ scrollTop: 0 }, "slow");
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#exampleInputTelephone")
                .mask("+7 (999) 999-99-99");
        });
    </script>
@endsection