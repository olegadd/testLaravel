@extends('layouts.app')

@section('title', 'Заголовок сайта')


@section('sidebar')
    @parent


    <div>
        Содержание бокового меню раздела
    </div>

@endsection


@section('content')
    <div>
        Содержание страницы
    </div>
@endsection
