<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showOne($id)
    {
        $pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
            4 => 'страница 4',
            5 => 'страница 5',
        ];

        if (!isset($pages[$id])) {
            return "Страница с номером {$id} не найдена";
        }

        return $pages[$id];
    }

    public function showAll()
    {
        return "Показ всех страниц через функцию showAll";
    }
}
