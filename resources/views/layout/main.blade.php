<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SomeStore</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
<div class="header__wrapper">
    <header class="header content">
        <div class="flex flx-dir-row">
            <span class="header__logo">SomeStore</span>
            <nav class='header__nav'>
                <a href="{{route('index')}}" class='header__item'>Скрипты</a>
                <a href="" class='header__item'>Контакты</a>
                <a href="" class='header__item'>FAQ</a>
            </nav>
        </div>
        <div class="header__buttons">
            @if(session()->has('admin'))
                <a href="{{route('admin.main')}}" class="login__button">Админ панель</a>
            @endif
        </div>
        <div class="burger burger__none">
            <div class="burger__line1"></div>
            <div class="burger__line2"></div>
        </div>
        <div class="burgerMenu burgerMenu__none">
            <nav class='burgerMenu__header__nav'>
                <a href="#" class='header__item'>Скрипты</a>
                <a href="#" class='header__item'>Контакты</a>
                <a href="#" class='header__item'>FAQ</a>
                <a href="#" class="registration__button">Регистрация</a>
                <a href="#" class="login__button">Вход</a>
            </nav>
        </div>
    </header>
</div>
<main>
    <section class="content section__products">
        @yield('content')
    </section>
</main>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
