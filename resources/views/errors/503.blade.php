{{--
@extends('errors::minimal')

@section('title', __('Service Unavailable'))
@section('code', '503')
@section('message', __($exception->getMessage() ?: 'Service Unavailable'))
--}}
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive admin dashboard and web application ui kit. ">
    <meta name="keywords" content="maintenance">

    <title>Under maintenance &mdash; {{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,300i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/panelsrc/css/core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/panelsrc/css/app.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/panelsrc/css/style.min.css') }}" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{ asset('/panelsrc/img/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('panelsrc/assets/img/favicon.png') }}">
</head>

<body>


<div class="row no-margin h-fullscreen" style="padding-top: 10%">

    <div class="col-12">
        <div class="card card-transparent center-h text-center">
            <h1 class="text-secondary lh-1" style="font-size: 200px"><i class="fa fa-gear"></i></h1>
            <hr class="w-30px">
            <h3 class="text-uppercase">Мы скоро вернемся!</h3>

            <p class="lead">Мы делаем что-то важное в данный момент.<br>Возвращайтесь позже.</p>
        </div>
    </div>


    <footer class="col-12 align-self-end text-center fs-13">
        <p>Copyright © {{ now()->year }} <a href="https://inspiro.site">{{ config('app.name') }}</a>. All rights reserved.</p>
    </footer>
</div>

<!-- Scripts -->
<script src="{{ asset('panelsrc/js/core.min.js') }}"></script>
<script src="{{ asset('panelsrc/js/app.min.js') }}"></script>
<script src="{{ asset('panelsrc/js/script.min.js') }}"></script>

</body>
</html>
