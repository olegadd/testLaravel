<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <nav>
        <div class="container">
            <a href="/">Мой сайт</a>
            <div>
                <a href="/">Главная</a>
                <a href="/about">О нас</a>
                <a href="/contact">Контакты</a>
            </div>
        </div>
    </nav>

    <div>
        @yield('content')
    </div>
</body>
</html>
