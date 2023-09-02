@extends('layouts.web_view_home')

@section('content')
    <div class="mb-5">
        <a href="{{ route('web.view') }}" class="btn text-center w-100">Назад</a>
    </div>
    <div class="w-100 align-items-center">
        <div class="row">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="fill: rgb(55, 201, 130);">
                <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm-1.999 14.413-3.713-3.705L7.7 11.292l2.299 2.295 5.294-5.294 1.414 1.414-6.706 6.706z"></path>
            </svg>
            <h3 class="text-center">Вы успешно создали аккаунт!</h3>
            <div class="mb-3">
                <a href="{{ route('web.view.user.login') }}" class="btn text-center w-100">Войти</a>
            </div>
        </div>
    </div>
    
    <script type="text/javascript">
        $(window).on("load", function() {
            $("html, body").animate({ scrollTop: 0 }, "slow");
        });
    </script>
@endsection