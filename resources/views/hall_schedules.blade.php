@extends('layouts.home')

@section('content')
    <div class="wrapper">
        <div class="container">
            <div class="col-12 mb-4 mt-4">
                <h3 class="text-center">Выберите зал</h3>
            </div>
            <div class="col-12 mb-4 mt-4">
                <div class="col-5 mx-auto">
                    <ul>
                        @foreach ($halls as $el)
                            <li class="mb-3">
                                <a class="btn btn-link w-100" href="{{ route('admin.schedules', ['hallId' => $el->id, "month" => $month, "year" => $year]) }}">{{ $el->Name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection