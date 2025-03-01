<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\NewPostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRequestController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\CheckSecretParam;
use App\Http\Middleware\PageVisitCounter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::prefix('blog')->group(function () {
    Route::get('/post/all', function () {
        return 'all';
    })->name('posts');
    Route::get('/post/{id}', function ($id) {
        return $id;
    });
});


Route::get('/admin', function () {
    return 'admin';
})->name('admin')->middleware('auth', 'admin');

Route::get('/secret-page', function () {
    return 'success!!!';
})->middleware(CheckSecretParam::class);

//Не работает с заданием 3.17 (закомментировать)
Route::get('/user/{id?}/', function ($id = 0) {
    return "User id: $id";
});


Route::get('/{year}/{month}/{day}', function ($year, $month, $day) {
    if (
        !preg_match('/^\d{4}$/', $year) ||
        !preg_match('/^(0[1-9]|1[0-2])$/', $month) ||
        !preg_match('/^(0[1-9]|[12]\d|3[01])$/', $day)
    ) {
        abort(400, 'Некорректный формат даты');
    }

    $y = (int)$year;
    $m = (int)$month;
    $d = (int)$day;

    if (!checkdate($m, $d, $y)) {
        abort(400, 'Такой даты не существует');
    }

    $timestamp = mktime(0, 0, 0, $m, $d, $y);
    $dayOfWeek = date('w', $timestamp);

    $days = [
        'Воскресенье',
        'Понедельник',
        'Вторник',
        'Среда',
        'Четверг',
        'Пятница',
        'Суббота'
    ];

    return $days[$dayOfWeek];
})->where([
    'year' => '\d{4}',
    'month' => '0[1-9]|1[0-2]',
    'day' => '0[1-9]|[12]\d|3[01]'
]);

Route::get('/users/{username}', function ($username) {
    $users = [
        'user1' => 'city1',
        'user2' => 'city2',
        'user3' => 'city3',
        'user4' => 'city4',
        'user5' => 'city5'
    ];

    if (!isset($users[$username])) {
        return "Пользователь '{$username}' не найден";
    }

    return $users[$username];
});

Route::get('/visit-count', function () {
    $visitCount = Session::get('page_visit_count', 0);

    return $visitCount;
})->middleware(PageVisitCounter::class);

Route::get('/post/{name}/{surname}', [PostController::class, 'show']);

Route::get('/pages/show/{id}', [PageController::class, 'showOne']);

Route::get('/pages/all', [PageController::class, 'showAll']);

Route::get('/show', [NewPostController::class, 'index']);

Route::get('/index', function () {
    return view('child');
});

Route::get('/', [NewPostController::class, 'home'])->name('home');
Route::get('/about', [NewPostController::class, 'about'])->name('about');
Route::get('/contact', [NewPostController::class, 'contact'])->name('contact');
Route::get('/links', [LinksController::class, 'links'])->name('links');

Route::get('/users', [UsersController::class, 'users'])->name('users');


Route::get('/user', [UserController::class, 'show']);
