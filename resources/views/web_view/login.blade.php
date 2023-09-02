@extends('layouts.web_view_home')

@section('content')
    <div class="mb-5">
        <a href="{{ route('web.view') }}" class="btn text-center w-100">Назад</a>
    </div>
    <div class="w-100 align-items-center">
        <div class="row">
            <div class="mb-4">
                <h3 class="text-center">Вход</h3>
            </div>
            <form>
                <div class="mb-3">
                    <label class="form-label">Укажите номер телефона</label>
                    <input type="tel" id="exampleInputTelephone" name="Phone" class="form-control">
                </div>
                <button type="submit" class="btn w-100">Зарегистрироваться</button>
            </form>  
        </div>
    </div>

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