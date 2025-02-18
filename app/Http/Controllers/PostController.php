<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function show($id)
    {
        $posts = [
            1 => 'text 1',
            2 => 'text 2',
            3 => 'text 3',
            4 => 'text 4',
            5 => 'text 5',
        ];

        return $posts[$id];
    }
}
