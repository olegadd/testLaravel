<!DOCTYPE html>
<html>
<head>
    <title>Пользователи</title>
    <style>
        .banned {
            color: red;
        }
        .active {
            color: green;
        }
    </style>
</head>
<body>
    <h1>Список пользователей</h1>
    <table>
        <th>
            <tr>
                <th>#</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>Статус</th>
            </tr>
        </th>
        <tbody>
            @foreach($users as $index => $user)
                <tr class="{{ $user['banned'] ? 'banned' : 'active' }}">
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['surname'] }}</td>
                    <td>{{ $user['banned'] ? 'забанен' : 'активен' }}</td>
                    </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>