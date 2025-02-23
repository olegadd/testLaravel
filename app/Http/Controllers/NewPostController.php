<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewPostController extends Controller
{
    public function index()
    {
        return view('post.newPost');
    }

    public function home()
    {
        return view('site.home', [
            'title' => 'Главная страница',
            'content' => 'Добро пожаловать на наш сайт!'
        ]);
    }

    public function about()
    {
        return view('site.about', [
            'title' => 'О нас',
            'content' => 'Здесь вы можете узнать больше о нашей компании.'
        ]);
    }

    public function contact()
    {
        return view('site.contact', [
            'title' => 'Контакты',
            'content' => 'Свяжитесь с нами: +8(888)888-88-88'
        ]);
    }
}
