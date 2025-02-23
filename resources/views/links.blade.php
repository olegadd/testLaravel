<!DOCTYPE html>
<html>
<head>
    <title>Ссылки</title>
</head>
<body>
    <h1>Список ссылок</h1>

    @foreach($links as $link)
        <a href="{{ $link['href'] }}">{{ $link['text'] }}</a><br>
    @endforeach
</body>
</html>