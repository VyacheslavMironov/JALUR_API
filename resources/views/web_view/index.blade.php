@extends('layouts.web_view_home')

@section('content')
    <div class="w-100 h-100 d-flex align-items-center">
        <div class="w-100">
            <div class="mb-4">
                <a href="{{ route('web.view.user.create') }}" class="btn w-100 text-center">СОЗДАТЬ АККАУНТ</a>
            </div>
            <div class="mb-4">
                <a href="{{ route('web.view.user.login') }}" class="btn w-100 text-center">ВОЙТИ</a>
            </div>
        </div>    
    </div>
@endsection